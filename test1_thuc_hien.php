<?php 

  session_start();
$ma_user =(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '');
;?>
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện thêm mới</title>
</head>
<body>
	<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                mysqli_set_charset($ket_noi, 'UTF8');
		// 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
                $ten_mon=$_POST["txtTenMon"];
                $noi_dung=$_POST["txtNoiDung"];
                $diem=$_POST["txtDiem"];
                $gia_tb=$_POST["txtGiaTB"];
                $gia_min=$_POST["txtGiaMin"];
                $gia_max=$_POST["txtGiaMax"];
                $danh_muc=$_POST["txtDanhMuc"];
                $duong=$_POST["txtDuong"];
                $gio_mo=$_POST["txtGioMo"];
                $gio_dong=$_POST["txtGioDong"];
                $so_nha=$_POST["txtSoNha"];
                
   $anh_minh_hoa = "../img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
    $file_anh_tam =  $_FILES["txtAnhMinhHoa"]["tmp_name"];
    $result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
    //echo $phan_loai;exit();
    if(!$result) {
            $anh_minh_hoa = NULL;
        }


                echo $duong;
                echo $danh_muc;
    //echo $phan_loai;exit();

     
		//$ten_duong = $_POST["txtTenDuong"];

		// 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
		$sql = "
            INSERT INTO `tbl_review` (`id_review`, `id_reviewer`, `id_danh_muc`, `id_duong`, `so_nha`, `gio_mo_cua`, `gio_dong_cua`, `ten_mon`, `noi_dung`, `diem`, `gia_tb`, `gia_min`, `gia_max`, `anh_minh_hoa`, `ngay_dang`, `luot_xem`) VALUES (NULL, '".$ma_user."', '".$danh_muc."', '".$duong."', '".$so_nha."', '".$gio_mo."', '".$gio_dong."', '".$noi_dung."', '".$diem."', '".$gia_tb."', '".$gia_min."', '".$gia_max."', '".$anh_minh_hoa."', current_timestamp(), '0');
        ";

		// echo $sql; exit();

		// 4. Thực hiện truy vấn để thêm mới tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã thêm bài đăng thành công!');
			</script>
		";
		//echo 
//
			//<script type='text/javascript'>
				//window.location.href='../admin/quan_tri_bai_review.php'
		//	//</script>
	//	";
	;?>
</body>
</html>