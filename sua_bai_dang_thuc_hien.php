<?php 

  session_start();
$ma_user =(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '');
;?>
<?php 
	$ket_noi = mysqli_connect("localhost", "root", "", "nhom5");
    mysqli_set_charset($ket_noi, 'UTF8');

	            $id_review = 6;
	          //  var_dump($id_review);exit();
                $ten_mon=$_POST["txtTenMon"];
                $noi_dung=$_POST["txtNoiDung"];
                $diem=$_POST["txtDiem"];
                $gia_tb=$_POST["txtGiaTB"];
                $gia_min=$_POST["txtGiaMin"];
                $gia_max=$_POST["txtGiaMax"];
                $danh_muc=$_POST["txtDanhMuc"];
                $duong=$_POST["txtDuong"];
                $gio_mo=$_POST["txtGioMo"];
                $gio_dong=$_POST["txtGioDong"];
                $so_nha=$_POST["txtSoNha"];
                $anh_minh_hoa = "img/doan/".basename($_FILES["txtAnhMinhHoa"]["name"]);
    $file_anh_tam =  $_FILES["txtAnhMinhHoa"]["tmp_name"];
    $result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
    //echo $phan_loai;exit();
    if(!$result) {
            $anh_minh_hoa = NULL;
        }
              // echo $ten_mon;



    // 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
    if($anh_minh_hoa == NULL)
    {
		if( $gia_tb==NULL&& $gia_min==NULL&&$gia_max==NULL )
		{
		$sql = "
			UPDATE `tbl_review` SET
			 `id_danh_muc`='".$danh_muc."',
			 `id_duong`='". $duong."',
			 `so_nha`='".$so_nha."',
			 `gio_mo_cua`= '". $gio_mo."',
			 `gio_dong_cua`='".$gio_dong."',
			 `ten_mon`='". $ten_mon." ',
			 `noi_dung`='".$noi_dung."',
			 `diem`='".$diem."'
			  WHERE `tbl_review`.`id_review`='".$id_review."'";
		}else if( $gia_tb!= NULL && $gia_min==NULL && $gia_max==NULL )
		{ 
			$sql = "
				UPDATE `tbl_review` SET 
				`id_danh_muc`='".$danh_muc."',
				`id_duong`='". $duong."',
				`so_nha`='".$so_nha."',
				`gio_mo_cua`= '". $gio_mo."',
				`gio_dong_cua`='".$gio_dong."',
				`ten_mon`='". $ten_mon." ',
				`noi_dung`='".$noi_dung."',
				`diem`='".$diem."',
				`gia_tb`='".$gia_tb."' 
				 WHERE `tbl_review`.`id_review`='".$id_review."'";
		} else if($gia_tb==NULL&& $gia_min==NULL && $gia_max!=NULL )
		{ 
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_max`='".$gia_max."' 
			 WHERE `tbl_review`.`id_review`='".$id_review."'";
		}else if($gia_tb==NULL && $gia_min!=NULL && $gia_max==NULL )
		{ 
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_min`='".$gia_min."' 
			 WHERE `tbl_review`.`id_review`='".$id_review."'";
		}else if( $gia_tb==NULL && $gia_min!=NULL && $gia_max !=NULL ) 
		{
			$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_min`='". $gia_min."',
			`gia_max`='". $gia_max."'  
			WHERE `tbl_review`.`id_review`='".$id_review."' ";
		} else  if($gia_tb !=NULL && $gia_min!=NULL && $gia_max ==NULL )
		{ 
		$sql = "
			UPDATE `tbl_review` SET
			 `id_danh_muc`='".$danh_muc."',
			 `id_duong`='". $duong."',
			 `so_nha`='".$so_nha."',
			 `gio_mo_cua`= '". $gio_mo."',
			 `gio_dong_cua`='".$gio_dong."',
			 `ten_mon`='". $ten_mon." ',
			 `noi_dung`='".$noi_dung."',
			 `diem`='".$diem."',
			 `gia_tb`='".$gia_tb."',
			 `gia_min`='".$gia_min."' 
			  WHERE `tbl_review`.`id_review`='".$id_review."'";
		}else if( $gia_tb !=NULL && $gia_min==NULL  && $gia_max !=NULL  )
		{ 
		$sql = "
			UPDATE `tbl_review` SET
			 `id_danh_muc`='".$danh_muc."',
			 `id_duong`='". $duong."',
			 `so_nha`='".$so_nha."',
			 `gio_mo_cua`= '". $gio_mo."',
			 `gio_dong_cua`='".$gio_dong."',
			 `ten_mon`='". $ten_mon." ',
			 `noi_dung`='".$noi_dung."',
			 `diem`='".$diem."',
			 `gia_tb`='".$gia_tb."',
			 `gia_max`='".$gia_max."' 
			  WHERE `tbl_review`.`id_review`='".$id_review."'";
		}else {
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_tb`='".$gia_tb."',
			`gia_min`='".$gia_min."' ,
			`gia_max`='".$gia_max."' 
			 WHERE `tbl_review`.`id_review`='".$id_review."'";
		}
    }
    if($anh_minh_hoa != NULL)
    {
		if( $gia_tb==NULL&& $gia_min==NULL&&$gia_max==NULL )
		{
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`anh_minh_hoa`='". $anh_minh_hoa."'
			 WHERE `tbl_review`.`id_review`='".$id_review."' ";
		}else if( $gia_tb!= NULL && $gia_min==NULL && $gia_max==NULL )
		{ 
			$sql = "
			UPDATE `tbl_review` SET
			 `id_danh_muc`='".$danh_muc."',
			 `id_duong`='". $duong."',
			 `so_nha`='".$so_nha."',
			 `gio_mo_cua`= '". $gio_mo."',
			 `gio_dong_cua`='".$gio_dong."',
			 `ten_mon`='". $ten_mon." ',
			 `noi_dung`='".$noi_dung."',
			 `diem`='".$diem."',
			 `gia_tb`='".$gia_tb."',
			 `anh_minh_hoa`='". $anh_minh_hoa."' 
			 WHERE `tbl_review`.`id_review`='".$id_review."'";
		} else if($gia_tb==NULL&& $gia_min==NULL && $gia_max!=NULL )
		{ 
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_max`='". $gia_max."',
			`anh_minh_hoa`='". $anh_minh_hoa."' 
			WHERE `tbl_review`.`id_review`='".$id_review."' ";
		}else if($gia_tb==NULL && $gia_min!=NULL && $gia_max==NULL )
		{ 
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_min`='". $gia_min."',
			`anh_minh_hoa`='". $anh_minh_hoa."'
			 WHERE `tbl_review`.`id_review`='".$id_review."' ";
		}else if( $gia_tb==NULL && $gia_min!=NULL && $gia_max !=NULL ) 
		{
			$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_min`='". $gia_min."',
			`gia_max`='". $gia_max."',
			`anh_minh_hoa`='". $anh_minh_hoa."'
			WHERE `tbl_review`.`id_review`='".$id_review."' ";
		} else  if($gia_tb !=NULL && $gia_min!=NULL && $gia_max ==NULL )
		{ 
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_tb`='".$gia_tb."',
			`gia_min`='". $gia_min."',
			`anh_minh_hoa`='". $anh_minh_hoa."'
			 WHERE `tbl_review`.`id_review`='".$id_review."' ";
		}else if( $gia_tb !=NULL && $gia_min==NULL  && $gia_max !=NULL  )
		{ 
		$sql = "
			UPDATE `tbl_review` SET 
			`id_danh_muc`='".$danh_muc."',
			`id_duong`='". $duong."',
			`so_nha`='".$so_nha."',
			`gio_mo_cua`= '". $gio_mo."',
			`gio_dong_cua`='".$gio_dong."',
			`ten_mon`='". $ten_mon." ',
			`noi_dung`='".$noi_dung."',
			`diem`='".$diem."',
			`gia_tb`='".$gia_tb."',
			`gia_max`='". $gia_max."',
			`anh_minh_hoa`='". $anh_minh_hoa."'
			 WHERE `tbl_review`.`id_review`='".$id_review."' ";
		}else {
		$sql = "
			UPDATE `tbl_review` SET
			 `id_danh_muc`='".$danh_muc."',
			 `id_duong`='". $duong."',
			 `so_nha`='".$so_nha."',
			 `gio_mo_cua`= '". $gio_mo."',
			 `gio_dong_cua`='".$gio_dong."',
			 `ten_mon`='". $ten_mon." ',
			 `noi_dung`='".$noi_dung."',
			 `diem`='".$diem."',
			 `gia_tb`='".$gia_tb."',
			 `gia_min`='". $gia_min."',
			 `gia_max`='". $gia_max."',
			 `anh_minh_hoa`='". $anh_minh_hoa."' 
			 WHERE `tbl_review`.`id_review`='".$id_review."' ";
		}
    }




	   echo $sql;exit();
	      mysqli_query($ket_noi, $sql);


		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật bài thành công.');
			</script>
		";

		echo 
		"
			<script type='text/javascript'>
				window.location.href = 'review.php'
			</script>
		";
;?>