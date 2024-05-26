<?php

namespace App\Controllers;



class ServicesController extends Controller{

    public function index(){

        $data = [];

        $this->view('services/index', $data);

        return;

    }
}