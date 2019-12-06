<?php

class Pages extends Controller{
    public function __construct(){
        $this->postModel = $this->model('Post');
        
    }

    public function index(){

        //this goes to the controller to the database since we extended Controller class
        $posts = $this->postModel->getPosts();

        //this is the method inside controller.php we are calling
        $data = [
            'title' => 'Welcome',
            'posts' => $posts
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