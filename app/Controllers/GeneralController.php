<?php

namespace App\Controllers;



class GeneralController extends Controller{

    public function privacy_policy(){

        $data = [];

        $this->view('general/privacy-policy', $data);

        return;

    }

    public function refund_and_cancellation_policy(){

        $data = [];

        $this->view('general/refund-and-cancellation-policy', $data);

        return;

    }

    public function terms_and_conditions(){

        $data = [];

        $this->view('general/terms-and-conditions', $data);

        return;

    }
}