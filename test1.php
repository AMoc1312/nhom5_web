<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>coconut xin chào</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
 <link href="img/h2.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style type="text/css">
     #i1
 {
  margin-top: 10px;
 }
  .dropdown-content  a, .dropdown-content button {
      width: 150px;
  padding: 10px 20px;
  margin-left: auto; margin-right: auto;
  text-decoration: none;
  display: block;
  font-size: 15px;
  background-color: white;
  text-align: left;
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown-content button:hover {background-color: #ddd;}


.dropdown-content {
  display: none;
 width: 180px; height: 340px;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.19);
      border-radius: 15px;
      position: absolute;
      top:85px;
       background-color:white;

       right: 120px;
      position: fixed;
}
#myThongBao
{
   display: none; 
 width: 300px; height: auto;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.19);
      border-radius: 8px;
      position: absolute;
      margin-top:215px;
       background-color:white;
       overflow: auto;
       right: 301px;z-index: 1031; font-size: 14px;position: fixed;
}


.show {display: block;}
label { padding: 5px; };
  </style>

</head>

<body>
<!--  đầu tài khoản-->
<script type="text/javascript">
  function goiTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "block";
                         }
   function tatTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "none";
                         }
</script>


<?php 
  session_start();

  if (!(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '')) {
?>
<script>
function goiTaiKhoan() {

  document.getElementById("myDropdown2").classList.toggle("show");
  var x1 = document.getElementById("myThongBao");
                           x1.style.display = "none";
}
 function goiTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "block";
                         }
   function tatTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "none";
                         }

</script>
<?php
}
  else
  {
?>
<script>
function goiTaiKhoan() {

  document.getElementById("myDropdown1").classList.toggle("show");
   var x1 = document.getElementById("myThongBao");
                           x1.style.display = "none";
}
 function goiTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "block";
                         }
   function tatTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "none";
                         }
</script>
<?php
}
;?>
  <div id="myThongBao"  >
    <h5 style="padding:  9px 15px;text-align: center;background-color: #f1f0f0; margin: 0px;color: black;">Thông báo <button onclick="tatTb()" style="float:right;background-color: #ddd;border-width: 0px;"><img style="width: 15px;" src="img/cancel.png"></button></h5>
   
   <hr style="margin: 0px;">
   <div style="height: 250px; overflow-y: scroll; overflow-x: hidden;">
   <?php
                // 1. KẾT NỐI ĐẾN CSDL
                $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                 mysqli_query($ket_noi, "SET NAMES 'UTF8'");
           $sql="
        SELECT  tbl_user_reviewer.ten_dang_nhap, tbl_binh_luan.id_reviewer, tbl_review.ten_mon, tbl_binh_luan.id_review ,'ngay_them' FROM tbl_binh_luan INNER JOIN tbl_user_reviewer ON tbl_binh_luan.id_reviewer=tbl_user_reviewer.id_reviewer INNER JOIN tbl_review ON tbl_binh_luan.id_review=tbl_review.id_review";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ( $row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>

   <div style="padding: 10px;"><a href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>" style="color:#5d4747;padding: 0px;margin: 0px;width: 270px;"><span ><strong><?php echo $row["ten_dang_nhap"];?></strong></span> đã bình luận về bài viết "<strong><?php echo $row["ten_mon"];?></strong>" của bạn vào ngày
                                                        <?php echo date("d/m/Y ",strtotime($row["ngay_them"]));?></a>
 <hr style="margin: 0px;">
                                                    </div>
                                                    <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>
  </div>
  </div>
  <div id="myDropdown1" class="dropdown-content" style="z-index:1031;">
   <a id="i1" href="">Trang cá nhân</a>
    
    <a href="">Đăng bài</a>
    
    <button onclick="goiTb()" style="margin: 0px 15px;border-width: 0px; ">Thông báo</button>
    <a href="">Đã lưu</a>

    <hr style="width: 148px;">
    <a href="">Tài khoản</a>
    
    <button style="margin: 0px 15px;border-width: 0px; ">Ngôn ngữ</button>
    
    <a href="dang_xuat_nguoi_dung_thuc_hien.php">Đăng xuất</a>
  </div>


  <div id="myDropdown2" class="dropdown-content" style="z-index:1031;height: 140px;">
   <a id="i1" href="dang_nhap.php">Đăng nhập</a>
    <hr>
    <a href="dang_ki.php">Đăng ký</a>
  </div>







<!--  cuối tài khoản-->



   <!-- thanh tìm kiếm-->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Review</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Tìm kiếm</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Nhập món ăn...">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Loại món ăn</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
              <!-- thêm các loại đồ ăn-->
                <option>Tất cả các loại</option>
        <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "n55");
        $sql = "
          SELECT * FROM `tbl_danh_muc` ORDER BY `id_danh_muc` ASC
        ";
        $noi_dung = mysqli_query($ket_noi, $sql);

        //lấy dữ liệu
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung)) {
          $i++;
      ;?>
        <!-- dữ liệu lặp lại -->
                <option value="<?php echo $row["id_danh_muc"];?>"><?php echo $row["ten_danh_muc"];?></option>
        <!-- kết thúc dữ liệu lặp lại-->
      <?php
        }
      ;?>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Địa điểm</label>
              <select class="form-control form-control-lg form-control-a" id="city">
              <!-- điền tên địa điểm-->
              <option>Tất cả các địa điểm</option>
              <!-- Lấy dữ liệu -->
      <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "n55");
        $sql = "
          SELECT * FROM `tbl_duong` ORDER By `ten_duong` ASC
        ";
        $noi_dung = mysqli_query($ket_noi, $sql);

        //lấy dữ liệu
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung)) {
          $i++;
      ;?>
        <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                <option value="<?php echo $row["id_duong"];?>"><?php echo $row["ten_duong"];?></option>
        <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
      <?php
        }
      ;?>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="rating">Điểm đánh giá</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
              <!-- điền điểm đánh giá thành món ăn--> 
                <option>Tất cả</option>
                <option>0 - 4 điểm</option>
                <option>5 - 7 điểm</option>
                <option>8 - 10 điểm</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Time">Thời gian</label>
              <select class="form-control form-control-lg form-control-a" id="Tìm kiếm">
              <!-- điền thời gian-->
                 <option>Tất cả </option>
                <option>6h - 12h</option>
                <option>12h - 0h</option>
                <option>0h - 6h</option>
              </select>
            </div>
          </div>
        <!--  <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div> -->
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Giá</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Tất cả</option>
                <option>0 - 50.000đ</option>
                <option>50.000đ - 200.000đ</option>
                <option>> 200.000đ</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Review</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php"><!--Estate<span class="color-b">Agency</span>--><img src="img/logoweb.png" style="width: 240px;height: auto;"></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="review.php">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="lien-he.php">Liên hệ</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <button onclick="goiTaiKhoan()" style="border-width: 0px;padding: 0px;background-color: white;"><img style="width: 40.86px; margin-left: 5px;" src="img/user1.png"></button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Coconut</h1>
            <span class="color-text-a">quả dừa</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Trang chủ</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Liên hệ
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
<?php   $ma_user = (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''); ?>
<!-- Thêm bài đăng đầu -->
<div style="border-style: solid;width: 1100px; height: 670px;border-color: #ddd; margin-left: auto; margin-right: auto;border-width: 0.1px;padding: 20px;border-radius: 10px;">
<form class="needs-validation" method="POST" action="./test1_thuc_hien.php" enctype="multipart/form-dadta">

<div style="float: left;width: 70%; height: 500px; margin-left: auto; margin-right: auto;padding: 20px;">
                                     

                                          <div class="">
                                                <label for="txtTenMon">Tên món</label>
                                                <input type="text" class="form-control" name ="txtTenMon" placeholder="Tên món" required>
                                                <div class="invalid-feedback">
                                                    Hãy nhập tên món.
                                                </div>
                                            </div>
                                             <div class="">
                                                <label for="validationCustom04">Ảnh minh họa</label>
                                                <input  type="file" name="txtAnhMinhHoa" style="width: 100%;">
                                                
                                            </div>
                                         <div class="">
                                                <label  for="txtNoiDung">Nội dung </label>
                                <textarea style="height: 187px;border-radius: 20px;" class="form-control" name ="txtNoiDung"  placeholder="Viết nội dung" style="width: 100%;"></textarea>
                            </div>
                                            <div style="width: 30%;" class="">
                                                <label for="txtDiem">Điểm</label>
                                                <input min="0" max="10" type="number" class="form-control" name="txtDiem" placeholder="Điểm" >
                                                <div class="invalid-feedback">s
                                                    Hãy nhập điểm.
                                                </div>
                                            </div>  
                                              <div style="width: 30%;float: left;" class="">
                                                <label for="txtGiaTB">Giá trung bình</label>
                                                <input type="number" class="form-control" name="txtGiaTB" placeholder="VNĐ" >
                                                <div class="invalid-feedback">
                                                    Hãy nhập giá.
                                                </div>
                                            </div >
                                              <div style="width: 30%;float: left;" class="">
                                                <label for="txtGiaMin">Giá tối thiểu</label>
                                                <input type="number" class="form-control" name="txtGiaMin" placeholder="VNĐ" >
                                                <div class="invalid-feedback">
                                                    Hãy nhập giá.
                                                </div>
                                            </div >
                                              <div style="width: 30%;float: left;" class="">
                                                <label for="txtGiaMax">Giá lớn nhất</label>
                                                <input type="number" class="form-control" name="txtGiaMax" placeholder="VNĐ" >
                                                <div class="invalid-feedback">
                                                    Hãy nhập giá.
                                                </div>
                                            </div>                                      
</div>

<div style="float: left;border-style: solid;width: 30%; height: 400px;border-color: #ddd; margin-left: auto; margin-right: auto;padding: 20px;border-width: 0.1px;border-radius: 20px;">

   <div  class="">
                                                <label for="txtDanhMuc">Danh mục</label>
                                                <select style=" overflow-x: hidden;
    overflow-y: scroll;" class="form-control" name="txtDanhMuc"  placeholder="Danh mục" required>
                                            <option>-----</option>               
        <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                         mysqli_query($ket_noi, "SET NAMES 'UTF8'");

        $sql = "
          SELECT * FROM `tbl_danh_muc` ORDER BY `id_danh_muc` ASC
        ";
        $noi_dung = mysqli_query($ket_noi, $sql);

        //lấy dữ liệu
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung)) {
          $i++;
      ;?>
        <!-- dữ liệu lặp lại -->
                <option value="<?php echo $row["id_danh_muc"];?>"><?php echo $row["ten_danh_muc"];?></option>
        <!-- kết thúc dữ liệu lặp lại-->
      <?php
        }
      ;?>
                                                    </select>
                                             
                                                <div class="invalid-feedback">
                                                    Hãy nhập danh mục.
                                                </div>
                                            </div>
                                            <div class="">
                                                <label for="txtDuong">Tên đường</label>
                                                <select style=" overflow-x: hidden;
    overflow-y: scroll;" class="form-control" name="txtDuong"   placeholder="Đường" required>
                                            <option>-----</option>               

              <!-- Lấy dữ liệu -->
      <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                         mysqli_query($ket_noi, "SET NAMES 'UTF8'");

        $sql = "
          SELECT * FROM `tbl_duong` ORDER By `ten_duong` ASC
        ";
        $noi_dung = mysqli_query($ket_noi, $sql);

        //lấy dữ liệu
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung)) {
          $i++;
      ;?>
        <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                <option value="<?php echo $row["id_duong"];?>"><?php echo $row["ten_duong"];?></option>
        <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
      <?php
        }
      ;?>
                                                    </select>
                                             
                                                <div class="invalid-feedback">
                                                    Hãy nhập đường
                                                </div>
                                            </div>
                                     <div class="">
                                                <label for="txtSoNha">Số nhà</label>
                                                <input type="text" class="form-control" name="txtSoNha" placeholder="số nhà" >
                                              
                                            </div> 
    
                                      <div style="width: 50%;float: left;" class="">
                                                <label for="txtGioMo">Giờ mở cửa</label>
                                                <input min="00:00" max="23:59" type="time" class="form-control" name="txtGioMo" placeholder="giờ mở cửa" >
                                                
                                            </div> 
                                      <div style="width: 50%;float: left;"  class="">
                                                <label for="txtGioDong">Giờ đóng cửa</label>
                                                <input type="time" class="form-control" name="txtGioDong" placeholder="giờ đóng cửa" >
                                                
                                            </div> 
                                      
</div>
<div>
                                        <button type="submit" style="margin-top: 180px;margin-right: 50px;float:right;z-index: -1;font-size:14px; padding: 5px 15px;background-color: #ccb7b0;color: black;border-width: 0px;border-radius: 7px;font-size: 20px;" class="ed">Đăng</button>
                                      </div>
                                      </form>
</div>
<!-- Thêm bài đăng cuối -->

  <!--/ footer Star /-->
 <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 ><img src="img/logoweb.png" style="width: 240px;height: auto;"></h3>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Email :</span> coconut1101@gmail.com</li>
                <li class="color-a">
                  <span class="color-text-a">Phone :</span> +54 356 945234</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h4 class="w-title-a text-brand">COCONUT</h4>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="lien-he.php">Bản đồ</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="coconut_chung.html">Giới thiệu website</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="coconut_chung.html">Chính sách bảo mật</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h4 class="w-title-a text-brand">Hướng dẫn sử dụng</h4>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="coconut_huong_dan.html">Hướng dẫn tạo tài khoản</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="coconut_huong_dan.html">Hướng dẫn tạo mật khẩu mới</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="coconut_huong_dan.html">Nguyên tắc đăng bài</a>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Trang chủ</a>
              </li>
           <!--   <li class="list-inline-item">
                <a href="#">About</a>-->
              </li>
              <li class="list-inline-item">
                <a href="#">Review</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Liên hệ</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- liên hệ Form JavaScript File -->
  <script src="lienheform/lienheform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
<!--<script type="text/javascript" 
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'vi'}, 'translate_select');
        }
    </script> -->
</html>
