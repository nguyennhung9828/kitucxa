<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
<style>
body {
  margin-top:30px;
}

#navbar {
  background-color: #333;
  position: fixed;
  top:0px;
  width: 100%;
  display: block;
  transition: top 0.3s;
}
#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding-top:30px;
  padding-left:30px;
  text-decoration: none;
  font-size: 17px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #d3d1c9;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  border-bottom: 1px solid #afaeaa;
}

li a.active {
  background-color: #135e8c;
  color: white;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
  text-decoration: none;
}
* {
  box-sizing: border-box;
}

.box {
  float: left;
  
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.tt{
  color:red;
  padding-left: 200px;
}
</style>
</head>
<body>

<ul>
  <li><a href="trangchu">Trang Chủ</a></li>
  <li><a  href="taikhoan">Quản Lý Tài Khoản</a></li>
  <li><a href="#contact">Quản Lý Bài Giảng</a></li>
  <li><a class="active" href="QLcauhoi">Quản Lý Câu Hỏi</a></li>
  <li><a href="login">Đăng Xuất</a></li>
</ul>

</div>

<div id="navbar">
  <a href="gioithieu.html">ENGLISH FOR KID</a>
  <a href="kiemtra.html"><div style="width:120px; height:80px;margin-left:750px"></a></div>
</div>
<div style="margin-left:17%;padding:1px 16px;height:600px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản Lý Câu Hỏi</h1>

  <div class="clearfix">
  <div class="box" style="width: 60%;">
    <div class="clearfix">
    <div class="box" src="img/lg1.jpg"  style="width:40px; height:40px;"> </div>
    <b class="box" style="font-size:20px;margin-top: 8px; " >Sửa câu hỏi</b>
  </div>
  <p style="color: green;font-size:17px;  margin-left: 50px;">
   @if(session('thongbao'))
    {{session('thongbao')}}
    @endif
  </p>
   <form method="get" action="{{route('suach')}}">
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Mã câu hỏi :</div>
    <div class="box" ><input type="text" placeholder="Nhập nội dung..."  value= "{{$CauHoi->Ma_cauhoi}} "name="macauhoi" style="width:200px; height:25px;"></div>
  </div>
   @if ($errors->has('macauhoi'))
        <p class="tt">{{ $errors->first('macauhoi') }}</p>
    @endif
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Mã chủ đề câu hỏi :</div>
    <div class="box" > <div style="margin-left: 50px;width: 150px;margin-bottom: 10px; "><select style="width:150px;height:25px; " name="chon" value= "{{$CauHoi->Ma_chude}}">
      <option name="TuVung">Từ Vựng</option>
      <option name="NguPhap">Ngữ Pháp</option>
    </select></div></div>
  </div> 
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Nội dung câu hỏi :</div>
    <div class="box" ><textarea type="text" placeholder="Nhập nội dung..." name="noidung" style="width:200px; height:125px;"> </textarea></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Đáp án đúng :</div>
    <div class="box" ><input type="text" placeholder="Nhập nội dung..." name="dadung" style="width:200px; height:25px;"></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Đáp án nhiễu 1 :</div>
    <div class="box" ><input type="text" placeholder="Nhập nội dung..." name="danhieu1" style="width:200px; height:25px;"></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Đáp án nhiễu 2 :</div>
    <div class="box" ><input type="text" placeholder="Nhập nội dung..." name="danhieu2" style="width:200px; height:25px;"></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Đáp án nhiễu 3 :</div>
    <div class="box" ><input type="text" placeholder="Nhập nội dung..." name="danhieu3" style="width:200px; height:25px;"></div>
  </div>
  <a href="suach/{{id}}"><input type="submit" name="" value="Sửa" style="margin-top: 20px;margin-left: 300px;">
  {{csrf_field()}}
</form>

  

</div>
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  </script>

</body>
</html>