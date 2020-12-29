<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taikhoan;
use App\Models\phongsv;
use Auth;

class LoginController extends Controller
{
    public function index(){
    	return view('layout.sub.dangnhap');
    }

     public function postLogin(Request $request){
     	$username=$request['username'];
     	$password=$request['password'];
        $arr = ['username'=>$username,'password'=>$password];
     	if(Auth::attempt($arr)){
           $pq=Auth::user()->phanquyen;
           if($pq == '1'){
     		return redirect('trangchu');
        }
        else  echo("=>Đến trang chủ người dùng");
    }
     	else return view('layout.sub.dangnhapthatbai');
     }


        
    }


    
