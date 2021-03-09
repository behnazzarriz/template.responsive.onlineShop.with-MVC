<?php
class AdminCategory extends  Controller{
    function  __construct()
    {
    }
    function index(){
        $category=$this->model->getChildren(0);
        $data=['categories'=>$category];
      $this->view('admin/category/index',$data);
    }
    function showChildren($categoryId){
        $subCategories=$this->model->getChildren($categoryId);
        $parents=$this->model->showChildren($categoryId);
        $categoryInfo=$this->model->CategoryInfo($categoryId);
        $data=['categories'=>$subCategories,'parents'=>$parents,'categoryInfo'=>$categoryInfo];
       $this->view('admin/category/index',$data);
    }

    function addCategory($parentId=0){
        echo $parentId;
       if(isset($_POST['title'])){
           $title=$_POST['title'];
           $parent=$_POST['parent'];
           $this->model->addCategory($title,$parent);
       }
       $categories=$this->model->getCategory();
       $data=['categories'=>$categories,'parentId'=>$parentId];
        $this->view('admin/category/addCategory',$data);
    }

}