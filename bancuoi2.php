<?php 
if ($_SESSION['user_id'] === '')
  session_start();

  if (!(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '')) {
?>
<script>
function myFunction() {

  document.getElementById("myDropdown2").classList.toggle("show");
}

</script>
<?php
}
  else
  {
?>
<script>
function myFunction() {

  document.getElementById("myDropdown1").classList.toggle("show");
}

</script>
<?php
}
;?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {
  font-family: 'Poppins', sans-serif;
  color: #5d4747;
  font-size: 15px;
}
 #i1
 {
  margin-top: 10px;
 }
    a,p {
      width: 120px;
  color: black;
  padding: 10px 20px;
  margin-left: auto; margin-right: auto;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown-content p:hover {background-color: #ddd;}
.dropdown {
  float: right;
  display: inline-block;
}

.dropdown-content {
  display: none;
 width: 180px; height: 300px;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.19);
      border-radius: 15px;
      position: absolute;
      margin-top:60px;
       background-color:white;
       overflow: auto;
       right: 0;
}

.show {display: block;}
</style>
</head>
<body>




  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown1" class="dropdown-content" style="z-index: 1;">
   <a id="i1" href="">Trang cá nhân</a>
    
    <a href="">Đăng bài</a>
    
    <a href="">Thông báo</a>
    <a href="">Đã lưu</a>

    <hr style="width: 148px;">
    <a href="">Tài khoản</a>
    
    <p style="margin: 0px 10px;">Ngôn ngữ</p>
    
    <a href="">Đăng xuất</a>
  </div>


  <div id="myDropdown2" class="dropdown-content" style="z-index: 2;height: 110px;">
   <a id="i1" href="">Đăng nhập</a>
    <hr>
    <a href="">Đăng ký</a>
  </div>
<h1><?php echo "id ng dùnghhhhh:<br/> " .(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '');
 ?></h1>

<h2>Aligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown ContentAligned Dropdown Content</h2>
<p>ngoc</p>
<a href="dang_xuat_nguoi_dung_thuc_hien.php"><button> đăng xuất</button></a>

</body>
</html>
