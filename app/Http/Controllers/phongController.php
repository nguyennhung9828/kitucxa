<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phong; 
use Illuminate\Support\Facades\DB;

class phongController extends Controller
{
    public function dlphong(){
    	$phong= phong::all();
      $sl=DB::table('phong')
      ->select(DB::raw('count(id) as sl'))
      ->get();

    	return view('layout.ktx.ttphong',['phong'=>$phong,'sl'=>$sl]);
    }
     public function tkkhu(Request $rq){
     	$khu=$rq->khu;
    	$phong= phong::where('khu','like','%'.$khu.'%')->get();
      $sl=DB::table('phong')
      ->select(DB::raw('count(id) as sl'))
      ->get();

    	return view('layout.ktx.ttphong',['phong'=>$phong,'khu'=>$khu,'sl'=>$sl]);

    }
    
     public function themp(Request $rq){
    	$this->validate($rq,[
    		"map"=>"required|unique:phong,maphong|min:4|max:6",
    		"khup"=>"required|min:1|max:5",	
    		"sl"=>"required|min:1|max:2",	
    		"gia"=>"required|min:5|max:10",	
        "lp"=>"required",
      ],
    	[
    		"map.required"=>"không được để trống",
    		"map.min"=>"mã phòng không được nhỏ hơn 4 kí tự",
    		"map.unique"=>"mã phòng đã bị trùng!",
    		"khup.required"=>"không được để trống",
    		"sl.required"=>"không được để trống",
    		"gia.required"=>"không được để trống",
        "lp.required"=>"không được để trống",

    	]);
    	
    	$phong= new phong;
    	$phong->maphong=$rq->map;
    	$phong->khu=$rq->khup;
    	$phong->sogiuong=$rq->sl;
    	$phong->giatien=$rq->gia;
      $phong->loaip=$rq->lp;
    	$phong->save();
    	return redirect('QLphong')-> with("thongbao","Thêm thành công");
    }
       public function delep($id){
        $phong = phong::find($id);
        $phong->delete();
        return redirect('QLphong')->with('thongbao','Xóa thành công');

    }
      public function suatt(Request $rq){

      	$idp=$rq->id;
     	$phong=phong::where('id',$idp)->get();
      	//$phong=phong::all();
     return view('layout.ktx.suaphong',['phong'=>$phong,'id'=>$idp]);   

    }
    public function update(Request $rq){
      	 $this->validate($rq,[
            "nd"=>"required",
        ],
        [
            "nd.required"=>"Bạn chưa nhập thông tin cần sửa",
            
        ]);
     	$phong=phong::where('id',$rq->id)->update([$rq->danhmuc=>$rq->nd]);
      	//$phong=phong::all();
     return redirect('QLphong')->with('thongbao','Cập nhập thành công');   

    }
       public function trangchu(){
       return view('layout.ktx.kytucxa.trangchu');
       }
         public function gioithieu(){
       return view('layout.ktx.kytucxa.gioithieu');
       }
         public function dangkyphong(){
       return view('layout.ktx.kytucxa.dangkyphong');
       }
         public function tintuc(){
       return view('layout.ktx.kytucxa.tintuc');
       }




    
}
