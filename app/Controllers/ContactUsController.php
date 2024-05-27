<?php

namespace App\Controllers;



class ContactUsController extends Controller{

    public function index(){

        $data = [
            'meta_title' => 'SkriptX - Contact Us',
            'meta_description' => 'Get in touch with Skriptx for expert software training, custom development solutions, and IT support. Our team is here to assist you with any inquiries. Contact us today to learn more about how we can help you achieve your technology goals'
        ];

        $this->view('contact-us/index', $data);

        return;

    }
}