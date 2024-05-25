<?php
namespace App\Controllers;

class PageNotFoundController extends Controller{

    public function index(){

        $this->view('page-not-found/index');
    }
}