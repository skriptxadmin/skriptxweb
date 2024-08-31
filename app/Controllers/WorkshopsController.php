<?php

namespace App\Controllers;



class WorkshopsController extends Controller{

    public function index(){

        $data = [];

        $this->view('workshops/index', $data);

        return;

    }

    public function book(){

        $data = [];

        $this->view('workshops/book', $data);

        return;

    }

    
    public function notify(){

        $data = [];

        $this->view('workshops/notify', $data);

        return;

    }
}