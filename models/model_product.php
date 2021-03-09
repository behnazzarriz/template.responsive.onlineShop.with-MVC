<?php
class Model_product extends Model {
    function __construct()
    {
        parent::__construct();
    }
    function productInfo($id){
        $sql="select * from product where id=?";
        $values=[$id];
        $result=$this->doSelect($sql,$values,1);
         /*timer*/
        $timeSpecial=$result['time_special'];
        $options=self::getOption();
        $duration_special=$options['duration_special'];
        $timeEnd=$timeSpecial+$duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date=date('F d,Y H:i:s',$timeEnd);
        $result['date_special']=$date;
        /*End timer*/

        /*Discount products*/
        $price=$result['price'];
        $discount=$result['discount'];
        $priceCalculate=$this->calculateDiscount($price,$discount);
        $result['price_discount']=$priceCalculate[0];
        $result['price_total']=$priceCalculate[1];
        /*end Discount products*/


        /*choose Color of products*/
        $colors=$result['colors'];
        $colors=explode(',',$colors);
        $colors=array_filter($colors);
        $allColors=[];
        foreach ($colors as $color){
            $colorsInfo=$this->colorsInfo($color);
            array_push($allColors,$colorsInfo);
        }
        $result['all_colors']=$allColors;
        /*end choose Color of products*/

        /*choose Gurantee of products*/
        $grantees=$result['gurantee'];
        $grantees=explode(',',$grantees);
        $grantees=array_filter($grantees);
        $allGrantee=[];
        foreach ($grantees as $grantee){
            $granteeInfo=$this->granteeInfo($grantee);
            array_push($allGrantee,$granteeInfo);
        }
        $result['all_grantee']=$allGrantee;
        /*end choose Gurantee of products*/

        return $result;
    }
    function colorsInfo($id){
        $sql='select * from tbl_colors where id=?';
        $values=[$id];
        $result=$this->doSelect($sql,$values,1);
        return $result;
    }
    function granteeInfo($id){
        $sql='select * from tbl_gurantee where id=?';
        $values=[$id];
        $result=$this->doSelect($sql,$values,1);
        return $result;
    }

    function getSliderOnlyThisShop(){
        $sql='select * from product where onlyThisShop=?';
        $values=[1];
        $result=$this->doSelect($sql,$values);

        return $result;
    }
    function  review($id){
        $sql='select * from tbl_review where id_product=?';
        $value=[$id];
        $result=$this->doSelect($sql,$value);

       return $result;
    }
    function  fanni($categoryId,$productId){
       $sql='select * from tbl_attr where category_id=? and parent=?';
       $values=[$categoryId,0];
       $result=$this->doSelect($sql,$values);
       foreach ($result as $key=>$row){
           $sql2='select tbl_attr.title,tbl_product_attr.value from tbl_attr 
                  left join  tbl_product_attr 
                  on tbl_attr.id=tbl_product_attr.attr_id and tbl_product_attr.product_id=? where tbl_attr.parent=?  ';
           $value=[$productId,$row['id']];
           $result2=$this->doSelect($sql2,$value);
           $result[$key]['children']=$result2;
       }

       return $result;


    }
    function comment_param($categoryId){
        $sql='select * from tbl_comment_param where category_id=?';
        $value=[$categoryId];
        $result=$this->doSelect($sql,$value);
        return $result;
    }
    function  getComment($productId){
        $sql='select * from tbl_comment where productId=?';
        $value=[$productId];
        $result=$this->doSelect($sql,$value);
        $totalScore=[];
        foreach ($result as $row){
            $paramScore=unserialize($row['param']);
            foreach ($paramScore as $index=>$param){
                $paramId=$index;
                $paramValue=$param;
                if(!isset($totalScore[$paramId])){
                    $totalScore[$paramId]=0;
                }
                $totalScore[$paramId]=($totalScore[$paramId]+$paramValue);
            }
        }
        $commentCount=sizeof($result);
        foreach ($totalScore as $key=>$item) {
            $value=$item/$commentCount;
            $totalScore[$key]=$value;
        }
        return ['allCommentOfProduct'=>$result,'averageOfScores'=>$totalScore];
    }
    function  getQuestion($productId)
    {
        $sql = 'select * from tbl_question where productId=? and parent=?';
        $value = [$productId,0];
        $questions = $this->doSelect($sql, $value);

        $sql2='select * from tbl_question where productId=? and parent!=?';
        $value=[$productId,0];
        $answers=$this->doSelect($sql2, $value);
        $newAnswer=[];
        foreach ($answers as $answer){
            $parent=$answer['parent'];
            $newAnswer[$parent]=$answer;
        }
     /*   foreach ($questions as $key=>$question){
            $sql='select * from tbl_question where  parent=?';
            $value = [$question['id']];
            $answer=$this->doSelect($sql,$value,1);
            $questions[$key]['answer']=$answer;

        }*/
        return [$questions,$newAnswer];
    }
    function  getGallery($productId){
        $sql='select * from tbl_gallery where productId=? order by 3d desc ';
        $value=[$productId];
        $result=$this->doSelect($sql,$value);
        return $result;

    }


}
