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
  <li><a class="active" href="taikhoan">Quản Lý Tài Khoản</a></li>
  <li><a href="">Quản Lý Bài Giảng</a></li>
  <li><a href="QLcauhoi">Quản Lý Câu Hỏi</a></li>
  <li><a href="login">Đăng Xuất</a></li>
</ul>


<div id="navbar">
  <a href="gioithieu.html">ENGLISH FOR KID</a>
  <a href="kiemtra.html"><div style="width:120px; height:80px;margin-left:750px"></a></div>
</div>

<div style="margin-left:17%;padding:1px 16px;height:1000px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản lý tài khoản</h1>
   <div class="clearfix">
  <div class="box" style="width: 60%;">
    <div class="clearfix">
   <div class="box" src="img/lg1.jpg"  style="width:40px; height:40px;"> </div>
    <b class="box" style="font-size:20px;margin-top: 8px; " >Thêm Tài khoản Admin</b>
  </div>
  <p style="color: green;font-size:18px;  margin-left: 50px;">
   @if(session('thongbao'))
    {{session('thongbao')}}
    @endif
  </p>
   <form method="post" action="{{route('tkadmin')}}">
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Tên tài khoản :</div>
    <div class="box" ><input type="text" name="tkad"  placeholder="Nhập tài khoản..." style="width:200px; height:25px;"></div>
  </div>
   @if ($errors->has('tkad'))
        <p class="tt">{{ $errors->first('tkad') }}</p>
    @endif
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Mật khẩu :</div>
    <div class="box" ><input type="password" name="mkad1" placeholder="Nhập mật khẩu..." style="width:200px; height:25px;"></div>
  </div>
  @if ($errors->has('mkad1'))
        <p class="tt">{{ $errors->first('mkad1') }}</p>
    @endif 
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:17px;width: 150px;">Nhập lại mật khẩu :</div>
    <div class="box" ><input type="password" name="mkad2" placeholder="Nhập mật khẩu..." style="width:200px; height:25px;"> </div>
  </div>
   @if ($errors->has('mkad2'))
        <p class="tt">{{ $errors->first('mkad2') }}</p>
    @endif 
  <input type="submit" name="" value="Thêm " style="margin-top: 20px;margin-bottom: 30px; margin-left: 250px;">
  {{csrf_field()}}
</form>
  </div>

  <div class="box" style="background-color:#;width: 35%;margin-left: 10px;border-left: 2px solid #999999;">
  <div class="clearfix" style="margin-top: 20px;">
    <a href="timkiem"><div class="box" style="margin-left: 10px;width:90px;"><input name="tkiem" value="Tìm kiếm" type="submit"></div></a>

    <input type="text" name="tkiem" placeholder="Nhập username..." style="width:200px; height:25px;"> </div>
     <div class="clearfix" style="margin-top: 20px;">

    <div class="box"><a href="locngdung"><input type="submit" name="us"  value="Lọc tài khoản người dùng " style="margin-top: 20px;margin-bottom: 30px; margin-left:10px;"></a></div>
   
    <div class="box" ><a href="locadmin"><input type="submit" name="ad"  value="Lọc tài khoản Admin " style="margin-top:20px;margin-bottom: 30px; margin-left: 20px;"></a></div>
  </div>
  {{csrf_field()}}
</form>

 
  </div>
</div>
  
  <div >
        <div class="panel-body">
            <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th>username</th>
                            <th style="width:30%">password</th>
                            <th style="width:30%">Tùy chọn</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($data as $tk)
                <tr>
                  <td>{{$tk->username}}</td>
                  <td>{{$tk->password}}</td>
                  <td>
                             
                              <a href="xoa/{{$tk->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
</div>

</div>
</div>
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