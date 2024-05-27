<?php

namespace App\Controllers;



class ProjectsController extends Controller{

    public function index(){

        $data = [];

        $this->view('projects/index', $data);

        return;

    }
}