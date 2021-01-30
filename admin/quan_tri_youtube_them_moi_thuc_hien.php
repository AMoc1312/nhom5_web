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

    $noi_dung = $_POST["txtNoiDung"];
    $link = $_POST["txtLink"];
    // 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
    $sql = "
            INSERT INTO `tbl_youtube` (`id_youtube`, `noi_dung`, `link`, `ngay_them`) VALUES (NULL,'".$noi_dung."', '".$link."',current_timestamp());
        ";
    //echo $sql;exit();

    mysqli_query($ket_noi, $sql);


    echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn đã thêm video thành công.');
            </script>
        ";

        echo 
        "
            <script type='text/javascript'>
                window.location.href = './quan_tri_youtube.php'
            </script>
        ";
;?>