<?php

namespace App\Controllers;



class CareersController extends Controller{

    public function index(){

        $data = [];

        $this->view('careers/index', $data);

        return;

    }

    public function fulltime(){

        $data = [];

        $this->view('careers/fulltime', $data);

        return;

    }

    public function parttime(){

        $data = [];

        $this->view('careers/parttime', $data);

        return;

    }

    public function internship(){

        $data = [];

        $this->view('careers/internship', $data);

        return;

    }

    
    public function apply(){

        $data = [];

        $this->view('careers/apply', $data);

        return;

    }

   
}