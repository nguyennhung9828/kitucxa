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
  <li><a  href="trangchuktx">Trang Chủ</a></li>
  <li><a  href="QLsinhvien">Quản Lý Sinh Viên</a></li>
  <li><a  class="active1" href="QLphong">Quản Lý Phòng</a></li>
  <li><a href="QLngansach">Quản Ngân Sách</a></li>
  <li><a href="QLtaikhoan">Quản Lý Tài Khoản</a></li>
  <li><a href="loginktx">Đăng xuất</a></li>
</ul>

<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="height: 80px;">
  <a class="navbar-brand" href="#">Quản Lý Kí Túc Xá Trường Đại Học Sư Phạm Hà Nội</a>
</nav>
</div>
<div style="margin-left:17%;padding:1px 16px;height:600px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản Lý Phòng Kí Túc Xá</h1>
  <div style="background-color: #e5e5e5">
  <img src="backend/img/lg3.png" width="40" height="30"><a href="QLsinhvien">Thông tin phòng kí túc xá</a>
  </div>
  <div style="margin-left: 20px; margin-right: 20px;">
  <div class="row">
    <div class="col-sm-6" style="margin-top: 20px;">
      <div style="border: 1px solid  #cccccc;margin-bottom:20px;">
        <p>Tìm Kiếm</p>
        <hr>
          <form class="form-inline" method="post" action="{{route('tkk')}}">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Khu phòng: </span>
              </div>
               <select name="khu" class="custom-select">
                <option name="A" value="A">Khu A</option>
                <option value="B">Khu B</option>
                <option value="C">Khu C</option>
                <option value="D">Khu D</option>
                </select>
                <button class="btn-primary">Tìm Kiếm </button>
            </div>
             {{csrf_field()}}    
          </form>
      </div>

        <h5 style="margin-top: 15px;">Xếp phòng</h5>
        @if(session('thongbao'))
         <b style="color: green;"> {{session('thongbao')}}</b>
          @endif

          
      <div style="background-color: #e5e5e5;border:1px solid #ddd;">
        <h5 style="color:#036d6d">Thêm phòng</h5>
          <form action="{{route('themphong')}} " method="post">
            <div class="form-group">
              <label for="email">Mã Phòng:</label>
              <input type="text" class="form-control" id="email" placeholder="Nhập mã phòng" name="map">
            </div>
            @if ($errors->has('map'))
            <p style="color:red;">{{ $errors->first('map') }}</p>
          @endif
            <div class="form-group">
              <label for="pwd">Khu phòng</label>
              <input type="text" class="form-control" id="pwd" placeholder="Nhập tên phòng" name="khup">
            </div>
            @if ($errors->has('khup'))
            <p style="color:red;">{{ $errors->first('khup') }}</p>
          @endif
            <div class="form-group">
              <label for="pwd">Số lượng giường</label>
              <input type="text" class="form-control" id="pwd" placeholder="Nhập số lượng giường" name="sl">
            </div>
            @if ($errors->has('sl'))
            <p style="color:red;">{{ $errors->first('sl') }}</p>
          @endif
            <div class="form-group">
              <label for="pwd">Giá phòng/người</label>
              <input type="text" class="form-control" id="pwd" placeholder="Nhập tên phòng" name="gia">
            </div>
            @if ($errors->has('gia'))
            <p style="color:red;">{{ $errors->first('gia') }}</p>
             @endif
            <button type="submit" class="btn btn-primary">Thêm</button>
            {{csrf_field()}}
          </form>
         </div>
       </div>
    <div class="col-sm-6" style="border: 1px solid  #cccccc;margin-top: 20px;">
      <h5><i class="fas fa-bars"></i> Chỉnh sửa thông tin phòng kí túc xá</h5>
       @if(session('thongbao'))
         <b style="color: green;"> {{session('thongbao')}}</b>
          @endif
           @if ($errors->has('nd'))
            <p style="color:red;">{{ $errors->first('nd') }}</p>
             @endif
               <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th style="width:10%">Mã Phòng</th>
                            <th style="width:10%">Khu Phòng</th>
                            <th style="width:10%">Số Giường</th>
                            <th style="width:10%">Loại Phòng</th>
                            <th style="width:10%">Giá Tiền</th>
                          </tr>
                        </thead>
                        <tbody>
                @foreach($phong as $p)   
                <tr>
                  <td>{{$p->maphong}}</td>
                  <td>{{$p->khu}}</td>
                  <td>{{$p->sogiuong}}</td>
                  <td>{{$p->loaip}}</td>
                  <td>{{$p->giatien}}</td>
                  
                          </tr>
                         </tbody>
                         @endforeach
                      </table>
</div>
<div style="margin-top:20px; ">
     <form class="form-inline" method="post" action="{{route('update')}}">
      @foreach($phong as $p)
      <input type="text" name="id" value="{{$p->id}}" hidden="">
      @endforeach
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Mục cần sửa: </span>
              </div>
               <select name="danhmuc" class="custom-select">
                <option  value="sogiuong">Số lượng giường</option>
                <option value="giatien">Giá tiền</option>
                <option value="loaip">Loại Phòng</option>
                </select>
                <input style="margin-left:10px; " name ="nd" class="form-control mr-sm-2" type="text" placeholder="nhập nội dung...">
                <button class="btn-primary">Chỉnh sửa </button>
            </div>
             {{csrf_field()}}    
          </form >
</div>
      
</div>
  
    </div>

  </div>
</div>


</body>
</html>