<?php
class Model_adminCategory extends Model {
    function __construct()
    {
        parent::__construct();
    }
    function getCategory(){
        $sql='select * from tbl_category';
        $result=$this->doSelect($sql);
        return $result;

    }
    function getChildren($categoryId){
        $sql='select * from tbl_category where  parent=?';
        $value=[$categoryId];
        $result=$this->doSelect($sql,$value);
       return $result ;
    }
    function showChildren($categoryId){
        $categoryInfo=$this->categoryInfo($categoryId);
        $parent=$categoryInfo['parent'];
        $allParents=[];
        while ($parent!=0){
            $sql='select * from tbl_category where  id=?';
            $value=[$parent];
            $parentOfCategory=$this->doSelect($sql,$value,1);
            array_push($allParents,$parentOfCategory);
            $parent=$parentOfCategory['parent'];
        }
        return $allParents;


    }
    function categoryInfo($categoryId){
        $sql='select * from tbl_category where  id=?';
        $value=[$categoryId];
        $result=$this->doSelect($sql,$value,1);
        return $result ;
    }
    function  addCategory($title,$parent){
      $sql='insert into tbl_category (title,parent) values (?,?)';
      $stmt=self::$conn->prepare($sql);
      $stmt->bindValue(1,$title);
        $stmt->bindValue(2,$parent);
      $stmt->execute();
    }

}