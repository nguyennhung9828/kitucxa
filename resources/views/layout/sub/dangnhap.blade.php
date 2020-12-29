<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin-top:85px;
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
a{
  text-decoration: none;
  color:black;
}

</style>
</head>
<body style="background-image: url('backend/img/ha2.jpg');">
  <div style="border: 2px solid #7f7f7f; margin: auto;width:400px; ">
    <div class="clearfix">
    <b class="box" style="font-size:20px;padding-top: 10px;padding-left: 150px; " >Đăng Nhập</b>
  </div>
  <form method="post" action="{{route('dn')}}">
    
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 100px;">Tài Khoản :</div>
    <div class="box" ><input required type="text" name="username" placeholder="Nhập tài khoản..." style="width:200px; height:25px;"></div>
  </div>
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 100px;">Mật khẩu :</div>
    <div class="box" ><input required type="password" name="password" placeholder="Nhập mật khẩu..." style="width:200px; height:25px;"></div>
  </div>
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box"><input type="submit" name="sub" value="Đăng nhập" style="margin-top: 20px;margin-left: 150px;" ></div>
    <div class="box"><p style="margin-top: 20px;margin-left: 20px;border: 1px solid #a5a49d;background-color: #ededed; padding-left: 5px;padding-right: 5px;" value="Thoát"> <a  href="formdangki">Đăng Kí</a></div>
  </div>
</div>

{{csrf_field()}}
</form>
</div>
</body>
</html>