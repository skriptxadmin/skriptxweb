<?php

namespace App\Controllers;



class ServicesController extends Controller{

    public function index(){

        $data = [];

        $this->view('services/index', $data);

        return;

    }

    public function training(){

        $data = [];

        $this->view('services/training', $data);

        return;

    }

    public function placement(){

        $data = [];

        $this->view('services/placement', $data);

        return;

    }

    public function software(){

        $data = [];

        $this->view('services/software', $data);

        return;

    }

    
    public function open_source(){

        $data = [];

        $this->view('services/open-source', $data);

        return;

    }

    public function internship(){

        $data = [];

        $this->view('services/internship', $data);

        return;

    }
}