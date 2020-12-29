<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin-top:85px;
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
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  border-bottom: 1px solid #cccccc;
}

li a.active {
  background-color: #135e8c;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
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

</style>
</head>
<body>

<ul>
  <li><a href="trangchu.php">Trang Chủ</a></li>
  <li><a  href="Taikhoan.php">Quản Lý Tài Khoản</a></li>
  <li><a href="#contact">Quản Lý Bài Giảng</a></li>
  <li><a class="active" href="#">Quản Lý Câu Hỏi</a></li>
  <li><a href="#about">Đăng Xuất</a></li>
</ul>

</div>

<div id="navbar">
  <a href="gioithieu.html">ENGLISH FOR KID</a>
  <a href="kiemtra.html"><img src="logo1.png" style="width:120px; height:50px;margin-left:750px"></a>
</div>
<div style="margin-left:17%;padding:1px 16px;height:600px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản Lý Câu Hỏi</h1>

  <div class="clearfix">
  <div class="box" style="width: 60%;">
    <div class="clearfix">
    <img class="box" src="img/lg1.jpg"  style="width:40px; height:40px;"> 
    <b class="box" style="font-size:20px;margin-top: 8px; " >Thêm câu hỏi mới</b>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Mã câu hỏi :</div>
    <div class="box" ><input type="text" name="macauhoi" style="width:200px; height:25px;"></div>
  </div>
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Mã chủ đề câu hỏi :</div>
    <div class="box" ><input type="text" name="chudecauhoi" style="width:200px; height:25px;"></div>
  </div>
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Nội dung câu hỏi :</div>
    <div class="box" ><textarea type="text" name="noidung" style="width:200px; height:125px;"> </textarea></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Đáp án đúng :</div>
    <div class="box" ><input type="text" name="dadung" style="width:200px; height:25px;"></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Đáp án nhiễu 1 :</div>
    <div class="box" ><input type="text" name="danhieu1" style="width:200px; height:25px;"></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Đáp án nhiễu 2 :</div>
    <div class="box" ><input type="text" name="danhieu2" style="width:200px; height:25px;"></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Đáp án nhiễ 3 :</div>
    <div class="box" ><input type="text" name="danhieu3" style="width:200px; height:25px;"></div>
  </div>
  <input type="submit" name="" value="Thêm câu hỏi" style="margin-top: 20px;margin-left: 300px;">
  </div>
  <div class="box" style="background-color:#;width: 35%;margin-left: 30px;border-left: 2px solid #ddd;">
    <div class="clearfix">
    <img class="box" src="img/lg1.jpg"  style="width:40px; height:40px; "> 
    <b class="box" style="font-size:20px;margin-top: 8px; " >Chỉnh sửa câu hỏi</b>
  </div>
   <div  style="margin-top: 20px;">
    <div  style="margin-left: 50px;font-size:18px;width: 150px;">Nhập mã câu hỏi :</div>
    <div ><input type="text" name="macauhoi" style="width:250px; height:25px;margin-top: 20px;margin-left: 50px;"></div>
     <input type="submit" name="" value="Tìm kiếm" style="margin-top: 20px;margin-left: 230px;">
  </div>
  <div class="clearfix">
    <img class="box" src="img/lg2.jpg"  style="width:40px; height:40px; "> 
    <b class="box" style="font-size:20px;margin-top: 8px; " >Xóa câu hỏi</b>
  </div>
    <div  style="margin-top: 20px;">
    <div  style="margin-left: 50px;font-size:18px;width: 250px;">Nhập mã câu hỏi mà bạn cần xóa:</div>
    <div ><input type="text" name="macauhoi" style="width:250px; height:25px;margin-top: 20px;margin-left: 50px;"></div>
     <input type="submit" name="" value="Xóa" style="margin-top: 20px;margin-left: 260px;">
  </div>
  </div>
</div>

</div>


</body>
</html>