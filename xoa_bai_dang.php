<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

		// 2. Lấy ID của tin tức cần xóa
		$id_review = $_GET["id"];

		// echo $id_tin_tuc; exit();
		// 3. Viết câu lệnh SQL để xóa tin tức có id thu được ở trên
		$sql = "
			DELETE FROM `tbl_review` 
			WHERE `tbl_review`.`id_review` = '".$id_review."'
		";

		// 4. Thực hiện truy vấn để xóa tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc xóa tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bài review đã bị xóa!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='review.php'
			</script>
		";
		
	;?>