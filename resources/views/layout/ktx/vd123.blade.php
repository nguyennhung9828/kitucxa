<!DOCTYPE html>
<html>
<head>
	<title>123</title>
</head>
<body>
<div class="container" style="height:1000px;font-size: 20px;">
    @if(session('thongbao'))
         <b style="color: green;"> {{session('thongbao')}}</b>
          @endif   
    <h1 style="color: green;margin-top: 50px;margin-bottom: 50px;">Đăng kí Online</h1>
       
      <div>
              <table >
                        <thead>
                          <tr class="bg-primary">
                            <th style="width:10%">Mã SV</th>
                            <th style="width:20%">Họ và tên</th>
                            <th style="width:10%">Lớp</th>
                            <th style="width:20%">Khoa</th>
                             <th style="width:10%">Giới tính</th>
                            <th style="width:10%">Phòng</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($phongsv as $sv) 
                          <tr>
                          <td>{{$sv->masv}}</td>
                          <td>{{$sv->hoten}}</td>
                          <td>{{$sv->lop}}</td>
                          <td>{{$sv->khoa}}</td>
                          <td>{{$sv->gioitinh}}</td>
                                  </tr>
                                  @endforeach
                                 </tbody>       
                      </table>
    </div>
</body>
</html>