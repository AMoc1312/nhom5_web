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

 // echo "id ng dùng:<br/> ".$so_luong_nguoi_dung["id_reviewer"];

  // 4. Điều hướng người dùng về trang họ được phép truy cập
         if($so_luong_nguoi_dung==0)
         {          
         //đẩy người dùng về trang đăng nhâpk
          echo "
          <script type='text/javascript'>
          window.alert('thông tin không chính xác');
          </script>


          ";
          echo "
          <script type='text/javascript'>
          window.location.href='javascript: history.go(-1)'
          </script>


          ";
         } else {
          
          //đẩy người dùng về trang quản trị
          session_start();
$_SESSION["user_id"]=$so_luong_nguoi_dung["id_reviewer"];
  
          echo "
          <script type='text/javascript'>
          window.alert('Bạn đã đăng nhập thành công')
          </script>


          ";
echo 
    "
      <script type='text/javascript'>
        window.location.href='lien-he.php'
      </script>
    ";
        
         
         }

;?>
