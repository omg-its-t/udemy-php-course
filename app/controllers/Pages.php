<?php

class Pages extends Controller{
    public function __construct(){
        
    }

    public function index(){

        //this is the method inside controller.php we are calling
        $data = [
            'title' => 'TrapMVC',
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