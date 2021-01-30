<?php 

  session_start();
$ma_user =(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '');
;?>
<!DOCTYPE html>
<html>
<head>
  <title>Thực hiện them bình luận</title>
</head>
<body>
  <?php
    // 1. KẾT NỐI ĐẾN CSDL
    $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");


    // 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
    $id_rv = $_POST["txtIDrv"];
    $noi_dung = $_POST["txtBinhLuan1"];
    
    echo $ma_user;
    echo $id_rv;
    echo $noi_dung;
      $sql = "
      INSERT INTO `tbl_binh_luan` (`id_binh_luan`, `id_reviewer`, `id_review`, `noi_dung`, `ngay_them`, `trang_thai`) VALUES (NULL, '".$ma_user."', '".$id_rv."', '".$noi_dung."', current_timestamp(), '1')
      ";

    mysqli_query($ket_noi, $sql);

    // 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
    echo 
    "
      <script type='text/javascript'>
        window.alert('Bạn đã thêm bình luận thành công');
      </script>
    ";
    echo 
    "
      <script type='text/javascript'>
        window.location.href='review_chi_tiet.php?id=".$id_rv."'
      </script>
    ";
  ;?>
</body>
</html>