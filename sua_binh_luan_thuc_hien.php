
<!DOCTYPE html>
<html>
<head>
  <title>Thực hiện cập nhật bình luận</title>
</head>
<body>
  <?php
    // 1. KẾT NỐI ĐẾN CSDL
    $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

    // 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
    $id_bl= $_POST["txtIDcmt"];
    $id_rv = $_POST["txtIDrv"];
    $noi_dung = $_POST["txtBinhLuan3"];
    echo $id_bl;
    echo $id_rv;
    echo $noi_dung;
      $sql = "
      UPDATE `tbl_binh_luan` SET `noi_dung` = '".$noi_dung."' WHERE `tbl_binh_luan`.`id_binh_luan` = '".$id_bl."' 
      ";

    mysqli_query($ket_noi, $sql);

    // 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
    echo 
    "
      <script type='text/javascript'>
        window.alert('Bạn đã sửa bình luận thành công');
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