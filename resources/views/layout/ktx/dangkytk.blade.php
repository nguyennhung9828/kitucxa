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
.tt{
  color:red;
  padding-left: 200px;
}

</style>
</head>
<body style="background-image: url('backend/img/ha3.jpg');">
  <div style="border: 2px solid #7f7f7f; margin: auto;width:500px; ">
    <div class="clearfix">
    <b class="box" style="font-size:20px;padding-top: 10px;padding-left: 150px; " >Đăng Kí Tài Khoản</b>
  </div>
  <form method="post" action="{{route('dk')}}">
    
    <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Tên tài khoản :</div>
    <div class="box" ><input required type="text" name="tk" placeholder="Nhập tài khoản..." style="width:200px; height:25px;"></div>
  </div>
   @if ($errors->has('tk'))
        <p class="tt">{{ $errors->first('tk') }}</p>
    @endif
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Mật khẩu :</div>
    <div class="box" ><input required type="password" name="mk1" placeholder="Nhập mật khẩu..." style="width:200px; height:25px;"></div>
  </div>
  @if ($errors->has('mk1'))
        <p class="tt">{{ $errors->first('mk1') }}</p>
    @endif
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box" style="margin-left: 50px;font-size:18px;width: 150px;">Nhập lại mật khẩu :</div>
    <div class="box" ><input required type="password" name="mk2" placeholder="Nhập mật khẩu..." style="width:200px; height:25px;"></div>
  </div>
  
    @if ($errors->has('mk2'))
        <p class="tt">{{ $errors->first('mk2') }}</p>
    @endif
  <div class="clearfix" style="margin-top: 20px;">
    <div class="box"><input type="submit" name="sub" value="Đăng Kí" style="margin-top: 20px;margin-left: 200px;" ></div>
    {{csrf_field()}}
  </form>
  <div class="box">
   <p style="margin-top: 20px;margin-left: 20px;border: 1px solid #a5a49d;background-color: #ededed;padding-left: 5px;padding-right: 5px;" value="Thoát"> <a  href="login">Đăng Nhập</a>
  </p>
</div>
</div>
<p style="color: green;font-size:18px;  margin-left: 200px;">
   @if(session('thongbao'))
    {{session('thongbao')}}
    @endif
  </p>

</div>
</body>
</html>
