<?php
class Search extends Controller{
    function __construct()
    {
    }
    function index(){
        $this->view('search/index');
    }
}