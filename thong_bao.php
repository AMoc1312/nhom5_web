<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thông báo</title>
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" >
$(document).ready(function()
{
$("#notificationLink").click(function()
{
$("#notificationContainer").fadeToggle(300);
$("#notification_count").fadeOut("slow");
return false;
});

//Document Click
$(document).click(function()
{
$("#notificationContainer").hide();
});
//Popup Click
$("#notificationContainer").click(function()
{
return false
});

});
</script>
<style>
body{background-color:#dedede;font-family:arial}
#nav{list-style:none;margin: 0px;
padding: 0px;}
#nav li {
float: left;
margin-right: 20px;
font-size: 14px;
font-weight:bold;
}
#nav li a{color:#333333;text-decoration:none}
#nav li a:hover{color:#006699;text-decoration:none}
#notification_li{position:relative}
#notificationContainer {
background-color: #faf2f2;
border: 1px solid rgba(100, 100, 100, .4);
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
overflow: visible;
position: absolute;
top: 30px;
margin-left: -170px;
width: 400px;
z-index: -1;
display: none;
}
#notificationContainer:before {
content: '';
display: block;
position: absolute;
width: 0;
height: 0;
color: brown;
border: 10px solid black;
border-color: transparent transparent brown;
margin-top: -20px;
margin-left: 188px;
}
#notificationTitle {
z-index: 1000;
/*font-weight: bold;*/
padding: 8px;
font-size: 13px;
background-color: #e9eaed;
width: 384px;
border-bottom: 1px solid #dddddd;
font-size: 20px;
}
#notificationsBody {
padding: 30px 0px 0px 0px !important;
min-height:300px;
}
#notificationFooter {
background-color: #e9eaed;
text-align: center;
font-weight: bold;
padding: 8px;
font-size: 12px;
border-top: 1px solid #dddddd;
}
#notification_count {
padding: 3px 7px 3px 7px;
background: #cc0000;
color: #ffffff;
font-weight: bold;
margin-left: 77px;
border-radius: 9px;
position: absolute;
margin-top: -11px;
font-size: 11px;
}
</style>
</head>

<body >
<div style="margin:0 auto; padding : 10px;width:900px ;color: brown ;font-family: 'Poppins', sans-serif; ">
<ul id="nav">
<li id="notification_li">
 <?php
                // 1. KẾT NỐI ĐẾN CSDL
                $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                 mysqli_query($ket_noi, "SET NAMES 'UTF8'");
   //               $id_reviewer = $_GET["id"];
           $sql="
      SELECT COUNT(tbl_binh_luan.id_binh_luan) + COUNT(tbl_rep_binh_luan.id_rep),tbl_binh_luan.id_review FROM tbl_binh_luan INNER JOIN tbl_rep_binh_luan ON tbl_binh_luan.id_binh_luan= tbl_rep_binh_luan.id_binh_luan GROUP BY tbl_binh_luan.id_review, tbl_rep_binh_luan.id_review ";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
  $i=0;
        while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>
            

<span id="notification_count"> <?php echo $row["COUNT(tbl_binh_luan.id_binh_luan) + COUNT(tbl_rep_binh_luan.id_rep)"];?><!-- ĐẾM SỐ THÔNG BÁO--></span> <?php
        }
      ;?>
<a href="#" id="notificationLink">Thông báo</a>
<div id="notificationContainer">
<div id="notificationTitle">Thông báo</div>
<div id="notificationsBody" class="notifications">
<!--<div class="notificationBadge--messageItem sc-text-light" style="text-align: center; font-family: Comic Sans MS"> Bạn không có thông báo nào </div>-->
                                        <div class="list-group" style="line-height: 20px;">

                        

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

                <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                                         <a href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    
                                                    <div style="padding: 0px 0px 0px 10px;" class="notification-list-user-block"><span class="notification-list-user-name"> <?php echo $row["ten_dang_nhap"];?> </span> đã bình luận bài  <span>  "<?php echo $row["ten_mon"];?>" </span>  của bạn
                                                                        
                                                        <div class="notification-date"><?php echo date("d/m/Y ",strtotime($row["ngay_them"]));?></div>  <hr>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>

                                        <?php
                // 1. KẾT NỐI ĐẾN CSDL
                $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                 mysqli_query($ket_noi, "SET NAMES 'UTF8'");
           $sql="
       SELECT tbl_user_reviewer.ten_dang_nhap, tbl_rep_binh_luan.id_reviewer, tbl_binh_luan.id_review, 'ngay_rep' FROM tbl_user_reviewer INNER JOIN tbl_rep_binh_luan ON tbl_user_reviewer.id_reviewer=tbl_rep_binh_luan.id_reviewer INNER JOIN tbl_binh_luan ON tbl_rep_binh_luan.id_binh_luan= tbl_binh_luan.id_binh_luan";

        // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

        //4. Hiển thị dữ liệu lấy được lên màn hình
        $i=0;
        while ( $row = mysqli_fetch_array($noi_dung_tin_tuc)) {
          $i++;
      ;?>

                <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                                         <a href="review_chi_tiet.php?id=<?php echo $row["id_review"];?>" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    
                                                    <div style="padding: 0px 0px 0px 10px;" class="notification-list-user-block"><span class="notification-list-user-name"> <?php echo $row["ten_dang_nhap"];?> </span> đã trả lời bình luận của bạn
                                                                        
                                                        <div class="notification-date"><?php echo date("d/m/Y ",strtotime($row["ngay_rep"]));?></div>  <hr>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>
                                <a href="review.php">ngo</a>          
         </div>                           
</div>
<div id="notificationFooter"  ><a href="review.php">Xem tất cả</a></div>
</div>
</li>
</ul>

</div>
 <a href="review.php">ngo</a>   
</body>
</html>
