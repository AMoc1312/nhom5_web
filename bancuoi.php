<?php 

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
<script type="text/javascript">
  function goiTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "block";
                         }
   function tatTb() {
                  var x = document.getElementById("myThongBao");
                           x.style.display = "none";
                         }
</script>



  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown1" class="dropdown-content" style="z-index: 1;">
   <a id="i1" href="">Trang cá nhân</a>
    
    <a href="">Đăng bài</a>
    
    <button onclick="goiTb()">Thong bao</button>
    <a href="">Đã lưu</a>

    <hr style="width: 148px;">
    <a href="">Tài khoản</a>
    
    <p style="margin: 0px 10px;">Ngôn ngữ</p>
    
    <a href="">Đăng xuất</a>
  </div>
  <div id="myThongBao"  style=" display: none; 
 width: 300px; height: auto;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.19);
      border-radius: 8px;
      position: absolute;
      margin-top:180px;
       background-color:white;
       overflow: auto;
       right: 180px;;z-index: 3;">
    <h3 style="padding:  14px 15px;text-align: center;background-color: #ddd; margin: 0px;color: black;">Thông báo <button onclick="tatTb()" style="float:right;background-color: #ddd;border-width: 0px;"><img style="width: 15px;" src="img/cancel.png"></button></h3>
   
   <hr style="margin: 0px;">
   <div style="height: 250px; overflow-y: scroll; overflow-x: hidden;">
   <?php
                // 1. KẾT NỐI ĐẾN CSDL
                $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                 mysqli_query($ket_noi, "SET NAMES 'UTF8'");
           $sql="
        SELECT  tbl_user_reviewer.ten_dang_nhap, tbl_binh_luan.id_reviewer, tbl_review.ten_mon, tbl_binh_luan.id_review ,'ngay_them' FROM tbl_binh_luan INNER JOIN tbl_user_reviewer ON tbl_binh_luan.id_reviewer=tbl_user_reviewer.id_reviewer INNER JOIN tbl_review ON tbl_binh_luan.id_review=tbl_review.id_review";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ( $row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>

   <div style="padding: 10px;"><a href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>" style="color:#5d4747;padding: 0px;margin: 0px;width: 270px;"><span ><strong><?php echo $row["ten_dang_nhap"];?></strong></span> đã bình luận về bài viết "<strong><?php echo $row["ten_mon"];?></strong>" của bạn vào lúc
                                                        <?php echo date("d/m/Y ",strtotime($row["ngay_them"]));?></a>
 <hr style="margin: 0px;">
                                                    </div>
                                                    <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>
  </div>
  </div>
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
<a href="bancuoi2.php"><button> bản cuối</button></a>
</body>
</html>