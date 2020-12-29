<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Models\CauHoi;

class cauhoiController extends Controller
{
    
    public function themcauhoi(Request $rq){
    	//bắt lỗi
    	$this->validate($rq,[
    		"macauhoi"=>"required|min:4|max:50|unique:vp_cauhoi,Ma_cauhoi",
    		"chudecauhoi"=>"required|unique:vp_cauhoi,Ma_chude|min:4|max:50",
    		"noidung"=>"required",
    		"dadung"=>"required",
    		"danhieu1"=>"required",
    		"danhieu2"=>"required",
    		"danhieu3"=>"required"
    	],
    	[
    		"macauhoi.required"=>"không được để trống",
    		"macauhoi.min"=>"Mã câu hỏi không được nhỏ hơn 4 kí tự",
    		"macauhoi.unique"=>"Mã câu hỏi đã bị trùng!",
    		"chudecauhoi.required"=>"không được để trống",
    		"chudecauhoi.min"=>"Chủ đề câu hỏi không được nhỏ hơn 4 kí tự",
    		"chudecauhoi.same"=>"Chủ đề câu hỏi đã bị trùng!",
    		"noidung.required"=>"không được để trống",
    		"dadung.required"=>"không được để trống",
    		"danhieu1.required"=>"không  được để trống",
    		"danhieu2.required"=>"không  được để trống",
    		"danhieu3.required"=>"không  được để trống",

    	]);
    	//them cau hoi
    	$CauHoi= new CauHoi;
    	$CauHoi->Ma_cauhoi=$rq->macauhoi;
    	$CauHoi->Ma_chude=$rq->chudecauhoi;
    	$CauHoi->Noi_dung=$rq->noidung;
    	$CauHoi->DA_dung=$rq->dadung;
    	$CauHoi->Da_nhieu1=$rq->danhieu1;
    	$CauHoi->Da_nhieu2=$rq->danhieu2;
    	$CauHoi->Da_nhieu3=$rq->danhieu3;
    	$CauHoi->save();
    	return redirect('QLcauhoi')-> with("thongbao","Thêm thành công");

    }
     public function LayCH(){
        $data= CauHoi::all();
        return view('layout.sub.xem',['data'=>$data]);

    }
    public function timCH(Request $rq){
        $tkiem = $rq->tkiem;
        $CauHoi=CauHoi::where('Ma_chude','like','%'.$tkiem.'%')->orwhere('Ma_cauhoi','like','%'.$tkiem.'%')->orwhere('Noi_dung','like','%'.$tkiem.'%')->get();
        return view('layout.sub.timkiemcauhoi',['CauHoi'=>$CauHoi,'tkiem'=>$tkiem]);
    }

     public function sua(Request $rq,$id_cauhoi){
        $CauHoi=CauHoi::find($id_cauhoi);
        $CauHoi->Ma_cauhoi=$rq->macauhoi;
        $CauHoi->Ma_chude=$rq->chon;
        $CauHoi->Noi_dung=$rq->noidung;
        $CauHoi->DA_dung=$rq->dadung;
        $CauHoi->Da_nhieu1=$rq->danhieu1;
        $CauHoi->Da_nhieu2=$rq->danhieu2;
        $CauHoi->Da_nhieu3=$rq->danhieu3;
        $CauHoi->save();
        return view('layout.sub.suacauhoi',['CauHoi'=>$id_cauhoi]);


}
}
