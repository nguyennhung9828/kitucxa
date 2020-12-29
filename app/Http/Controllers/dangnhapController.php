<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taikhoan;
use Auth;
class dangnhapController extends Controller
{
     public function index(){
    	return view('layout.ktx.dangnhap');
    }

     public function postLogin(Request $request){
     	$username=$request['username'];
     	$password=$request['password'];
        $arr = ['username'=>$username,'password'=>$password];
     	if(Auth::attempt($arr)){
           $pq=Auth::user()->phanquyen;
           if($pq == '1'){
     		return  redirect('trangchu');
        }
        else return  view('layout.ktx.kytucxa.trangchu'); ;
    }
     	else return view('layout.sub.dangnhapthatbai');
     }
}
