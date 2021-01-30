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

    $ten_danh_muc = $_POST["txtTenDanhMuc"];
    $anh_minh_hoa = "../img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
    $file_anh_tam =  $_FILES["txtAnhMinhHoa"]["tmp_name"];
    $result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
    //echo $phan_loai;exit();
    if(!$result) {
            $anh_minh_hoa = NULL;
        }

    // 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
    $sql = "INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`, `anh_minh_hoa`) VALUES (NULL, '".$ten_danh_muc."', '".$anh_minh_hoa."');;
        ";
    //echo $sql;exit();
    mysqli_query($ket_noi, $sql);

    echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã thêm mới tài khoản thành công.');
            </script>
        ";

       echo 
		"
			<script type='text/javascript'>
				window.location.href='quan_tri_danh_muc.php'
			</script>
		";
;?>