<?php

namespace App\Controllers;

use App\Models\User;


class UsersController  extends Controller{

    public function index(){

        $users = User::get();

        $data = ['users' =>$users];

        $this->view('users/index', $data);

        return;
    }

    
    public function see($user_id=NULL){

        $user = User::find($user_id);

        $data = ['user' => $user];

        $this->view('users/see', $data);
    }
}