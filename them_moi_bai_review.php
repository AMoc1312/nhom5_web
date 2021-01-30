<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>coconut xin chào</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
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
  <style>
    body {
  font-family: 'Poppins', sans-serif;
  color: #5d4747;
  font-size: 18px;
}
input[type=text],input[type=password], select {
  width: 280px;
  height: 40px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

input::placeholder {
  font-size: 15px;
}
.button1
{
  width: 150px;
  height: 45px;
  background-color: #d2a495;
  font-size: 25px;
  font-family: 'Poppins', sans-serif;
  border-radius: 10px;
}

.formdn
{
text-align: center; 
width: 380px; 
height: 350px; 
padding-top: 60px;padding-bottom: 30px;padding-left: 30px;padding-right: 30px; 
background-color: white; 
margin-left: auto; margin-right: auto; 
border: 1px solid #ccc;
}
/* mobile: width < 740px */
@media only screen and (max-width: 740px)
{
  .formdn
  {
    width: 300px;
  }
  input[type=text],input[type=password], select 
  {
    width: 221px;
  }
}

@media only screen and (min-width: 740px) and (max-width: 1024px)
{
  
}
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
            <h1 class="title-single">Tạo bài đăng</h1>
            <span class="color-text-a">Hãy chia sẻ cảm nhận của bạn</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Trang chủ</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Đăng nhập
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <!--/ đầu tạo bài /-->
<div class="card-body">
                                    <form class="needs-validation" novalidate>
                                       
                                        <div class="form-row">
                                        <div  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtTenMon">Tên món</label>
                                                <input type="text" class="form-control" id="txtTenMon" placeholder="Tên món" required>
                                                <div class="invalid-feedback">
                                                    Hãy nhập tên món.
                                                </div>
                                            </div>
                                            <div style="float: left;" class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtDanhmuc">Danh mục</label>
                                                <select style=" overflow-x: hidden;
    overflow-y: scroll;" class="form-control" name="txtDanhmuc" id="txtDanhmuc"  placeholder="Danh mục" required>
                                                      <option value="volvo">Volvo</option>
                                                      <option value="saab">Saab</option>
                                                      <option value="mercedes">Mercedes</option>
                                                      <option value="audi">Audi</option>
                                                    </select>
                                             
                                                <div class="invalid-feedback">
                                                    Hãy nhập danh mục.
                                                </div>
                                            </div>
                                          
                        

                                        
                                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label  for="txtNoiDung">Nội dung </label>
                                <textarea class="form-control" id="txtNoiDung"  placeholder="Viết nội dung" style="width: 100%;"></textarea>
                            </div>
                                               


                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtDuong">Tên đường</label>
                                                <select style=" overflow-x: hidden;
    overflow-y: scroll;" class="form-control" name="txtDuong" id="txtDuong"  placeholder="Đường" required>
                                                      <option value="volvo">Volvo</option>
                                                      <option value="saab">Saab</option>
                                                      <option value="mercedes">Mercedes</option>
                                                     

                                                    </select>
                                             
                                                <div class="invalid-feedback">
                                                    Hãy nhập đường
                                                </div>
                                            </div>

                                            <div  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtTenMon">Số nhà</label>
                                                <input type="text" class="form-control" id="txtTenMon" placeholder="Tên món" required>
                                                <div class="invalid-feedback">
                                                    Hãy nhập tên món.
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtGiaTB">Giá trung bình</label>
                                                <input type="text" class="form-control" id="txtGiaTB" placeholder="VNĐ" required>
                                                <div class="invalid-feedback">
                                                    Hãy nhập giá.
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtGiaMax">Giá lớn nhất</label>
                                                <input type="text" class="form-control" id="txtGiaMax" placeholder="VNĐ" required>
                                                <div class="invalid-feedback">
                                                    Hãy nhập giá.
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtGiaMin">Giá tối thiểu</label>
                                                <input type="text" class="form-control" id="txtGiaMin" placeholder="VNĐ" required>
                                                <div class="invalid-feedback">
                                                    Hãy nhập giá.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">Ảnh minh họa</label>
                                                <input type="file" name="txtAnhMinhHoa" style="width: 100%">
                                            </div>
                                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                            </div>

                                        </div>
  
  <!--/ cuối tạo bài /-->
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ Contact End /-->




  
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
