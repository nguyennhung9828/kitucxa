<!DOCTYPE html>
<html>
<head>
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
  <li><a  href="trangchuktx">Trang Chủ</a></li>
  <li><a  href="QLsinhvien">Quản Lý Sinh Viên</a></li>
  <li><a   href="QLphong">Quản Lý Phòng</a></li>
  <li><a href="QLngansach">Quản Ngân Sách</a></li>
  <li><a class="active1" href="QLtaikhoan">Quản Lý Tài Khoản</a></li>
  <li><a href="loginktx">Đăng xuất</a></li>
</ul>

<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="height: 80px;">
  <a class="navbar-brand" href="#">Quản Lý Kí Túc Xá Trường Đại Học Sư Phạm Hà Nội</a>
</nav>
</div>

<div style="margin-left:17%;padding:1px 16px" >
  <h1 style="border-bottom: 1px solid #cccccc;">Quản lý tài khoản</h1>
  </div>
    <div class="row" style="margin-left:17%;">
    <div class="col-sm-6" style="border: 1px solid #ddd">
    <b class="box" style="font-size:20px;margin-top: 8px; " >Thêm Tài khoản Admin</b>
  <p style="color: green;font-size:18px;  margin-left: 50px;">
   @if(session('thongbao'))
    {{session('thongbao')}}
    @endif
  </p>
   <form method="post" action="{{route('tkadmin1')}}">
    <div  style="margin-top: 20px;">
    <div  style="font-size:17px;">Tên tài khoản : <input type="text" name="tkad"  class="form-control mr-sm-2" placeholder="Nhập tài khoản...">
  </div>
   @if ($errors->has('tkad'))
        <p style="color: red;"class="tt">{{ $errors->first('tkad') }}</p>
    @endif
  <div style="margin-top: 20px;">
    <div class="box" style="font-size:17px;">Mật khẩu :<input type="password" name="mkad1" placeholder="Nhập mật khẩu..." class="form-control mr-sm-2" ></div>
  </div>
  @if ($errors->has('mkad1'))
        <p style="color: red;"class="tt">{{ $errors->first('mkad1') }}</p>
    @endif 
  <div style="margin-top: 20px;">
    <div style="font-size:17px;">Nhập lại mật khẩu :<input type="password" name="mkad2" placeholder="Nhập mật khẩu..." class="form-control mr-sm-2"> </div>
  </div>
   @if ($errors->has('mkad2'))
        <p style="color: red;"class="tt">{{ $errors->first('mkad2') }}</p>
    @endif 
  <input type="submit" name="" value="Thêm " style="margin-top: 20px;margin-bottom: 30px">
  {{csrf_field()}}
</form>
</div>
</div>
<div class="col-sm-6">
   <form class="form-inline" action="{{route('tktk')}}" method="post">
    <input class="form-control mr-sm-2" type="text" placeholder="Nhập username...." name="us">
    <button class="btn btn-success" type="submit">Tìm kiếm</button>
      {{csrf_field()}} 
  </form>
    <div ><a href="locngd"> <button class="btn btn-success" style="margin-top: 20px;" type="submit">Lọc Tài khoản người dùng</button></a></div>
   
    <div class="box" ><a href="locad"><button class="btn btn-success" style="margin-top: 20px;" type="submit">Lọc Tài khoản admin</button></a></div>
  </div>
  {{csrf_field()}}
</form>

 
  </div>
</div>
  
  <div style="margin-left: 17%">
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