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
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");

		// 2. Lấy ID của tin tức cần xóa
		$id_quan_tri = $_GET["id"];

		// echo $id_tin_tuc; exit();
		// 3. Viết câu lệnh SQL để xóa tin tức có id thu được ở trên
		$sql = "
			DELETE FROM `tbl_user_admin` 
			WHERE `tbl_user_admin`.`id_quan_tri` = '".$id_quan_tri."'
		";

		// 4. Thực hiện truy vấn để xóa tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc xóa tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Tài khoản đã bị xóa!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='./quan_tri_admin.php'
			</script>
		";
		
	;?>