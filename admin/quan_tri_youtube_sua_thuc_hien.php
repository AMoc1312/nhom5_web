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

	$id_youtube = $_POST["txtID"];
	//var_dump($id_youtube);exit();
 	$noi_dung = $_POST["txtNoiDung"];
    $Link = $_POST["txtLink"];
	$sql1 =  "
            SELECT id_youtube,noi_dung,link
            FROM  tbl_youtube
            WHERE id_youtube='" .$id_youtube. "'
        ";
    $row = mysqli_fetch_array(mysqli_query($ket_noi, $sql1));

    if (filter_var($Link, FILTER_VALIDATE_URL)) {
		$sql = "
			UPDATE `tbl_youtube`
			SET`noi_dung` = '".$noi_dung."',
				`link` = '".$Link."'
			WHERE `tbl_youtube`.`id_youtube` = '".$id_youtube."' 
			";
			//var_dump($sql);exit();
		mysqli_query($ket_noi, $sql);

		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật video thành công.');
				window.location.href = './quan_tri_youtube.php'
			</script>
		";

	}

 	else {
   	echo "Địa chỉ không hợp lệ";
   	echo "
			<script type='text/javascript'>
				window.location.href='javascript: history.go(-1)'
			</script>
		";
	}

;?>