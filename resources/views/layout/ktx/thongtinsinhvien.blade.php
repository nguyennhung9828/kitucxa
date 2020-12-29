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
<div id="navbar">
  <a href="gioithieu.html">Quản Lý Kí túc xá Trường Đại Học Sư Phạm Hà Nội</a>
  <a href="kiemtra.html"><div src="logo1.png" style="width:120px; height:50px;margin-left:750px"></div></a>
</div>
<div style="margin-left:17%;padding:1px 16px;height:600px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản Lý Sinh Viên</h1>
  <div style="background-color: #e5e5e5">
  <img src="backend/img/lg3.png" width="40" height="30"><a href="QLsinhvien">Yêu cầu đăng kí của sinh viên</a>
  <a href="thongtinsv" style="padding-left: 7px;">|  Thông tin sinh viên</a>
  </div>
  <div style="background-color: #e5e5e5;margin-top: 20px; border: solid 1px #b2b2b2">
    <p style="font-size: 20px; color:#007fff;padding-left: 10px;">Tìm Kiếm </p>
  </div>
  <div style=" border: solid 1px #b2b2b2;height: 100px;">
   <div style="margin-left: 10px;">
  <form style="margin-top: 15px;" class="form-inline" action="{{route('tkttsv')}}" method="post">
    Tên Lớp: <input style="margin-left:10px;" name="tklop"  class="form-control mr-sm-2" type="text" placeholder="nhập tên lớp...">
    Tên Khoa: <input style="margin-left:10px; " name="tkkhoa" class="form-control mr-sm-2" type="text" placeholder="nhập tên khoa...">
    Tên Phòng: <input style="margin-left:10px; " name="tkphong" class="form-control mr-sm-2" type="text" placeholder="nhập tên phòng...">
     <button class="btn btn-success" type="submit">Tìm kiếm</button>
      {{csrf_field()}}
  </form>
   </div>
  </div>

  <div style="margin-top: 20px;">
        <div class="panel-body">
            <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th style="width:10%">Mã SV</th>
                            <th style="width:20%">Họ và tên</th>
                            <th style="width:10%">Lớp</th>
                            <th style="width:20%">Khoa</th>
                             <th style="width:10%">Giới tính</th>
                            <th style="width:10%">Phòng</th>
                            <th style="width:30%">Tùy chọn</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($phongsv as $tt)
                            <td >{{$tt->masv}}</td>
                            <td>{{$tt->hoten}}</td>
                            <td>{{$tt->lop}}</td>
                            <td>{{$tt->khoa}}</td>
                            <td >{{$tt->gioitinh}}</td>
                            <td>{{$tt->phong}}</td>
                            <td>
                             
                              <a href="xoasv/{{$tt->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                            </td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
</div>
 <a href="suattsv" class="btn btn-success" style="float: right;"><span class="glyphicon glyphicon-edit"></span> Sửa Thông tin sinh viên >></a> 
  </div>
    

</body>
</html>