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
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện cập nhật tin tức</title>
</head>
<body>
	<?php
			// 1. KẾT NỐI ĐẾN CSDL
			$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

			// 2. Lấy ra ID của tin tức cần sửa
			$id_binh_luan = $_GET["id"];

			// 3. Lấy dữ liệu mong muốn
			$sql = "
				SELECT *
				FROM tbl_binh_luan
				WHERE id_binh_luan='".$id_binh_luan."'
			";

			// 4. Thực thi câu lệnh lấy ra dữ liệu mong muốn
			$noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

			// 5. Hiển thị dữ liệu lấy được lên màn hình
			$row = mysqli_fetch_array($noi_dung_tin_tuc);
			if($row["trang_thai"]==1)
			{
				$sql="UPDATE `tbl_binh_luan` SET `trang_thai` = '0' WHERE `tbl_binh_luan`.`id_binh_luan` = '".$id_binh_luan."'";
			}
			else
			{
				$sql="UPDATE `tbl_binh_luan` SET `trang_thai` = '1' WHERE `tbl_binh_luan`.`id_binh_luan` = '".$id_binh_luan."'";
			}
			mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		
		echo 
		"
			<script type='text/javascript'>
				window.location.href='quan_tri_binh_luan.php'
			</script>
		";
		;?>
</body>
</html>