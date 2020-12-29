<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Quan Ly Sinh Vien </title>
<style>
body {
  margin-top:80px;
}
.tt{
  color:red;
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

li a.active1 {
  background-color: #135e8c;
  color: white;
  text-decoration: none;
}

li a:hover:not(.active1) {
  background-color: #555;
  color: white;
  text-decoration: none;
}

</style>
</head>
<body>

<ul>
  <li><a  href="trangchu">Trang Chủ</a></li>
  <li><a class="active1" href="QLsinhvien">Quản Lý Sinh Viên</a></li>
  <li><a href="QLphong">Quản Lý Phòng</a></li>
  <li><a href="QLngansach">Quản Ngân Sách</a></li>
  <li><a href="QLtaikhoan">Quản Lý Tài Khoản</a></li>
  <li><a href="loginktx">Đăng xuất</a></li>
</ul>

</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="height: 80px;">
  <a class="navbar-brand" href="#">Quản Lý Kí Túc Xá Trường Đại Học Sư Phạm Hà Nội</a>
</nav>
</div>
<div style="margin-left:17%;padding:1px 16px;height:600px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Xử lý yêu cầu của sinh viên</h1>
<div class="row">
<div class="col-sm-6">
  <div style="border:2px solid #cccccc">
  <form style="margin-top: 15px;" class="form-inline" action="{{route('xulydl')}}" method="post" >
    <div style="margin-left:20px; ">
    Tên Lớp: <input style="margin-left:10px;" name ="tklop" class="form-control mr-sm-2" type="text" placeholder="nhập tên lớp..."> 
    Giới Tính: <select style="margin-left: 10px; margin-right: 30px; " name="gioitinh" >
      <option name="nam" value="nam">Nam</option>
      <option name="nu" value="nu">Nữ</option>
    </select>
  </div  >
  <div style="margin-top: 15px; margin-left:20px;margin-bottom: 10px;">
    Tên Khoa: <input style="margin-left:10px; " name ="tkkhoa" class="form-control mr-sm-2" type="text" placeholder="nhập tên khoa...">
    <button class="btn btn-success" type="submit">Tìm kiếm</button>
    </div> 
     {{csrf_field()}}
  </form>
</div>
  <h5 style="margin-top: 15px;">Xếp phòng</h5>
  @if(session('thongbao'))
   <b style="color: green;"> {{session('thongbao')}}</b>
    @endif

    @if ($errors->has('ph'))
      <p style="color:red;">{{ $errors->first('ph') }}</p>
    @endif
    @if ($errors->has('id'))
      <p style="color:red;">{{ $errors->first('id') }}</p>
    @endif
    <div style="margin-top: 20px;">
        <div class="panel-body">
            <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th style="width:15%">Mã SV</th>
                            <th style="width:30%">Họ và tên</th>
                            <th style="width:10%">Phòng</th>
                            <th style="width:10%">Mã phòng</th>
                            <th style="width:15%">Tùy chọn</th>
                          </tr>
                        </thead>
                        <tbody>
                @foreach($phongsv as $sv) 
                
                <tr>
                  <form method="post" action="{{route('xepphong')}}">  
                  <input type="text" name="id" value="{{$sv->id}}" hidden="">
                  <td>{{$sv->masv}}</td>
                  <td>{{$sv->hoten}}</td>
                  <td>
                    <input type="text" name="ph" style="width:100px;">
                  </td>
                   <td>
                    <input type="text" name="id" style="width:100px;">
                  </td>
                  <td>
                    <a href=""><button class="btn btn-warning">Thêm</button> 
                  </a></td>
                          </tr>
                            {{csrf_field()}}
                        </form>
                         </tbody>
                         @endforeach
                      </table>
</div>
</div>
</div>
<div>
  <a href="QLsinhvien"><button class="btn btn-success"><< Trở về trang trước</button></a>
</div>
</div>
<div class="col-sm-6" style="background-color:#aaaaff;">
<h5>Phòng Trống</h5>
<div style=" border: solid 1px #b2b2b2;height: 100px;">
<div style=" border: solid 1px #b2b2b2;height: 100px;color:#007fff;font-size:18px;height: 30px;padding-left: 10px;">Tìm kiếm</div>
<form style="margin-top: 15px;" class="form-inline" action="{{route('tkphong')}}" method="post">
   <p style="padding-left: 10px;"> Khu vực phòng:</p> 
    <select style="margin-left: 10px; margin-right: 30px; " name="gioitinh" >
      <option name="a" value="A">Khu A</option>
      <option name="b" value="B">Khu B</option>
      <option name="c" value="C">Khu C</option>
      <option name="d" value="D">Khu D</option>
    </select> 
     <button class="btn btn-warning" type="submit">Tìm kiếm</button>
      {{csrf_field()}}
  </form>
</div>
 <h5 style="padding-top: 20px;">Phòng Đã được sử dụng</h5>
  <div style="margin-top: 20px;">
        <div class="panel-body">
            <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th style="width:10%">Mã Phòng</th>
                            <th style="width:20%">Tên Phòng</th>
                            <th style="width:20%">Số lượng giường</th>
                            <th style="width:20%">giường đã sử dụng </th>
                          </tr>
                        </thead>
                        <tbody>
               @foreach($pt as $pt)   
                <tr>
                  <td>{{$pt->id}}</td>
                  <td>{{$pt->maphong}}</td>
                  <td>{{$pt->sogiuong}}</td>
                  <td>{{$pt->sl}}</td>
                   
                          </tr>
                         </tbody>
                        @endforeach
                      </table>
</div>
  
  </div>
</div>
 <h5 style="padding-top: 20px;">Tất cả phòng</h5>
  <div style="margin-top: 20px;">
        <div class="panel-body">
            <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th style="width:30%">Mã Phòng</th>
                            <th style="width:30%">Tên phòng</th>
                            <th style="width:10%">Loại Phòng</th>
                            <th style="width:30%">Số lượng giường</th>
                          </tr>
                        </thead>
                        <tbody>
               @foreach($phong as $p)   
                <tr>
                  <td>{{$p->id}}</td>
                  <td>{{$p->maphong}}</td>
                  <td>{{$p->loaip}}</td>
                  <td>{{$p->sogiuong}}</td>
                          </tr>
                         </tbody>
                        @endforeach
                      </table>
</div>
  
  </div>
</div>
</div>
</div>
</body>
</html>