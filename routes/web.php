<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//vidu
Route::get("/xinchao","MyController@xinchao");
//đăng nhập
Route::get("/login","LoginController@index");
Route::post("/dangnhap","LoginController@postLogin")->name('dn');
Route::get('QLcauhoi', function () {
    return view('layout.sub.cauhoi');
});
Route::get('trangchu', function () {
    return view('layout.sub.trangchu');
});
//lấy ra bảng tài khoản
Route::get('/taikhoan',"dangkiController@LayData");
//lọc
Route::get('/locngdung',"dangkiController@LayData1");
Route::get('/locadmin',"dangkiController@LayData2");
// đăng kí tk admin
Route::get('/',"dangkiController@DangkiAd" );
Route::post("/themadmin","dangkiController@postDangkiAd")->name('tkadmin');  
//tim kiem tk
Route::get('/timkiem',"dangkiController@timData")->name('timkiem');
//xóa tài khoản
Route::get('/xoa/{id}','dangkiController@xoa');
//đăng kí tài khoản

Route::get('/formdangki',"dangkiController@Dangki"); 
Route::post("/dangki","dangkiController@postDangki")->name('dk');   
Route::get('/', function () {
    return view('layout.sub.baigiang');
});
//them câu hỏi
Route::post('/cauhoi','cauhoiController@themcauhoi')->name('them');
//xem cau hoi
Route::get('/xem',"cauhoiController@LayCH");
//tk cau hoi
Route::get('/timch',"cauhoiController@timCH")->name('timkiemch');
//sua cau hoi
Route::get('/suacauhoi/{id_cauhoi}',"cauhoiController@sua");



//----------------------------------------------------------------------------=========================//
//----------------------------------------------------------------------------==================//
Route::get("/loginktx","dangnhapController@index");
Route::post("/trangchuktx","dangnhapController@postLogin")->name('dn');
//trang chu
//dang ki tk ktx cho sv
Route::get('/dangkytk',"DangKyKTX@Dangki"); 
Route::post("/dangki","DangKyKTX@postDangki")->name('dk');   
//trang quan ly sih vien
Route::get('thongtinsv', function () {
    return view('layout.ktx.thongtinsinhvien');});
Route::get('QLsinhvien',"svdkController@dlsinhvien");
Route::get('xulytt',"svdkController@xulydl1");
Route::get('/themcot',function(){
	Schema::table('phongsinhvien',function($table){
		$table->string('username');
	});
});
//tim kiem sinh vien dang ki
Route::post('/timkiem',"svdkController@timsv")->name('timsv');
Route::post('/tk',"svdkController@xulydl2")->name('xulydl');
// tim phong trong
Route::post('/tkphong',"svdkController@phongtrong")->name('tkphong');
Route::get('/ttsv',"svdkController@ttsv");
Route::post('/tksv',"svdkController@tkttsv")->name('tkttsv');
Route::get('/xoasv/{id}',"svdkController@xoa");
Route::post('/themp',"svdkController@themp")->name('xepphong');
Route::get('/suattsv',"svdkController@trangsua");
Route::post('/tksua',"svdkController@tksua")->name('tksua');
Route::post('/suatt',"svdkController@suadl")->name('suaphong');
Route::get('QLphong',"phongController@dlphong");
Route::post('/tkkhu',"phongController@tkkhu")->name('tkk');
Route::post('/thempmoi',"phongController@themp")->name('themphong');
Route::get('/xoap/{id}',"phongController@delep");
Route::post('/update',"phongController@update")->name('update');
Route::get('/sua/{id}',"phongController@suatt");
Route::get('trangchu1',"svdkController@trangchu1");
Route::get('t',"svdkController@xulydl23");
Route::get('QLngansach',"svdkController@ngansach");
Route::post('/tien',"svdkController@noptien")->name('noptien');
Route::post('/tim',"svdkController@timsv1")->name('tkmsv');
Route::get('/xem',"svdkController@xem");
Route::get('/QLtaikhoan',"svdkController@tk");
Route::post("/themadmin1","svdkController@themtk")->name('tkadmin1');  
Route::post("/tk1","svdkController@tktk")->name('tktk');  
Route::get('/locngd',"svdkController@locngd");
Route::get('/locad',"svdkController@locadmin");
Route::get('/trangchu',"phongController@trangchu");
Route::get('/gioithieu',"phongController@gioithieu");
Route::get('/tintuc',"phongController@tintuc");
Route::get('/dangkyphong',"phongController@dangkyphong");
Route::post('/dkpp',"svdkController@dkp")->name('dkp');
Route::get('/xoacot',function(){
	Schema::table('phongsinhvien', function ($table) {
    $table->dropColumn('username');
});
});
Route::get('/dangki',"svdkController@dangki");