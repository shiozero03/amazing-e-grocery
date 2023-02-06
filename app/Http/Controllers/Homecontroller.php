<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Role;

class Homecontroller extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function register(){
        $gender = Gender::all();
        $role = Role::all();
        $data = [
            'gender' => $gender,
            'role' => $role
        ];
        return view('register')->with($data);
    }
    public function login(){
        return view('login');
    }
}
