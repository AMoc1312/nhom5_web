<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>coconut xin chào</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/h1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
@media only screen and (min-width: 740px) and (max-width: 1024px)
{
  .img-box-a {
    height: 280px; /* height of container */
    overflow: hidden;
}
/* cuối img */
</style>
</head>

<body>

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
      <a class="navbar-brand text-brand" href="index.php"><!--Estate<span class="color-b">Agency</span>-->
      <img src="img/logoweb.png" style="width: 240px;height: auto;"></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Trang chủ</a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link active" href="review.php">Review</a>
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
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h3 class="title-single">Review món ăn</h3>
            <span class="color-text-a">Tham khảo</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Trang chủ</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
               Review
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>Sắp xếp</option>  
                <option value="2">Từ A đến Z</option>
                <option value="3">Từ Z đến A</option>
                <option value="3"> Giá từ cao xuống thấp</option>
                <option value="3">Giá từ thấp đến cao</option>  
              </select>
            </form>
          </div>
        </div>
                <!--đầu kết nối-->
      <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "n55");

        // 2. Lấy dữ liệu mong muốn
        $sql = "
          SELECT * FROM `tbl_review` ORDER BY `id_review` ASC
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
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/doan/<?php echo $row["anh_minh_hoa"];?>" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $row["ten_mon"];?></a>
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
                  <a  class="link-a" href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Lượt xem</h4>
                      <span>&nbsp;&nbsp;<img style="width: 20px;" src="img/eye.png">&nbsp;&nbsp;12</span>
                    </li>
                    <li>
                      <h4  class="card-info-title">Đánh giá</h4>
                      
                      <div id="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4 and a half" />
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    
    <input type="radio" id="star4" name="rating" value="4" />
    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3half" name="rating" value="3 and a half" />
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    
    <input type="radio" id="star3" name="rating" value="3" />
    <label class = "full" for="star3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2half" name="rating" value="2 and a half" />
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    
    <input type="radio" id="star2" name="rating" value="2" />
    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1half" name="rating" value="1 and a half" />
    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" />
    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    
    <input type="radio" id="starhalf" name="rating" value="half" />
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
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
       
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">204 Mount
                      <br /> Olive Road Two</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="review.php" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->

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
