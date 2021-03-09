<?php
class Showcart extends Controller{
    function __construct()
    {
    }
    function index(){
        $this->view('showcart/index');
    }
}