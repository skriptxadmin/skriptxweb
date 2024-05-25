<?php

namespace App\Controllers;



class HomeController extends Controller{

    public function index(){

        $data = ['name' => 'NAMO PHP'];

        $this->view('home/index', $data);

        return;

    }
}