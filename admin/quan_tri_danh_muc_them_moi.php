<?php 
    session_start();
    if (!$_SESSION['da_dang_nhap']) {
        # Đẩy người dùng về trang đăng nhập
        echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn không có quyền truy cập trang này! Vui lòng đăng nhập hệ thống!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='../admin/dang_nhap.php'
            </script>
        ";
    }
;?>
<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thêm danh mục</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php"><img src="../documentation/img/logoweb.png" style="width: 170px;height: auto;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Tìm kiếm..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Thông báo</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                        <?php
                // 1. KẾT NỐI ĐẾN CSDL
                $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                                            mysqli_set_charset($ket_noi, 'UTF8');


                // 2. Lấy dữ liệu mong muốn
                $sql = "
                    SELECT * FROM `tbl_gop_y` ORDER BY `id_gop_y` DESC
                ";

                // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
                $noi_dung = mysqli_query($ket_noi, $sql);

                //4. Hiển thị dữ liệu lấy được lên màn hình
                $i=0;
                while ($row = mysqli_fetch_array($noi_dung)) {
                    $i++;
            ;?>
                <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                                            <a href="quan_tri_thu_chi_tiet.php?id=<?php echo $row["id_gop_y"];?>" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    
                                                    <div style="padding: 0px 0px 0px 10px;" class="notification-list-user-block"><span class="notification-list-user-name"><?php echo $row["ho_ten"];?></span>đã gửi thư cho bạn
                                                        <div class="notification-date"><?php echo date("d/m/Y H:i:s",strtotime($row["ngay_gui"]));?></div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="quan_tri_thu.php">Xem tất cả thư</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="" class="connection-item"><img src="../img/fbb.png" alt="" > <span>Facebook</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="" class="connection-item"><img src="../img/insta.png" alt="" > <span>Insta</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="" class="connection-item"><img src="../img/mail.png" alt="" ><span>Mail</span></a>
                                        </div>
                                        
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Hoạt động</span>
                                </div>
                                <a class="dropdown-item" href="quan_tri_admin_sua"><i class="fas fa-user mr-2"></i>Tài khoản</a>
                                <a class="dropdown-item" href="dang_xuat_admin.php"><i class="fas fa-power-off mr-2"></i>Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Quản trị người dùng <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <!--  <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="index.php">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.php">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-single.php">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-checkout.php">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_admin.php">Quản trị admin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_nguoi_review.php">Quản trị người review</a>
                                        </li>
                                    <!--    <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard-influencer.php">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.php">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-profile.php">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>-->
                                    </ul>
                                </div>
                            </li>
                                 <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Quản trị bài đăng</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <!--<li class="nav-item">
                                            <a class="nav-link" href="pages/cards.php"> <span class="badge badge-secondary">New</span></a>
                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_bai_review.php">Quản trị bài review</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_danh_muc.php">Quản trị danh mục</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_duong.php">Quản trị đường</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_banner.php">Quản trị banner</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_youtube.php">Quản trị video</a>
                                        </li>
                                      <!---  <li class="nav-item">
                                            <a class="nav-link" href="pages/typography.php">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/accordions.php">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/tabs.php">Tabs</a>
                                        </li>-->
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Quản trị bình luận</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_binh_luan.php">Quản trị bình luận</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="quan_tri_rep_binh_luan.php">Quản trị trả lời bình luận</a>
                                        </li>
                                       <!-- <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-charts.php">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-morris.php">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-sparkline.php">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-gauge.php">Guage</a>
                                        </li>-->
                                    </ul>
                                </div>
                            </li>
                           <li class="nav-item ">
                                <a class="nav-link" href="quan_tri_thu.php" ><i class="fab fa-fw fa-wpforms"></i>Hộp thư</a>
                                
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"> Quản trị danh mục </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản trị bài đăng</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản trị danh mục</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Thêm mới danh mục</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Thêm mới danh mục</h5>
                                <div class="card-body">
                                    <form  method="POST" action="./quan_tri_danh_muc_them_moi_thuc_hien.php" enctype="multipart/form-data">
                                        <div class="row" style="font-family: 'Poppins', sans-serif;font-weight: bold;">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="txtTenDanhMuc">Tên danh mục</label>
                                                <input type="text" class="form-control" name="txtTenDanhMuc" placeholder="danh mục" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                    
                                        </div>
                                       <div class="form-row">
                                          
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">Ảnh minh họa</label>
                                                <input type="file"name="txtAnhMinhHoa" style="width: 100%;">
                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
                 <!--   <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                      <!--  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Basic Form</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>