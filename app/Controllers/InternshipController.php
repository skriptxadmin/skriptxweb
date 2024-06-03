<?php

namespace App\Controllers;



class InternshipController extends Controller{

    public function course_plan(){

        $data = [];

        $this->view('internship/course-plan', $data);

        return;

    }
}