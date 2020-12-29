<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class loginController extends Controller
{
	//
    public function getLogin(){
    	return view('layout.sub.dangnhap');
    }
}
