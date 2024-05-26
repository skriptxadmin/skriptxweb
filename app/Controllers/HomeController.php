<?php

namespace App\Controllers;



class HomeController extends Controller{

    public function index(){

        $carousel_content = (array) json_decode(file_get_contents(ROOT_DIR.'json/home-carousel.json')); 

        $data = ['carousel_content' => $carousel_content];

        $this->view('home/index', $data);

        return;

    }
}