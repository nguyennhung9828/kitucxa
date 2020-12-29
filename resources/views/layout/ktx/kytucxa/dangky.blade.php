<!DOCTYPE html>
<html>
<head>
  <title> Đăng ký phòng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>
  <div class="container-fluid" style="background-image: url(anh/banner.jpg); width: 100%;height: 130px;">
    </div>
    <div class="container-fluid" style="background-color: #e8dfdf; width: 100%;height: 50px;">
      <div class="container">
            <ul class="nav" style="">
    <li class="nav-item">
      <a class="nav-link" href="trangchu">Trang chủ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gioithieu">Giới thiệu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tintuc">Tin tức-Sự kiện</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="dangkyphong">Đăng ký phòng</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Thanh toán</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="loginktx">Đăng xuất</a>
    </li>
      </ul>
      </div>
    </div>
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="anh/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="anh/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="anh/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="anh/4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  <div class="container" style="height:1000px;font-size: 20px;">  
    <h1 style="color: green;margin-top: 50px;margin-bottom: 50px;">Đăng kí Online</h1>
<div style="margin-top: 20px;">
     @if(session('thongbao'))
   <b style="color: green;"> {{session('thongbao')}}</b>
    @endif
              <div class="panel-body">
            <div class="bootstrap-table">
              <table class="table table-bordered">
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
                          <td>{{$sv->phong}}</td>
                                  </tr>
                                  @endforeach
                                 </tbody>       
                      </table>
</div>
  <div class="container" style="height:1000px;font-size: 20px;">
    <h1 style="color: green;margin-top: 50px;margin-bottom: 50px;">Sinh viên cần nộp thủ tục sau</h1>
    <h2>BƯỚC 1: Chuẩn bị bộ hồ sơ bao gồm (Các biểu mẫu Download tại đây)</h2>
    <p>– 01 Bản gốc và 03 Photo Đơn đề nghị thuê nhà ở SV có xác nhận của cơ sở đào tạo (dán ảnh đóng dấu giáp lai).</p>
    <p>– 02 ảnh 3×4 (cho vào 1 phong bì thư ghi rõ: họ tên, trường, ngày tháng năm sinh, sđt);  </p>
    <p>– 03 Photo CMTND/CCCD;  </p>
    <p>– 03 Photo thẻ SV (hoặc giấy báo nhập học với SV năm 1)</p>
    <p>– 01 Photo sổ hộ khẩu (không cần công chứng)</p>
    <p>– 01 Bản cam kết thực hiện Quy định nội trú</p>
    <p>– 01 Phiếu thu thập thông tin dân cư.</p>
    <p>– 01 Bản khai nhân khẩu (dành cho 14 tuổi trở lên) </p>
    <p>– 01 Phiếu báo thay đổi hộ khẩu, nhân khẩu </p>
    <p>– 01 Giấy ưu tiên có xác nhận của cơ quan có thẩm quyền (nếu có)</p>
    <h2>BƯỚC 2: Nộp hồ sơ tại:</h2>
    <h3>PHÒNG TIẾP NHẬN HỒ SƠ</h3>
    <p>– Tầng 1, tòa nhà A5 – ĐN1, Khu nhà ở ktx, đường Xuân Thủy, P. Dịch Vọng Hậu, Q. Cầu giấy, TP. Hà Nội</p>
    <p>– Email: b.ktx@hnue.edu.vn</p>
    <p>– Website: http://kytucxa.hnue.edu.vn/</p>
    <h2>BƯỚC 3: Ký hợp đồng và Nộp lệ phí lưu trú</h2>
    <p>Hồ sơ được xét duyệt trong thời hạn 15 ngày, Ban quản lý sẽ liên hệ sinh viên đến ký hợp đồng và nộp lệ phí lưu trú.</p>
  </div>
    
     <div class="container-fluid" style="height: 216px;">
      <div class="container" style="margin-top: 20px;">
          <div class="row">
              <div class="col-sm-3"> <i class="fa fa-map-marker"></i>Địa chỉ:</div>
              <div class="col-sm-3">136 Xuân Thuỷ - Cầu Giấy - Hà Nội</div>
              <div class="col-sm-3"><i class="fa fa-envelope-o"></i>Email:</div>
              <div class="col-sm-3">b.ktx@hnue.edu.vn</div>
          </div>  
          <div class="row">
              <div class="col-sm-3"> <i class="fa fa-phone"></i>Điện thoại:</div>
              <div class="col-sm-3">136 Xuân Thuỷ - Cầu Giấy - Hà Nội</div>
              <div class="col-sm-3"><i class="fa fa-facebook-official"></i></div>
              <div class="col-sm-3"><a href="#">http://fb.com/ktxdhsphn:</a></div>
          </div>  
          <div class="row" style="margin-top: 30px;">
              <div class="col-sm-2"><img src="anh/17.jpg"></div>
              <div class="col-sm-2"><a href="#"> <img src="anh/14.jpg"></a></div>
              <div class="col-sm-2"><a href="#"><img src="anh/15.jpg"></a></div>
              <div class="col-sm-2"><a href="#"><img src="anh/16.jpg"></a></div>
              <div class="col-sm-2"></div>
              <div class="col-sm-2"></div>
          </div>
          <h3 style="margin-top: 10px;">Liên kết</h3>
          <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        </div>
     </div>
     <div class="container-fluid">
         <p><iframe frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4428.408626488573!2d105.78270248182037!3d21.039369501774065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab345cc4acf7%3A0xeb0c296556f22ff!2zS8O9IHTDumMgeMOhIMSQSCBTxrAgcGjhuqFt!5e0!3m2!1svi!2s!4v1511445945170" style="border:0" width="100%"></iframe></p>

     </div>
     <h6 style="color: #708090;margin-left: 415px;">Bản quyền 2020 thuộc về Ban quản lí Ký túc xá - Trường ĐHSP Hà Nội </h6>
     <h6 style="color: #708090;margin-left: 490px;">Phụ trách kỹ thuật & thiết kế web: 0965246968 </h6>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>