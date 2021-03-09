<?php
class Login extends Controller{
    function __construct()
    {
    }
    function index(){
        $this->view('login/index');
    }
}