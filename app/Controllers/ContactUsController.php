<?php

namespace App\Controllers;



class ContactUsController extends Controller{

    public function index(){

        $data = [];

        $this->view('contact-us/index', $data);

        return;

    }
}