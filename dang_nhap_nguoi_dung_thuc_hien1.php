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
  $noi_dung = mysqli_num_rows($nguoi_dung);

  //echo "<br/><br/> Số lượng người dùng: ".$noi_dung;

  // 4. Điều hướng người dùng về trang họ được phép truy cập
  if ($noi_dung ==0) {
    # Đẩy người dùng về trang đăng nhập
    echo 
    "
      <script type='text/javascript'>
        window.alert('Thông tin đăng nhập không chính xác!  Bạn vui lòng thử lại.');
      </script>
    ";
    echo 
    "
      <script type='text/javascript'>
       window.location.href='javascript: history.go(-1)'
      </script>
    ";
  } else {
    # Khởi tạo phiên làm việc cho người đăng nhập thành công
    session_start();
    $_SESSION["user_id"]=$noi_dung["id_reviewer"];
    echo "<br/><br/> Số lượng người dùng: ".$_SESSION["user_id"];
    # Đẩy người dùng về trang quản trị hệ thống
    echo 
    "
      <script type='text/javascript'>
        window.alert('Đăng nhập thành công. Chào mừng bạn!');
      </script>
    ";
    echo 
    "
      <script type='text/javascript'>
        window.location.href='trangrong.php'
      </script>
    ";
    
  }

;?>