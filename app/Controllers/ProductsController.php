<?php

namespace App\Controllers;



class ProductsController extends Controller{

    public function index(){

        $data = [];

        $this->view('products/index', $data);

        return;

    }
}