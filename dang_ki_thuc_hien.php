<?php
//KIỂM TRA
$ket_noi = mysqli_connect("localhost", "root", "", "n5");
mysqli_set_charset($ket_noi, 'UTF8');
	// 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang
    $ho_va_ten = $_POST["txtHoTen"];
    $ten_dang_nhap = $_POST["txtTenDangNhap"];
    $email = $_POST["txtEmail"];
    $mat_khau = $_POST["txtMatKhau"];
    $nhap_lai_mat_khau = $_POST["txtNhapLaiMatKhau"];
    //Kiểm tra nguoi dùng đã nhập liệu đầy đủ chưa
    if (!$ho_va_ten || !$ten_dang_nhap || !$email || !$mat_khau || !$nhap_lai_mat_khau )
    {
        echo "
        <script type='text/javascript'>
            window.alert('Vui lòng nhập đầy đủ thông tin!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }
    else
    {
    // Kiểm tra đúng mật khẩu
    if ($mat_khau != $nhap_lai_mat_khau)
    {
        echo "
        <script type='text/javascript'>
            window.alert('Vui lòng nhập lại mật khẩu!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    $sqlQuery=" SELECT ten_dang_nhap FROM tbl_user_reviewer WHERE ten_dang_nhap='".$ten_dang_nhap."' ";

    $result = mysqli_query($ket_noi, $sqlQuery);

    if (mysqli_num_rows($result) != 0)
    {
        echo "
        <script type='text/javascript'>
            window.alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }
    //Kiểm tra email có đúng định dạng hay không
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
    if (!preg_match($regex, $email))
    {echo "
        <script type='text/javascript'>
            window.alert('Email này không hợp lệ. Vui long nhập email khác!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }

    //Kiểm tra email đã có người dùng chưa
    $sql="SELECT email FROM tbl_user_reviewer WHERE email='".$email."'";

    $re= mysqli_query($ket_noi, $sql);

    if (mysqli_num_rows($re) != 0)
    {
        echo "
        <script type='text/javascript'>
            window.alert('Email này đã có người dùng. Vui lòng chọn Email khác!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }
    }


	//Lưu thông tin thành viên vào bảng
    @$addmember =  "
            INSERT INTO `tbl_user_reviewer` (`id_reviewer`, `ten`, `ten_dang_nhap`, `email`, `pass`,  `anh_dai_dien`) VALUES (NULL,'".$ho_va_ten."', '".$ten_dang_nhap."', '".$email."', '".$mat_khau."', NULL);
        ";
    //echo $addmember;exit();

    mysqli_query($ket_noi, $addmember);

    if ($addmember)
        echo
        "
            <script type='text/javascript'>
                window.alert('Đăng ký tài khoản thành công.');
                window.location.href = 'index.php';
            </script>
        ";
?>
