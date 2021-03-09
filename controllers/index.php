<?php

use http\Params;

class index extends Controller {
    function __construct()
    {

    }
    function  index(){
       $slider1=$this->model->getSlider1();
       $slider2=$this->model->getSlider2();
       $slider2_itemes=$slider2[0];
       $date_end=$slider2[1];
       $sliderOnlyThisShop=$this->model->getSliderOnlyThisShop();
       $mostViewed=$this->model->mostView();
       $lastProduct=$this->model->lastProduct();
       $data=[$slider1,$slider2_itemes,$date_end,$sliderOnlyThisShop,$mostViewed,$lastProduct];
       $this->view('index/index',$data);
    }

}
