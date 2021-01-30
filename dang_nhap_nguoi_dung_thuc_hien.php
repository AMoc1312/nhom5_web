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

  echo "id ng dùng:<br/> ".$so_luong_nguoi_dung["id_reviewer"];

  // 4. Điều hướng người dùng về trang họ được phép truy cập
session_start();
$_SESSION["user_id"]=$so_luong_nguoi_dung["id_reviewer"];
echo "id ng dùnghhhhh:<br/> " .$_SESSION["user_id"];

echo 
    "
      <script type='text/javascript'>
        window.location.href='trangrong.php'
      </script>
    ";
	if (!$_SESSION['user_id']) {
?>
<style type="text/css"> #dadn {
display:none;} #chuadn {
display:block;
}</style>
<?php
}
	else
	{
?>
<style type="text/css"> #dadn {
display:block; }
#chuadn {
display:none;
}</style>
<?php
}
    # Đẩy người dùng về trang quản trị hệ thống


 

;?>
<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <style type="text/css">
   body {
  font-family: 'Poppins', sans-serif;
  color: #5d4747;
  font-size: 15px;
}
    .tk
    {
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.19);
      border-radius: 15px;
      position: relative;
      width: 180px; height: 300px;
      margin-right: 20px; margin-top: 10px;
      float:right;clear:both;
      z-index: 1;
    }

   
    a,p {
  color: black;
  padding: 10px;
  text-decoration: none;
  display: block;
}

a:hover {background-color: #ddd;}
p:hover {background-color: #ddd;}
  </style>
</head>
<body>
<!--đầu tài khoản-->

      <div style="float:right; display: block;">
          <img onclick="taikhoan()" style="width: 40px; margin: 10px;" src="img/user1.png">
        </div>

    <!--cuối tài khoản-->
<div class="tk " id="dadn">
  <div style=" left: 0px; right: 0px; width: 150px;margin: 15px auto; position: absolute;">
    
    <a href="">Trang cá nhân</a>
    
    <a href="">Đăng bài</a>
    
    <a href="">Thông báo</a>
    <a href="">Đã lưu</a>

    <hr>
    <a href="">Tài khoản</a>
    
    <p style="margin: 0;">Ngôn ngữ</p>
    
    <a href="">Đăng xuất</a>
  </div>
  </div>
  
<div class="tk" style="width: 180px; height: 120px;" id="chuadn" >
  <div style=" left: 0px; right: 0px; width: 150px;margin: 15px auto; position: absolute;">
  <a href="">Đăng nhập</a>
    <hr>
    <a href="">Đăng ký</a>
    <p></p>
  </div>
  </div>

</div>

</body>
</html>