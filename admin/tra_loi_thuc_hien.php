
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
			$id_gop_y = $_GET["id"];

			// 3. Lấy dữ liệu mong muốn
			$sql = "
				SELECT *
				FROM tbl_gop_y
				WHERE id_gop_y='".$id_gop_y."'
			";

			// 4. Thực thi câu lệnh lấy ra dữ liệu mong muốn
			$noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

			// 5. Hiển thị dữ liệu lấy được lên màn hình

				$sql="UPDATE `tbl_gop_y` SET `trang_thai` = '1' WHERE `tbl_gop_y`.`id_gop_y` = '".$id_gop_y."'";
			
			mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		
		echo 
		"
			<script type='text/javascript'>
				window.location.href='quan_tri_thu.php'
			</script>
		";
		;?>
</body>
</html>