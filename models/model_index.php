<?php
class Model_index extends Model {
    function __construct()
    {
         parent::__construct();
    }
    function getSlider1(){

        $sql='select * from tbl_slider1';
        $result=$this->doSelect($sql);
        return $result;
    }
    function getSlider2(){
        $sql='select * from product where special=?';
        $values=[1];
        $result=$this->doSelect($sql,$values);
        $firstRow=$result[0];
        $timeSpecial=$firstRow['time_special'];

        foreach ($result as $key=>$row){
            $discount=$row['discount'];
            $price=$row['price'];
            $price_total=$this->calculateDiscount($price,$discount);
            $result[$key]['price_total']=$price_total[1];


        }


        $options=self::getOption();
        $duration_special=$options['duration_special'];



        $timeEnd=$timeSpecial+$duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date=date('F d,Y H:i:s',$timeEnd);

        return[$result,$date] ;
    }
    function getSliderOnlyThisShop(){
        $sql='select * from product where onlyThisShop=?';
        $values=[1];
        $result=$this->doSelect($sql,$values);

        return $result;
    }
    function mostView(){
        $sql='select * from tbl_option where setting=?';
        $values=['limit_slider'];
        $result=$this->doSelect($sql,$values,1);
        $limit=$result['value'];

        $sql='select * from product order by viewed DESC limit '.$limit.' ';
        $result=$this->doSelect($sql);
        return $result;
    }
    function lastProduct(){
        $sql='select * from tbl_option where setting=?';
        $values=['limit_slider'];
        $result=$this->doSelect($sql,$values,1);

        $limit=$result['value'];
        $sql='select * from product order by id DESC limit '.$limit.' ';
        $result=$this->doSelect($sql);
        return $result;
    }

}