<?php
class Model_admin extends Model {
    function __construct()
    {
        parent::__construct();
    }
    function getCategory(){
        $sql='select * from tbl_category';
        $result=$this->doSelect($sql);
        return $result;

    }
}