<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('layouts.profil',['user'=>$user]);//products paling kiri merupakan nama file blade.php
      }
}