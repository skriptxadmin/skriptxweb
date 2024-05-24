<?php

namespace App\Controllers;



class IndexController extends Controller{

    public function index(){

        $data = ['name' => 'NAMO PHP'];

        $this->view('index/index', $data);

        return;

    }
}