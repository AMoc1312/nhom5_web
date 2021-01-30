<?php 
  // 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang
  $ten_dang_nhap = $_POST["txtTaiKhoan"];
  $mat_khau = $_POST["txtMatKhau"];
  //echo "Tài khoản: ".$ten_dang_nhap." ; Mật khẩu: ".$mat_khau;

  // 2. KẾT NỐI ĐẾN CSDL
  $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

  // 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
  $sql = "
    SELECT *
    FROM tbl_user_reviewer
    WHERE ten_dang_nhap='".$ten_dang_nhap."' AND pass='".$mat_khau."'
  ";

  // 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
  $nguoi_dung = mysqli_query($ket_noi, $sql);
  $so_luong_nguoi_dung = mysqli_fetch_array($nguoi_dung);

  echo "<br/> Số lượng người dùng:<br/> ".$so_luong_nguoi_dung["id_reviewer"];

  // 4. Điều hướng người dùng về trang họ được phép truy cập
session_start();
$_SESSION["user_id"]=$so_luong_nguoi_dung["id_reviewer"];

	if (!$_SESSION['user_id']) {
		# Đẩy người dùng về trang đăng nhập
		echo ("hi 2");
	}
	else
	{
		echo ("hi 3");
	}
    # Đẩy người dùng về trang quản trị hệ thống


 

;?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p id="ngoc"> hi</p>
</body>
</html>