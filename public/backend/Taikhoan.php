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

</style>
</head>
<body>

<ul>
  <li><a href="trangchu.php">Trang Chủ</a></li>
  <li><a class="active" href="#news">Quản Lý Tài Khoản</a></li>
  <li><a href="#contact">Quản Lý Bài Giảng</a></li>
  <li><a href="cauhoi.php">Quản Lý Câu Hỏi</a></li>
  <li><a href="#about">Đăng Xuất</a></li>
</ul>

</div>

<div id="navbar">
  <a href="gioithieu.html">ENGLISH FOR KID</a>
  <a href="kiemtra.html"><img src="logo1.png" style="width:120px; height:50px;margin-left:750px"></a>
</div>

<div style="margin-left:17%;padding:1px 16px;height:1000px;">
  <h1 style="border-bottom: 1px solid #cccccc;">Quản lý tài khoản</h1>
  
</div>

</body>
</html>