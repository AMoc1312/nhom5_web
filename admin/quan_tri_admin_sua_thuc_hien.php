<?php 
	session_start();
	if (!$_SESSION['da_dang_nhap']) {
		# Đẩy người dùng về trang đăng nhập
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn không có quyền truy cập trang này! Vui lòng đăng nhập hệ thống!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='../admin/dang_nhap.php'
			</script>
		";
	}
;?>
<?php 
	$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
    mysqli_set_charset($ket_noi, 'UTF8');

	$id_quan_tri = $_POST["txtID"];
 	$ho_ten = $_POST["txtHoTen"];
    $tai_khoan = $_POST["txtTenDangNhap"];
    $mat_khau = $_POST["txtPassword"];

    $anh_minh_hoa = "../img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
    $file_anh_tam =  $_FILES["txtAnhMinhHoa"]["tmp_name"];
    $result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
    //echo $phan_loai;exit();
    if(!$result) {
            $anh_minh_hoa = NULL;
        }

    // 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
	if($anh_minh_hoa == NULL) {
			$sql = "
			UPDATE `tbl_user_admin`
			SET
				`ten` = '".$ho_ten."',
				`ten_dang_nhap` = '".$tai_khoan."',
				`pass` = '".$mat_khau."'
			WHERE `tbl_user_admin`.`id_quan_tri` = '".$id_quan_tri."' 
			";
	} else {
			$sql = "
			UPDATE `tbl_user_admin`
			SET
				`ten` = '".$ho_ten."',
				`ten_dang_nhap` = '".$tai_khoan."',
				`pass` = '".$mat_khau."',
				`anh_dai_dien` = '".$anh_minh_hoa."'
			WHERE `tbl_user_admin`.`id_quan_tri` = '".$id_quan_tri."' 
			";
	}
	//echo $sql;exit();
	mysqli_query($ket_noi, $sql);


		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật tài khoản thành công.');
			</script>
		";

		echo 
		"
			<script type='text/javascript'>
				window.location.href = './quan_tri_admin.php'
			</script>
		";
;?>