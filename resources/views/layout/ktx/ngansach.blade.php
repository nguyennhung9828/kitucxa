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
  <li><a  href="QLsinhvien">Quản Lý Sinh Viên</a></li>
  <li><a   href="QLphong">Quản Lý Phòng</a></li>
  <li><a class="active1" href="QLngansach">Quản Lý Ngân Sách</a></li>
  <li><a href="QLtaikhoan">Quản Lý Tài Khoản</a></li>
  <li><a href="loginktx">Đăng xuất</a></li>
</ul>

<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="height: 80px;">
  <a class="navbar-brand" href="#">Quản Lý Kí Túc Xá Trường Đại Học Sư Phạm Hà Nội</a>
</nav>
</div>
<div style="margin-left:17%;padding:1px 16px;height:600px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản Lý Tiền Phòng </h1>
  <div style="background-color: #e5e5e5">
  <img src="backend/img/lg3.png" width="40" height="30"><a href="QLsinhvien">Thông tin phòng kí túc xá</a>
  </div>
  <div style="margin-left: 20px; margin-right: 20px;">
  <div class="row">
    <div class="col-sm-6" style="margin-top: 20px;">
      <div style="border: 1px solid  #cccccc;margin-bottom:20px;">
        <p>Tìm Kiếm</p>
        <hr>
          <form class="form-inline" method="post" action="{{route('tkmsv')}}">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Mã sinh viên: </span>
              </div>
               <input type="text" name="masv" class ="form-control mr-sm-2" placeholder="Nhập mã sinh viên...">
                <button class="btn-primary">Tìm Kiếm </button>
                 {{csrf_field()}}    
                   </form>
                <div style="margin-top:15px;margin-bottom: 20px;">
                   <div class="input-group-prepend">
                <a href="xem" class="input-group-text">Xem danh sách sinh viên chưa đóng tiền </a>
              </div>
                </div>
            </div>
            
      </div> 
         </div>
        
    <div class="col-sm-6"></div>
  </div>
   @if(session('thongbao'))
         <b style="color: green;"> {{session('thongbao')}}</b>
          @endif
          @if ($errors->has('t'))
            <p style="color:red;">{{ $errors->first('t') }}</p>
          @endif
    <div  style="border: 1px solid  #cccccc;margin-top: 20px;">
      <h5><i class="fas fa-bars"></i> Thông tin sinh viên</h5>
      <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th style="width:5%">id</th>
                            <th style="width:10%">Mã sinh viên</th>
                            <th style="width:20%">Họ tên </th>
                            <th style="width:10%">Lớp</th>
                            <th style="width:10%">Khoa</th>
                            <th style="width:10%">Giới tính</th>
                            <th style="width:10%">Phòng</th>
                            <th style="width:10%">Tiền phải nộp</th>
                            <th style="width:10%">Đã nộp</th>
                            <th style="width:15%">Tùy chỉnh</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                @foreach($phongsv as $p)   
                <tr>
                  <form method="post" action="{{route('noptien')}}">
                  <input type="text" name="id" value="{{$p->id}}" hidden="" >
                  <td>{{$p->id}}</td>
                  <td>{{$p->masv}}</td>
                  <td>{{$p->hoten}}</td>
                  <td>{{$p->khoa}}</td>
                  <td>{{$p->lop}}</td>
                  <td>{{$p->gioitinh}}</td>
                  <td>{{$p->phong}}</td>
                  <td>{{$p->giatien}}</td>
                  <td><input type="text" name="t" placeholder="{{$p->tienp}}"></td>
                  <td>
                    <button class="btn btn-warning">Lưu</button>
                            </td>
                          </tr>
                           {{csrf_field()}}  
                       </form>
                         </tbody>
                         @endforeach
                        
                      </table>
</div>
  
    </div>

  </div>
</div>


</body>
</html>