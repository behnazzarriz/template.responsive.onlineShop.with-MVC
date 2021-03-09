<?php
class  Controller{
    function __construct()
    {
    }
    function view($viewUrl,$result=[],$notIncludeHeader='',$notIncludeFooter=''){
        if($notIncludeHeader==''){
            require_once ('header.php');
        }
        require_once ('views/'.$viewUrl.'.php');
        if($notIncludeFooter==''){
            require_once ('footer.php');
        }

    }
    function model($modelUrl){
        require_once ('models/model_'.$modelUrl.'.php');
        $className='model_'.$modelUrl;
        $this->model=new $className;
    }
}