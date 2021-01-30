
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện xóa bình luận</title>
</head>
<body>
	<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

		// 2. Lấy ID của tin tức cần xóa
		$id_bl = $_GET["id_cmt"];
		$id_rv = $_GET["id"];
		echo $id_bl;
		// echo $id_tin_tuc; exit();
		// 3. Viết câu lệnh SQL để xóa tin tức có id thu được ở trên
		$sql = "
			DELETE FROM `tbl_binh_luan` 
			WHERE `tbl_binh_luan`.`id_binh_luan` = '".$id_bl."'
		";

		// 4. Thực hiện truy vấn để xóa tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc xóa tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã xóa bài viết thành công!');
			</script>
		";
		 
	;?>
</body>
</html>