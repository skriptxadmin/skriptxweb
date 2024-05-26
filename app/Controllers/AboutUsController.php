<?php

namespace App\Controllers;



class AboutUsController extends Controller{

    public function index(){

        $data = [];

        $this->view('about-us/index', $data);

        return;

    }
}