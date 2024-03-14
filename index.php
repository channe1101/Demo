<?php 
	require_once "Controller/ControllerThuVien.php";
	session_start();
	//controller
	$Controlltv= new ControllerThuVien();
	$task=isset($_GET['task'])? $_GET['task']:null;


	//Kieểm tra hết các trường trong CSDL để đăng nhập
	$matv = isset($_POST['matv'])? $_POST['matv']:null;
	$hoten = isset($_POST['hoten'])? $_POST['hoten']:null;
	$ngaysinh = date("Y.m.d");
	$gioitinh = isset($_POST['gioitinh'])? $_POST['gioitinh']:null;
	$chucdanh = isset($_POST['chucdanh'])? $_POST['chucdanh']:null;
	$email = isset($_POST['email'])? $_POST['email']:null;
	$sdt = isset($_POST['sdt'])? $_POST['sdt']:null;
	
	//Đăng nhập 
	if (isset($_POST['login'])) {
		$Controlltv->doLogin();
	}
	//TIMKIM 
	// if (isset($_POST['timkiem'])) {
	// 	$Controlltv->doSearch();
	// }
	//thêm đg
	if (isset($_POST['themdg'])) {
		
	    if (empty($matv) || empty($hoten) || empty($email) || empty($phone) || empty($ngaysinh) || empty($gioitinh)) {
	        $message = "Không được để trống";
	        echo "<script type='text/javascript'>alert('$message');</script>";
	    }
	    elseif(isset($matv) && isset($hoten) && isset($email) && isset($phone) && isset($ngaysinh) && isset($gioitinh)){
	        $Controlltv->doThemDG($matv,$hoten,$email,$phone,$ngaysinh,$gioitinh);
	    }
	}

	switch ($task) {
		case 'pagehome':
			$Controlltv->getPageHome();
			break;
		case 'pagegt':
			$Controlltv->getPagegt();
			break;
		case 'pageqtms':
			$Controlltv->getPageqtms();
			break;
		case 'pagenq':
			$Controlltv->getPagenq();
			break;
		case 'pagelogin':
			$Controlltv->getPageLogin();
			break;
		case 'pageadmin':
			$Controlltv->getPageAdmin();
			break;
		case 'pagethuthu':
			$Controlltv->getPageTT();
			break;
		case 'pagedocgia':
			$Controlltv->getPageDG();
			break;
		case 'pagethemdg':
		 	$Controlltv->getPageThemdg();
		 	break;
		case 'pagesach':
			$Controlltv->getPageSach();
			break;
		// case 'pagetimkiem':
		// 	$Controlltv->getPageSearch();
		// 	break;
		case 'deleteuser':
			$Controlltv->deleteUser();
			break;

		default:
			$Controlltv->getPageHome();
			break;
	} 
 ?>