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
/****** Style Star Rating Widget *****/
#rating{border:none;float:left;}
#rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin-top:0px;font-size:18px;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
#rating>.half:before{content:"\f089";position:absolute;}/*0.5 ngôi sao*/
#rating>label{color:white;float:right;}/*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
/*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
#rating>input:checked~label,
#rating:not(:checked)>label:hover, 
#rating:not(:checked)>label:hover~label{color:#FFD700;}
/* Hover vào các sao phía trước ngôi sao đã chọn*/
#rating>input:checked+label:hover,
#rating>input:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input:checked~label:hover~label{color:#FFED85;}
/* đầu img */
.img-box-a {
    height: 350px; /* height of container */
    overflow: hidden;
}
.img-box-b
{
  height: 350px; /* height of container */
    overflow: hidden;
}
.card-img-d
{
  height: 230px; /* height of container */
    overflow: hidden;
}
@media only screen and (min-width: 740px) and (max-width: 1024px)
{
  .img-box-a, .card-img-d {
    height: 280px; /* height of container */
    overflow: hidden;
}
  .img-box-b
  {
    height: 280px; /* height of container */
    overflow: hidden;
  }
  .card-img-d
{
  height: 120px; /* height of container */
    overflow: hidden;
}
}
/* cuối img */
  </style>
</head>

<body>
<!--  đầu tài khoản-->
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
    
    <a href="them_bai_dang.php">Đăng bài</a>
    
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
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="tìm kiếm">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Loại món ăn</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
              <!-- thêm các loại đồ ăn-->
                <option>tất cả các loại</option>
                <option>Bánh tráng trộn</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Địa điểm</label>
              <select class="form-control form-control-lg form-control-a" id="city">
              <!-- điền tên địa điểm-->
                <option>Tất cả các địa điểm</option>
                <option>Khâm Thiên</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="rating">Điểm đánh giá</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
              <!-- điền điểm đánh giá thành món ăn--> 
                <option>tất cả</option>
                <option> 5 </option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Time">Thời gian</label>
              <select class="form-control form-control-lg form-control-a" id="Tìm kiếm">
              <!-- điền thời gian-->
                <option>Tất cả </option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
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
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
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
            <a class="nav-link  active" href="index.php">Trang chủ</a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="review.php">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <!--<li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Blogs.html">Blogs</a>
              <a class="dropdown-item" href="blog-single.html">Blog cá nhân</a>
              <a class="dropdown-item" href="Post.html">Post</a>
              <a class="dropdown-item" href="agent-single.html">Agent Single</a>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="lien-he.php">Liên hệ</a>
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

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Mount
                      <br> Olive Road Two</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Rino
                      <br> Venda Road Five</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Alira
                      <br> Roan Road One</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ KHUNG TOP RV /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Top review</h2>
            </div>
            <div class="title-link">
              <a href="review.php">Tất cả review
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">

      <!-- đầu Top review  -->
      <!--đầu kết nối-->
      <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                         mysqli_query($ket_noi, "SET NAMES 'UTF8'");


        // 2. Lấy dữ liệu mong muốn
        $sql = "
          SELECT * FROM `tbl_review` ORDER BY `diem` DESC LIMIT 6
        ";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>
       <!--cuối kết nối-->
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/doan/<?php echo $row["anh_minh_hoa"];?>" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>"><?php echo $row["ten_mon"];?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">
                      <?php
                          if ($row["gia_tb"] != null) {
                            echo $row["gia_tb"];
                          }
                          else
                          {
                            echo $row["gia_min"]." - ".$row["gia_max"];
                          };
                          ?> vnđ
                    </span>
                  </div>
                  <a  class="link-a" href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>">Xem chi tiết
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Lượt xem</h4>
                      <span>&nbsp;&nbsp;<img style="width: 20px;float: left;" src="img/eye.png">&nbsp;&nbsp;<?php echo $row["luot_xem"];?></span>
                    </li>
                    <li>

                       <h4  class="card-info-title">Đánh giá</h4>
                      <p>
                      <span class="color-text-a">&nbsp;&nbsp;&nbsp;<?php echo $row["diem"];?>/10</span>
                    </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
      <?php
        }
      ;?>
        <!-- CUỐI Top review  -->
      </div>
    </div>


  </section>
  <!--/ CUỐI KHUNG RV End /-->


<!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Top view</h2>
            </div>
            <div class="title-link">
              <a href="review.php">Tất cả review
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
      <!--đầu kết nối-->
      <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                         mysqli_query($ket_noi, "SET NAMES 'UTF8'");


        // 2. Lấy dữ liệu mong muốn
        $sql = "
          SELECT * FROM `tbl_review` ORDER BY `luot_xem` DESC LIMIT 5
        ";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>
       <!--cuối kết nối-->
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/doan/<?php echo $row["anh_minh_hoa"];?>" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>" class="category-b"><?php echo $row["luot_xem"];?> view</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>"><?php echo $row["ten_mon"];?></a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b"><?php
                          if ($row["gia_tb"] != null) {
                            echo $row["gia_tb"];
                          }
                          else
                          {
                            echo $row["gia_min"]." - ".$row["gia_max"];
                          };
                          ?> vnđ</span>
                </div>
              </div>
            </div>
          </div>
        </div>
           <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
      <?php
        }
      ;?>
        
      </div>
    </div>
  </section>
  <!--/ News End /-->


  <!--/ video Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Video</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
         <iframe width="100%" height="197" src="" data-src="https://www.youtube.com/embed/YqY-lUZ3JiQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
            <div class="card-body-c">
              <div style="float: left;">
                <p style="font-size: 20px;float: left;" class="content-c">
                Top 5 quán ngon QUẬN ĐỐNG ĐA mà Ninh Tito mê // QUÁN NGON QUẬN MÌNH series
              </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-c foo">
         <iframe id="vid1" width="100%" height="197" src="" data-src="https://www.youtube.com/embed/HwkaFA39Wr0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
            <div class="card-body-c">
              <div style="float: left;">
                <p style="font-size: 20px;float: left;" class="content-c">
                “ĂN SẬP” KHU CHÙA LÁNG CÙNG TASTING VIETNAM | TastingVietNam
              </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-c foo">
         <iframe id="vid1" width="100%" height="197" src="" data-src="https://www.youtube.com/embed/6WwjhgLBoGk?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
            <div class="card-body-c">
              <div style="float: left;">
                <p style="font-size: 20px;float: left;" class="content-c">[Review] Bỏ túi địa chỉ 5 QUÁN ĂN cực hot quận Đống Đa, Hà Nội | Feedy TV
              </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ video End /-->
<script>
function init() {
var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>
  <!--/ Top danh mục món ăn /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Top danh mục</h2>
            </div>
            <div class="title-link">
              <a href="top-danh-muc.html">Tất cả các danh mục
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <!-- đầu danh mục -->
      <!--đầu kết nối-->
      <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                         mysqli_query($ket_noi, "SET NAMES 'UTF8'");


        /* 2. Lấy dữ liệu mong muốn
        $sql = "
          SELECT `id_danh_muc`, COUNT(`id_review`) FROM `tbl_review` GROUP BY `id_danh_muc` ORDER BY COUNT(`id_review`) DESC
        "; */
        $sql="
          SELECT tbl_review.id_danh_muc,tbl_danh_muc.ten_danh_muc, tbl_danh_muc.anh_minh_hoa, COUNT(`id_review`) FROM `tbl_review` INNER JOIN tbl_danh_muc ON tbl_review.id_danh_muc=tbl_danh_muc.id_danh_muc GROUP BY tbl_review.id_danh_muc ORDER BY COUNT(`id_review`) DESC LIMIT 3
        ";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>
       <!--cuối kết nối-->
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/<?php echo $row["anh_minh_hoa"];?>" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 style="margin-top: 70px;" class="title-d">
                  <!-- đưa điến trang mon ăn-->
                    <a class="link-two" href="review.php"><?php echo $row["ten_danh_muc"];?></a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <div class="info-agents color-a">
                
                  <p style="font-size: 22px;">
                    <strong>Bài viết: </strong><?php echo $row["COUNT(`id_review`)"];?></p>
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
         <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
      <?php
        }
      ;?>
      </div>
    </div>
  </section>
  <!--/ Agents End /-->

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
