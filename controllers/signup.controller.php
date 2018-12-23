<?php

class SignupController extends Controller{

    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Account;
    }
    public function index(){
        if ( $_POST ){
            if($this->model->register($_POST)) {
                $this->model->loginAccount($_POST['email'], $_POST['password']);
                Router::redirect('/');
            } else {
                Session::setFlash("<strong>Oh Snap!</strong> There was an error saving this record!");
            }
        }
    }
}
