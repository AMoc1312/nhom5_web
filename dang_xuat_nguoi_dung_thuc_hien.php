<?php 
  session_start();
session_destroy();
    # Đẩy người dùng về trang đăng nhập
    echo 
    "
      <script type='text/javascript'>
        window.alert('Bạn đăng xuất nè');
      </script>
    ";
    echo 
    "
      <script type='text/javascript'>
        window.location.href='dang_nhap.php'
      </script>
    ";

;?>