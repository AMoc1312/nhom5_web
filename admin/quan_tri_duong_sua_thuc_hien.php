s<?php 
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
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện cập nhật</title>
	
</head>
<body>
	<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
                 mysqli_set_charset($ket_noi, 'UTF8');
		// 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
		$id_duong = $_POST["txtID"];
		$ten_duong = $_POST["txtTenDuong"];

		// 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
			$sql = "
				UPDATE `tbl_duong` SET `ten_duong`='".$ten_duong."' WHERE `tbl_duong`.`id_duong` = '".$id_duong."'
			";

		// echo $sql; exit();

		// 4. Thực hiện truy vấn để thêm mới tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật tên đường thành công!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='quan_tri_duong.php'
			</script>
		";
	;?>
</body>
</html>