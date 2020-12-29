<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Models\taikhoan;
class dangkiController extends Controller
{
    public function LayData(){
        $data= taikhoan::all();
        return view('layout.sub.Taikhoan',['data'=>$data]);

    }
    public function LayData1(){
        $data= taikhoan::all();
        return view('layout.sub.locngdung',['data'=>$data]);

    }

     public function LayData2(){
        $data= taikhoan::all();
        return view('layout.sub.locadmin',['data'=>$data]);

    }
     public function timData(Request $rq){
        $tkiem = $rq->tkiem;
        $taikhoan=taikhoan::where('username','like','%'.$tkiem.'%')->get();
        return view('layout.sub.timkiem',['taikhoan'=>$taikhoan,'tkiem'=>$tkiem]);

    }
     public function xoa($id){
        $taikhoan=taikhoan::find($id);
        $taikhoan->delete();
        return redirect('taikhoan')->with('thongbao','Xóa thành công');

    }

    public function Dangki(){
    	return view('layout.sub.dangki');
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
    	return redirect('formdangki')-> with("thongbao","Đăng kí thành công");
    }



    public function DangkiAd(){
    	return view('layout.sub.Taikhoan');
    }

    public function postDangkiAd(Request $rq){
    	$this->validate($rq,[
    		"tkad"=>"required|unique:vp_tai_khoan,username|min:4|max:50",
    		"mkad1"=>"required|min:6|max:50",
    		"mkad2"=>"same:mkad1",
    		
    	],
    	[
    		"tkad.required"=>"không được để trống",
    		"tkad.min"=>"Tài khoản không được nhỏ hơn 4 kí tự",
    		"tkad.unique"=>"Tài khoản đã bị trùng!",
    		"mkad1.required"=>"không được để trống",
    		"mkad1.min"=>"Mật khẩu không được nhỏ hơn 6 kí tự",
    		"mkad2.same"=>"Mật khẩu không khớp",

    	]);
    	
    	$taikhoan= new taikhoan;
    	$taikhoan->username=$rq->tkad;
    	$taikhoan->password=bcrypt($rq->mkad1);
    	$taikhoan->phanquyen='1';
    	$taikhoan->save();
    	return redirect('taikhoan')-> with("thongbao","Thêm tài khoản thành công");
    }
}
 