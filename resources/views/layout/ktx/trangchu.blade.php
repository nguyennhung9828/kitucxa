<!DOCTYPE html>
<html>
<head>

<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
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

li a.active1 {
  background-color: #135e8c;
  color: white;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
  text-decoration: none;
}

</style>
</head>
<body>
<ul>
  <li><a  class="active1" href="trangchu">Trang Chủ</a></li>
  <li><a  href="QLsinhvien">Quản Lý Sinh Viên</a></li>
  <li><a href="QLphong">Quản Lý Phòng</a></li>
  <li><a href="QLngansach">Quản Ngân Sách</a></li>
  <li><a href="QLtaikhoan">Quản Lý tiền Tài Khoản</a></li>
  <li><a href="loginktx">Đăng xuất</a></li>
</ul>

</div>

<div id="navbar">
  <a href="gioithieu.html">Quản Lý Kí túc xá Trường Đại Học Sư Phạm Hà Nội</a>
  <a href="kiemtra.html"><div src="logo1.png" style="width:120px; height:50px;margin-left:750px"></div></a>
</div>

  </div><!-- /.container-fluid -->
  </nav>
    
  
    
  </div><!--/.sidebar-->
    <div style="margin-left: 19%;">
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
    <div class="row">
      <div class="col-lg-12" style="margin-bottom: 20px;">
        <h1 class="page-header">Chào mừng đến với trang thông tin kí túc xá</h1>
      </div>
    </div><!--/.row-->
                  
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">@foreach($slsv as $sl ){{$sl->slsv}}@endforeach</div>
              <div class="text-muted">Sinh viên</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">@foreach($yc as $yc ){{$yc->slyc}}@endforeach</div>
              <div class="text-muted">Sinh viên chờ đăng kí</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">@foreach($tk as $tk ){{$tk->sl}}@endforeach</div>
              <div class="text-muted">Tài Khoản</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">@foreach($p as $p ){{$p->slp}}@endforeach</div>
              <div class="text-muted">Phòng</div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    <div style="margin-top: 100px;">
      <h5 style="text-align: center;">Kí túc xá đại học sư phạm Hà Nội</h5>
      <h5 style="text-align: center;">Địa chỉ liên hệ 136 Xuân Thủy Cầu Giấy Hà Nội</h5>
      <h5 style="text-align: center;">Số điện thoại liên hệ  024-37547823 - Fax: 024-37547971</h5>
       <h5 style="text-align: center;">Phụ trách: Ban biên tập - Phát triển và quản lý: Trung tâm CNTT</h5>
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