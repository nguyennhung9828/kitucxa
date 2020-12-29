<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\Models\phongsv;
use App\Models\phong;
use App\Models\taikhoan;
use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class svdkController extends Controller
{
    public function dlsinhvien(){
    	$phongsv= phongsv::where('phong',)->get();
    	return view('layout.ktx.sinhvien',['phongsv'=>$phongsv]);
    }
    public function xulydl1(){
        $phongsv= DB::table('phongsinhvien')->where('phong',)->get();
          $phong= DB::table('phong')->get();
        $pt = DB::table('phongsinhvien')
            ->join('phong', 'phong.id', '=', 'phongsinhvien.id_phong')
            ->select('phong.maphong','phong.id','phong.sogiuong', DB::raw('count(phongsinhvien.id) as sl'))
            ->groupBy('phongsinhvien.phong','phong.maphong','phong.sogiuong','phong.id')
            ->get();
        
       // $pt=phongsv::select('count(masv) as sl')->groupBy('phong')->get();
        return view('layout.ktx.xulytt',['phongsv'=>$phongsv,'pt'=>$pt,'phong'=>$phong]);
       
    }
    public function timsv(Request $rq){
        $tklop = $rq->tklop;
        $tkkhoa = $rq->tkkhoa;
        $gioitinh = $rq->gioitinh;
        $phongsv=phongsv::where('lop','like','%'.$tklop.'%',)->where('khoa','like','%'.$tkkhoa.'%')->where('gioitinh','like','%'.$gioitinh.'%')->where('phong',)->get();

        return view('layout.ktx.sinhvien',['phongsv'=>$phongsv,'tklop'=>$tklop,'tkkhoa'=>$tkkhoa]);

    }

    public function xulydl2(Request $rq){
        $tklop = $rq->tklop;
        $tkkhoa = $rq->tkkhoa;
        $gioitinh = $rq->gioitinh;
         $phong = phong::all();
        $phongsv=phongsv::where('lop','like','%'.$tklop.'%',)->where('khoa','like','%'.$tkkhoa.'%')->where('gioitinh','like','%'.$gioitinh.'%')->where('phong',)->get();
         $pt = DB::table('phongsinhvien')
            ->join('phong', 'phong.id', '=', 'phongsinhvien.id_phong')
            ->select('phong.maphong','phong.id','phong.sogiuong', DB::raw('count(phongsinhvien.id) as sl'))
            ->groupBy('phongsinhvien.phong','phong.maphong','phong.sogiuong','phong.id')
            ->get();
         return view('layout.ktx.xulytt',['phongsv'=>$phongsv,'tklop'=>$tklop,'tkkhoa'=>$tkkhoa,'phong'=>$phong,'pt'=>$pt]);
    }
   
    public function ttsv(){
        $phongsv= phongsv::where('phong','<>','NULL')->get();
        $phong = phong::all();
        return view('layout.ktx.thongtinsinhvien',['phongsv'=>$phongsv,'phong'=>$phong]);
       
    }
      public function tkttsv(Request $rq){
        $tklop = $rq->tklop;
        $tkkhoa = $rq->tkkhoa;
        $phong = $rq->tkphong;
        $phongsv=phongsv::where('lop','like','%'.$tklop.'%',)->where('khoa','like','%'.$tkkhoa.'%')->where('phong','like','%'.$phong.'%')->where('phong','<>','NULL')->get();
         return view('layout.ktx.thongtinsinhvien',['phongsv'=>$phongsv,'tklop'=>$tklop,'tkkhoa'=>$tkkhoa,'tkphong'=>$phong]);
    }

      public function xoa($id){
        $phongsv=phongsv::find($id);
        $phongsv->delete();
        return redirect('ttsv')->with('thongbao','Xóa thành công');

    }

    // xếp phòng sinh viên
     public function themp(Request $rq){
        $this->validate($rq,[
            "ph"=>"required",
            "id"=>"required",
        ],
        [
            "ph.required"=>"Bạn chưa nhập phòng cần thêm",
             "id.required"=>"Mã phòng không được để trống",
        ]);
         $phongsv=phongsv::where('id',$rq->id)->update(['phong'=>$rq->ph,'id_phong'=>$rq->id]);
         return redirect('xulytt')->with('thongbao','Thêm thành công');
        
    }
      public function trangsua(){
        $phongsv= phongsv::where('phong','<>','NULL')->get();
        return view('layout.ktx.suattsv',['phongsv'=>$phongsv]);
    }
    public function tksua(Request $rq){
        $tklop = $rq->tklop;
        $tkkhoa = $rq->tkkhoa;
        $phong = $rq->tkphong;
        $phongsv=phongsv::where('lop','like','%'.$tklop.'%',)->where('khoa','like','%'.$tkkhoa.'%')->where('phong','like','%'.$phong.'%')->where('phong','<>','NULL')->get();
         return view('layout.ktx.suattsv',['phongsv'=>$phongsv,'tklop'=>$tklop,'tkkhoa'=>$tkkhoa,'tkphong'=>$phong]);
    } 
     public function suadl(Request $rq){
        $this->validate($rq,[
            "ph"=>"required"
        ],
        [
            "ph.required"=>"Bạn chưa nhập thông tin cần sửa",
        ]);
         $phongsv=phongsv::where('id',$rq->id)->update(['phong'=>$rq->ph]);
         return redirect('suattsv')->with('thongbao','Sửa thành công');  
         
    }
    public function trangchu1(Request $rq){
        $slsv=DB::table('phongsinhvien')
        ->select(DB::raw('count(masv) as slsv'))
        ->where('phong','<>','NULL')
        ->get();
        $p=DB::table('phong')
        ->select(DB::raw('count(maphong) as slp'))
        ->get();
        $yc=DB::table('phongsinhvien')
        ->select(DB::raw('count(masv) as slyc'))
        ->where('phong',)
        ->get();
        $tk=DB::table('vp_tai_khoan')
        ->select(DB::raw('count(id) as sl'))
        ->get();
        return view('layout.ktx.trangchu',['slsv'=>$slsv,'p'=>$p,'yc'=>$yc,'tk'=>$tk]);
    }

    
 public function xulydl23(){
        
        $pt = DB::table('phongsinhvien')
            ->join('phong', 'phong.id', '=', 'phongsinhvien.id_phong')
            ->select(DB::raw('count(phongsinhvien.id) as sl'))
            ->groupBy('phongsinhvien.phong','phong.maphong','phong.sogiuong')
            ->get();
       // $pt=phongsv::select('count(masv) as sl')->groupBy('phong')->get();
        return view('layout.ktx.vd123',['pt'=>$pt]);
       
    }
     public function ngansach(){
      
        $phongsv=DB::table('phongsinhvien')
         ->join('phong', 'phong.id', '=', 'phongsinhvien.id_phong')
         ->select('phongsinhvien.id','phongsinhvien.masv','phongsinhvien.hoten','phongsinhvien.lop',
            'phongsinhvien.khoa','phongsinhvien.gioitinh','phongsinhvien.phong','phong.giatien','phongsinhvien.tienp')
         ->where('phongsinhvien.phong','<>','NULL')
         ->get();
        return view('layout.ktx.ngansach',['phongsv'=>$phongsv]);
       
    }
     public function noptien(Request $rq){
        $this->validate($rq,[
            "t"=>"required"
        ],
        [
            "t.required"=>"Bạn chưa nhập thông tin ",
        ]);
         $phongsv=phongsv::where('id',$rq->id)->update(['tienp'=>$rq->t]);
         return redirect('QLngansach')->with('thongbao','Lưu thành công'); 
     }
       public function timsv1(Request $rq){
        $masv=$rq->masv;
         $phongsv=DB::table('phongsinhvien')
         ->join('phong', 'phong.id', '=', 'phongsinhvien.id_phong')
         ->select('phongsinhvien.id','phongsinhvien.masv','phongsinhvien.hoten','phongsinhvien.lop',
            'phongsinhvien.khoa','phongsinhvien.gioitinh','phongsinhvien.phong','phong.giatien','phongsinhvien.tienp')
         ->where('phongsinhvien.phong','<>','NULL')
         ->where('masv','like','%'.$masv.'%')
         ->get();
        return view('layout.ktx.ngansach',['phongsv'=>$phongsv,'masv'=>$masv]);
        
     }
       public function xem(Request $rq){
         $phongsv=DB::table('phongsinhvien')
         ->join('phong', 'phong.id', '=', 'phongsinhvien.id_phong')
         ->select('phongsinhvien.id','phongsinhvien.masv','phongsinhvien.hoten','phongsinhvien.lop',
            'phongsinhvien.khoa','phongsinhvien.gioitinh','phongsinhvien.phong','phong.giatien','phongsinhvien.tienp')
         ->where('phongsinhvien.phong','<>','NULL')
         ->where('phongsinhvien.tienp','=','')
         ->get();
        return view('layout.ktx.ngansach',['phongsv'=>$phongsv]);
        
     }
         public function tk(Request $rq){
            $data= taikhoan::all();
             return view('layout.ktx.Taikhoan',['data'=>$data]);
       
     }
        public function themtk(Request $rq){
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
        return redirect('QLtaikhoan')-> with("thongbao","Thêm tài khoản thành công");
       
     }
           public function tktk(Request $rq){
             $tk = $rq->us;
                $data=taikhoan::where('username','like','%'.$tk.'%')->get();
                return view('layout.ktx.taikhoan',['data'=>$data,'us'=>$tk]);
               
     } 
            public function locngd(Request $rq){
                $data=taikhoan::where('phanquyen','=','2')->get();
                return view('layout.ktx.taikhoan',['data'=>$data]);
               
     } 
            public function locadmin(Request $rq){
             $data=taikhoan::where('phanquyen','=','1')->get();
                return view('layout.ktx.taikhoan',['data'=>$data]);
     }
             public function vd123(Request $rq){
                return view('layout.ktx.vd123');
     }
     
   public function dkp(Request $rq){
           $this->validate($rq,[
            "masv"=>"required|unique:phongsinhvien",
            "ht"=>"required",
            "lop"=>"required",
            "khoa"=>"required",
            "gt"=>"required",
           
            
        ],
        [
            "masv.required"=>"không được để trống",
            "masv.unique"=>"Bạn đã đăng kí rồi, vui lòng xem kết quả",
            "ht.required"=>"không được để trống",
            "lop.required"=>"không được để trống",
            "khoa.required"=>"không được để trống",
            "gt.required"=>"không được để trống",
        ]);
        $phongsv= new phongsv;
        $phongsv->masv=$rq->masv;
        $phongsv->username=Auth::user()->username;
        $phongsv->hoten=$rq->ht;
        $phongsv->lop=$rq->lop;
        $phongsv->khoa=$rq->khoa;
        $phongsv->gioitinh=$rq->gt;
        $phongsv->save();
        return redirect('dangki')-> with("thongbao","Đăng kí thành công"); 
}
           public function dangki(Request $rq){
            $us= Auth::user()->username;
               $phongsv=phongsv::where('username','=',$us)->get();
                return view('layout.ktx.kytucxa.dangky',['phongsv'=>$phongsv]);
     } 

}

     
    

