

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
    .ed {
  background-color: white;
  border-color: #e6e6f2;
  border-style: solid;
  border-width: 0.1px;
  display: block;
  padding: 5px 12px;
  font-size: 12px;
  color: red;
  border-radius: 4px;
}

.ed:hover {background-color: #ddd; color:red;}
@media only screen and (max-width: 740px)
{
  #noidung
  {
    width: 345px;
  }
  .comment-details
  {
    width: 240px;
  }

}
@media only screen and (min-width: 740px) and (max-width: 1024px)
{
  #noidung
  {
    width: 270px;
  }
  .comment-details
  {
    width: 465px;
  }

}
@media only screen   
and (min-width: 1200px)  
and (max-width: 1605px)   {
    #noidung
  {
    width: 550px;
  }
  .comment-details
  {
    width: 813px;
  }
}
  </style>
</head>

<body >

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
      <?php
      // 1. KẾT NỐI ĐẾN CSDL
      $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

      // 2. Lấy ra ID của tin tức cần sửa
      $id_rv = $_GET["id"];

      // 3. Lấy dữ liệu mong muốn
      $sql = "
        SELECT tbl_user_reviewer.ten_dang_nhap, tbl_duong.ten_duong,tbl_review.id_reviewer,`id_review`,`so_nha`,`gio_mo_cua`,`gio_dong_cua`,`ten_mon`,`noi_dung`,`diem`,`gia_tb`,`gia_min`,`gia_max`,`anh_minh_hoa`,`ngay_dang`,`luot_xem` FROM `tbl_review` INNER JOIN tbl_user_reviewer ON tbl_review.id_reviewer=tbl_user_reviewer.id_reviewer INNER JOIN tbl_duong ON tbl_duong.id_duong=tbl_review.id_duong WHERE id_review='".$id_rv."'
      ";
      $sql3 = "
       SELECT COUNT(`id_binh_luan`) FROM `tbl_binh_luan` WHERE `id_review`  ='".$id_rv."'
      ";
     
      $view = "
              UPDATE `tbl_review` SET `luot_xem` = `luot_xem`+1 WHERE `tbl_review`.`id_review`='".$id_rv."'
              ";
              mysqli_query($ket_noi, $view);
      // 4. Thực thi câu lệnh lấy ra dữ liệu mong muốn
      $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);
      $noi_dung_tin_tuc3 = mysqli_query($ket_noi, $sql3);
      // 5. Hiển thị dữ liệu lấy được lên màn hình
      $row = mysqli_fetch_array($noi_dung_tin_tuc);
      $row3 = mysqli_fetch_array($noi_dung_tin_tuc3);
    ;?>
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
          <!-- ĐIỀN TÊN NGƯỜI DÙNG-->

           <a href="blog_ca_nhan.php?id=<?php echo $row["id_reviewer"];?>"><h3 class="title-single" style="font-size: 30px;">@<?php echo $row["ten_dang_nhap"];?></h3></a> 
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Trang chủ</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Review</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Review chi tiết
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="img/doan/<?php echo $row["anh_minh_hoa"];?>" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div  class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d" style="font-size: 40px;"><?php echo $row["ten_mon"];?> (<?php echo $row["luot_xem"];?> view)</h3>
                  </div>
                </div>
                <div id="noidung" class="agent-content mb-3" >
                  <p class="content-d color-text-a">
                    <?php echo $row["noi_dung"];?>
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Ngày đăng: </strong>
                      <span class="color-text-a"><?php echo date("d/m/Y",strtotime($row["ngay_dang"]));?></span>
                    </p>
                    <p>
                      <strong>Địa chỉ: </strong>
                      <span class="color-text-a"><?php echo $row["so_nha"];?> <?php echo $row["ten_duong"];?>, Đống Đa, Hà Nội</span>
                    </p>
                    <p>
                      <strong>Giá: </strong>
                      <span class="color-text-a"><?php
                          if ($row["gia_tb"] != null) {
                            echo $row["gia_tb"];
                          }
                          else
                          {
                            echo $row["gia_min"]." - ".$row["gia_max"];
                          };
                          ?> VNĐ</span>
                    </p>
                      
                      <p>
                      <strong>Giờ mở cửa: </strong>
                      <span class="color-text-a"><?php echo date("H:i",strtotime($row["gio_mo_cua"]));?> - <?php echo date("H:i",strtotime($row["gio_dong_cua"]));?></span>
                    </p>
                    <p>
                      <strong> Đánh giá: </strong>
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
</div>
                    </p>
                  </div>
                </div>

              </div>
            </div>
            
            <!-- đầu commnent -->
            <div style="padding-top: 60px;padding-bottom: 60px;" class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
          <div class="title-box-d">
            <h3 class="title-d">Comments (<?php echo $row3["COUNT(`id_binh_luan`)"];?>)</h3>
          </div>
          <div class="box-comments" style="max-height: 500px; overflow-y: auto;">
            <ul class="list-comments">
            <div style=" width: 100%;height:auto; border-width: 0px;margin-top: 10px;margin-bottom: 50px;padding-right: 20px;position: -webkit-sticky;position: sticky;top:0px;background-color: white;">
            <form method="POST" action="./quan_tri_tin_tuc_them_moi_thuc_hien.php" enctype="multipart/form-data">
                  <textarea name="txtBinhLuan" placeholder="Nhập bình luận..." required value=""  style="padding: 15px;width: 100%;border-style: solid;border-width: 0.1px; border-radius: 20px;clear: both;"></textarea>
                  <button type="submit" style="float:right;z-index: -1;font-size:14px; padding: 5px 15px;background-color: #ccb7b0;" class="ed"  ><a href="">Gửi</a></button>
                  </form></div>
                  <!-- đầu commnent to -->
              <li style="padding-bottom: 5px;"> 
              <script >

                  function goicmt() {
                  var x = document.getElementById("mocmt");
                         
                          if (x.style.display === "none") {
                           x.style.display = "block";
                         } else {
                           x.style.display = "none";
                         }
                         
                        }
                  </script>
                  <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

        // 2. Lấy dữ liệu mong muốn
        $sql1 = "
           SELECT * FROM `tbl_binh_luan` INNER JOIN tbl_user_reviewer ON tbl_binh_luan.id_reviewer=tbl_user_reviewer.id_reviewer WHERE `id_review` = '".$id_rv."' ORDER BY `id_binh_luan` ASC
        ";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc1 = mysqli_query($ket_noi, $sql1);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ($row1 = mysqli_fetch_array($noi_dung_tin_tuc1)) {
          $i++;
      ;?>
        <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                <div class="comment-avatar">
                  <img src="img/author-2.jpg" alt="">
                </div>
                <div class="comment-details">

                
                  <h4 class="comment-author"><?php echo $row1["ten_dang_nhap"];?></h4>
                  
                
                  <span style="font-size: 14px;"><?php echo date("d M Y H:i:s",strtotime($row1["ngay_them"]));?></span>
                  <div style="float: right;padding-right: 20px;">
                    
                <button style="float: left;" class="ed"  ><a href="">Edit</a></button>
                <button  style="float: left;" class="ed" ><a href=""><img style="width:16px; " src="img/delete.cmt.png"></a></button>
                  </div>
                  <p style="clear:both;padding-top: 0px;" class="comment-description">
                   <?php echo $row1["noi_dung"];?>
                  </p>
                  <button  style="font-size: 16px; color:black;border-style: solid;border-width: 0px;background-color: white;" >Trả lời</button>
                  
                  <div id="mocmt" style=" width: 100%;height:auto; border-width: 0px;margin-top: 10px;padding-right: 20px;">
                  <textarea name="txtBinhLuan" placeholder="Nhập bình luận..." required value=""  style="padding: 15px;width: 100%;height:60px;border-style: solid;border-width: 0.1px; border-radius: 20px;clear: both;"></textarea>

                  <button style="float:right;z-index: -1;font-size:14px; padding: 5px 15px;background-color: #ccb7b0;" class="ed"  ><a href="">Gửi</a></button></div>
                  
                </div>
              </li> 
              <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->

                 <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

        // 2. Lấy dữ liệu mong muốn
        $sql2 = "
           SELECT * FROM `tbl_rep_binh_luan` INNER JOIN tbl_user_reviewer ON tbl_rep_binh_luan.id_reviewer=tbl_user_reviewer.id_reviewer WHERE `id_binh_luan`='".$row1["id_binh_luan"]."' ORDER BY id_rep DESC
        ";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc2 = mysqli_query($ket_noi, $sql2);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ($row2 = mysqli_fetch_array($noi_dung_tin_tuc2)) {
          $i++;
      ;?>
        <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
              
              <li style="padding-bottom:  0px;" class="comment-children"> <!-- đầu rep commnent -->
                <div class="comment-avatar">
                  <img src="img/author-1.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author"><?php echo $row2["ten_dang_nhap"];?></h4>
                  <span style="font-size: 14px;"><?php echo date("d M Y H:i:s",strtotime($row1["ngay_them"]));?></span>
                  <div style="float: right;padding-right: 20px;">
                    
                <button style="float: left;" class="ed"  ><a href="">Edit</a></button>
                <button  style="float: left;" class="ed" ><a href=""><img style="width:16px; " src="img/delete.cmt.png"></a></button>
                  </div>
                  <p class="comment-description">
                    <?php echo $row2["noi_dung"];?>
                  </p>
                </div>
              </li> <!-- cuối rep commnent -->
               
             <!-- cuối commnent to -->
                     <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
 
      <?php
        }
      }
      ;?>
             
            </ul>
          </div>
        </div>
            <!-- cuối commnent -->
          </div>

        </div>
        <div style="padding-top: 8px;" class="col-md-12 section-t8">
          <div class="title-box-d">
            <h3 class="title-d"> Món khác (3)</h3>
          </div>
        </div>
        <div class="row property-grid grid">
          <div class="col-sm-12">
           <div class="title-link" style="text-align: right";>
              <a href="review.php"> <strong>Tất cả review</strong>
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
          <?php
        // 1. KẾT NỐI ĐẾN CSDL
        $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

        // 2. Lấy dữ liệu mong muốn
        $sql = "
          SELECT * FROM `tbl_review`  ORDER BY  RAND() LIMIT 3
        ";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>
       <!--cuối kết nối-->
        <div  class="col-md-4">
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
                      <span>&nbsp;&nbsp;<img style="width: 20px;" src="img/eye.png">&nbsp;&nbsp;<?php echo $row["luot_xem"];?></span>
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
        </div>
      </div>
    </div>
  </section>
  <!--/ Agent Single End /-->
<!--BẮT ĐẦU FOOTER-->
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
                    <i class="fa fa-angle-right"></i> <a href="#">Giới thiệu website</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Chính sách bảo mật</a>
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
                  <i class="fa fa-angle-right"></i> <a href="#">Hướng dẫn tạo tài khoản</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Hướng dẫn tạo mật khẩu mới</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Nguyên tắc đăng bài</a>
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
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
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
