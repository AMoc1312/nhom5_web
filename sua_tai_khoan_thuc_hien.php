<?php

session_start();
//$ma_user =(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '');
$ma_user=1;
//KIỂM TRA
$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
mysqli_set_charset($ket_noi, 'UTF8');
	// 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang

    $ho_va_ten = $_POST["txtHoTen"];
    $ten_dang_nhap = $_POST["txtUser"];
    $email = $_POST["txtEmail"];
    $mat_khau = $_POST["txtMatKhau"];
    $nhap_lai_mat_khau = $_POST["txtNhapLaiMatKhau"];
   $anh_minh_hoa = "img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
    $file_anh_tam =  $_FILES["txtAnhMinhHoa"]["tmp_name"];
    $result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
    //echo $phan_loai;exit();
    if(!$result) {
            $anh_minh_hoa = NULL;
        }

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
    
    // Kiểm tra đúng mật khẩu
    if ($mat_khau != $nhap_lai_mat_khau)
    {
        echo "
        <script type='text/javascript'>
            window.alert('Bạn nhập không khớp mật khẩu. Vui lòng nhập lại mật khẩu!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }

   /* if (mysqli_num_rows($ten) !=0)
    {
        echo "
        <script type='text/javascript'>
            window.alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }*/
    //Kiểm tra email có đúng định dạng hay không
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
    if (!preg_match($regex, $email))
    {
        echo "
        <script type='text/javascript'>
            window.alert('Email này không hợp lệ. Vui long nhập email khác!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
        exit;
    }

    //Kiểm tra trùng tên đăng nhập trong csdl không 
    $sqlReviewer="SELECT * FROM `tbl_user_reviewer`  WHERE `id_reviewer`='".$ma_user."'";
   $dulieu = mysqli_query($ket_noi, $sqlReviewer);
    $row1 = mysqli_fetch_array($dulieu);
   //echo "tên".$row1["ten_dang_nhap"];
  // echo $ten_dang_nhap;
 //echo "mail".$row1["email"];
 //ktra
$sql="SELECT email FROM tbl_user_reviewer WHERE email='".$email."'";
$re= mysqli_query($ket_noi, $sql);
$sqlQuery=" SELECT ten_dang_nhap FROM tbl_user_reviewer WHERE ten_dang_nhap='".$ten_dang_nhap."' ";
$ten = mysqli_query($ket_noi, $sqlQuery);

    if($ten_dang_nhap==$row1["ten_dang_nhap"]&&$email==$row1["email"])
    {
         if($anh_minh_hoa == NULL) {

            $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1
            ";
             mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
             
    } else {
             $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."', `anh_dai_dien` = '".$anh_minh_hoa."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1 
            ";
           mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
        
    }
    } 
    else if($ten_dang_nhap==$row1["ten_dang_nhap"]&&$email!=$row1["email"])
    {
        //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows($re) > 0)
    {
        echo "
        <script type='text/javascript'>
           window.alert('Email này đã có người dùng. Vui lòng chọn Email khác!');
      window.location.href='javascript: history.go(-1)'
        </script>
      ";
    }
    else
        {
            if($anh_minh_hoa == NULL) {

            $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1
            ";
             mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
             
    } else {
             $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."', `anh_dai_dien` = '".$anh_minh_hoa."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1 
            ";
            mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
        
    }
        }
    }
    else if($ten_dang_nhap!=$row1["ten_dang_nhap"]&&$email==$row1["email"])
    {
         //Kiểm tra tên đăng nhập này đã có người dùng chưa 
    if (mysqli_num_rows($ten) !=0)
    {
        echo "
        <script type='text/javascript'>
            window.alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
    }
    else
        {
            if($anh_minh_hoa == NULL) {

            $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1
            ";
             mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
             
    } else {
             $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."', `anh_dai_dien` = '".$anh_minh_hoa."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1 
            ";
           mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
        
    }
        }
    }
    else if($ten_dang_nhap!=$row1["ten_dang_nhap"]&&$email!=$row1["email"])
    {
        if (mysqli_num_rows($ten) !=0)
    {
        echo "
        <script type='text/javascript'>
            window.alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác!');
            window.location.href='javascript: history.go(-1)'
        </script>
        ";
    }
    else if (mysqli_num_rows($re) > 0)
    {
        echo "
        <script type='text/javascript'>
           window.alert('Email này đã có người dùng. Vui lòng chọn Email khác!');
      window.location.href='javascript: history.go(-1)'
        </script>
      ";
    }

    else
    {
        if($anh_minh_hoa == NULL) {

            $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1
            ";
             //mysqli_query($ket_noi, $sql);
             mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
             
    } else {
             $sql = "
            UPDATE `tbl_user_reviewer` SET `ten` = '".$ho_va_ten."', `ten_dang_nhap` = '".$ten_dang_nhap."', `email` = '".$email."', `pass` = '".$mat_khau."', `anh_dai_dien` = '".$anh_minh_hoa."' WHERE `tbl_user_reviewer`.`id_reviewer` = 1 
            ";
           mysqli_query($ket_noi, $sql);
            echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã cập nhật dữ liệu thành công!');
            </script>
        ";
        echo 
        "
            <script type='text/javascript'>
                window.location.href='sua_tai_khoan.php'
            </script>
        ";
        
    }
    }
    }
   
  
    ;?>
