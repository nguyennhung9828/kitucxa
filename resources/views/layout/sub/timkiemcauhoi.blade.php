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
  <li><a href="trangchu.php">Trang Chủ</a></li>
  <li><a  href="taikhoan">Quản Lý Bài Giảng</a></li>
  <li><a href="#contact">Quản Lý Bài Giảng</a></li>
  <li><a class="active"href="QLcauhoi">Quản Lý Câu Hỏi</a></li>
  <li><a href="login">Đăng Xuất</a></li>
</ul>


<div id="navbar">
  <a href="gioithieu.html">ENGLISH FOR KID</a>
  <a href="kiemtra.html"><div style="width:120px; height:80px;margin-left:750px"></a></div>
</div>

<div style="margin-left:17%;padding:1px 16px;height:1000px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản lý câu hỏi</h1>
   <div class="clearfix">
  <div class="box" style="width: 60%;">
    <div class="clearfix">
     <div class="box" src="img/lg1.jpg"  style="width:40px; height:40px;"> </div>
    <b class="box" style="font-size:20px;margin-top: 8px; " >Danh sách câu hỏi</b>
  </div>
  
  </div>
   <form method="get" action="{{route('timkiemch')}}">
  <div class="clearfix" style="margin-top: 20px;">
   <a href="timch"> <div class="box" style="margin-left: 10px;width:90px;"><input name="em" value="Tìm kiếm" type="submit"></div></a>

    <input type="text" name="tkiem" placeholder="Nhập nội dung..." style="width:200px; height:25px;"> </div>
         {{csrf_field()}}
</form>
<div >
        <div class="panel-body">
            <div class="bootstrap-table">
              <table class="table table-bordered">
                        <thead>
                          <tr class="bg-primary">
                            <th>Macauhoi</th>
                            <th style="width:30%">Machude</th>
                            <th style="width:30%">Noidung</th>
                            <th style="width:30%">Dapandung</th>
                            <th style="width:30%">Dapannhieu1</th>
                            <th style="width:30%">Dapannhieu2</th>
                            <th style="width:30%">Dapannhieu3</th>
                            <th style="width:30%">Tùy chọn</th>
                          </tr>
                        </thead>
                        <tbody>

                      @foreach($CauHoi as $tk)   
                <tr>
                  <td>{{$tk->Ma_cauhoi}}</td>
                  <td>{{$tk->Ma_chude}}</td>
                  <td>{{$tk->Noi_dung}}</td>
                  <td>{{$tk->DA_dung}}</td>
                  <td>{{$tk->DA_nhieu1}}</td>
                  <td>{{$tk->DA_nhieu2}}</td>
                  <td>{{$tk->DA_nhieu3}}</td>
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
<a href="QLcauhoi"><div class="box" style="margin-left: 10px;width:90px;"><input name="" value="<< Trở  Trang Trước" type="submit"></div></a>
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
