<!DOCTYPE html>
<html>
<head>
  <title>Thực hiện góp ý</title>
</head>
<body>
  <?php
    // 1. KẾT NỐI ĐẾN CSDL
    $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

    // 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
    $ten = $_POST["txtTen"];
    $email = $_POST["txtEmail"];
    $chu_de = $_POST["txtChuDe"];
    $noi_dung = $_POST["txtNoiDung"];

    // 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
    $sql = "
      INSERT INTO `tbl_gop_y` (`id_gop_y`, `ho_ten`, `email`, `tieu_de`, `noi_dung`) VALUES (NULL, '".$ten."', '".$email."', '".$chu_de."', '".$noi_dung."'); 
    ";

    // 4. Thực hiện truy vấn để thêm mới tin tức
    mysqli_query($ket_noi, $sql);

    // 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
    echo 
    "
      <script type='text/javascript'>
        window.alert('Gửi thư thành thành công. Cảm ơn bạn rất nhiều!');
      </script>
    ";
    echo 
    "
      <script type='text/javascript'>
        window.location.href='lien-he.php'
      </script>
    ";
  ;?>
</body>
</html>