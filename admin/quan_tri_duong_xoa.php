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
	<title>Thực hiện xóa đường</title>
</head>
<body>
	<?php
			// 1. KẾT NỐI ĐẾN CSDL
			$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

			// 2. Lấy ra ID của tin tức cần sửa
			$id_duong = $_GET["id"];

			// 3. Lấy dữ liệu mong muốn
			$sql = "
				SELECT id_duong
				FROM tbl_review
				WHERE id_duong='".$id_duong."'
			";

			// 4. Thực thi câu lệnh lấy ra dữ liệu mong muốn
			$noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

			// 5. Hiển thị dữ liệu lấy được lên màn hình
			$row = mysqli_fetch_array($noi_dung_tin_tuc);

			if ($row["id_duong"] != null) {
                            echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn không thể xoá');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='quan_tri_duong.php'
			</script>
		";
                          }
                          else
                          {
                            $ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

		// 2. Lấy ID của tin tức cần xóa
		$id_duong = $_GET["id"];

		// echo $id_tin_tuc; exit();
		// 3. Viết câu lệnh SQL để xóa tin tức có id thu được ở trên
		$sql = "
			DELETE FROM tbl_duong 
			WHERE `tbl_duong`.`id_duong` = '".$id_duong."'
		";

		// 4. Thực hiện truy vấn để xóa tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc xóa tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã xóa đường thành công!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='quan_tri_duong.php'
			</script>
		";
                          };
		;?>
</body>
</html>