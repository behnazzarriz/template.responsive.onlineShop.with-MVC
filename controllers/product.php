<?php
class Product extends Controller {
    function  __construct()
    {

    }
    function index($id){
        $productInfo=$this->model->productInfo($id);
        $onlyThisShop=$this->model->getSliderOnlyThisShop();
        $gallery=$this->model->getGallery($id);
        $data=['productInfo'=>$productInfo,'onlyThisShop'=>$onlyThisShop,'gallery'=>$gallery];



      $this->view('product/index',$data);
    }
    function tab($id,$categoryId){
      $index=$_POST['index'];
        if($index==0){
            $review=$this->model->review($id);
            $data=['review'=>$review];
            $this->view('product/tab1',$data,1,1);
        }
        if($index==1){
            $fanni=$this->model->fanni($categoryId,$id);
            $data=['fanni'=>$fanni];
            $this->view('product/tab2',$data,1,1);
        }
        if($index==2){
            $comment_param=$this->model->comment_param($categoryId);
            $comment=$this->model->getComment($id);
            $allCommentOfProduct=$comment['allCommentOfProduct'];
            $averageOfScores=$comment['averageOfScores'];

            $data=['comment_param'=>$comment_param,'allCommentOfProduct'=> $allCommentOfProduct,'averageOfScores'=>$averageOfScores];
            $this->view('product/tab3',$data,1,1);
        }
        if($index==3){
            $getQuestion=$this->model->getQuestion($id);
            $question=$getQuestion[0];
            $answer=$getQuestion[1];
            $data=['question'=>$question,'answer'=>$answer];
            $this->view('product/tab4',$data,1,1);
        }
    }

}