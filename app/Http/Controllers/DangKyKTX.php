<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Models\taikhoan;
class DangKyKTX extends Controller
{

    
     public function Dangki(){
    	return view('layout.ktx.dangkytk');
    }

       public function postDangki(Request $rq){
    	$this->validate($rq,[
    		"tk"=>"required|unique:vp_tai_khoan,username|min:4|max:50",
    		"mk1"=>"required|min:6|max:50",
    		"mk2"=>"same:mk1",
    		
    	],
    	[
    		"tk.required"=>"không được để trống",
    		"tk.min"=>"Tài khoản không được nhỏ hơn 4 kí tự",
    		"tk.unique"=>"Tài khoản đã bị trùng!",
    		"mk1.required"=>"không được để trống",
    		"mk1.min"=>"Mật khẩu không được nhỏ hơn 6 kí tự",
    		"mk2.same"=>"Mật khẩu không khớp",

    	]);
    	
    	$taikhoan= new taikhoan;
    	$taikhoan->username=$rq->tk;
    	$taikhoan->password=bcrypt($rq->mk1);
    	$taikhoan->phanquyen='2';
    	$taikhoan->save();
    	return redirect('dangkytk')-> with("thongbao","Đăng kí thành công");
    }

}
