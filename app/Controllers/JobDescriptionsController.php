<?php

namespace App\Controllers;



class JobDescriptionsController extends Controller{

    
    public function index($id){

        $data =[];

        if($id == '001'){

            $data = [
                'meta_title' => 'Hiring - MERN Stack Developer',
                'meta_description' => 'Responsible for developing and
                                maintaining web applications using the MERN stack (MongoDB, Express.js, React.js, Node.js).
                                You will work closely with our cross-functional team to deliver high-quality software
                                solutions'
            ];
        }

       

        $this->view('job-descriptions/'.$id, $data);

        return;
    }
}