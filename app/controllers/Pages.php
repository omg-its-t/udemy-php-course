<?php

class Pages extends Controller{
    public function __construct(){
        $this->postModel = $this->model('Post');
        
    }

    public function index(){
        //this is the method inside controller.php we are calling
        $data = [
            'title' => 'Welcome'
        ];
        
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About us'
        ];
        
        $this->view('pages/about', $data);
    }
}