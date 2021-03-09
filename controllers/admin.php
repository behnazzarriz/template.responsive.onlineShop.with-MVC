<?php
class Admin extends Controller{
     function __construct()
    {

    }
    function index(){
         $this->view('admin/index');
    }
    function categories(){
         $category=$this->model->getCategory();
         $data=['categories'=>$category];
        $this->view('admin/category',$data);
    }
}