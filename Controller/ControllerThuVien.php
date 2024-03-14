<?php 
	require_once "Models/ModelThuVien.php";
	require_once "Views/ViewThuVien.php";

  
	class ControllerThuVien{
		var $model, $view;
		public function __construct(){
			$this->model=new ModelThuVien();
			$this->view=new ViewThuVien();
		}
		//trang chu
		public function getPageHome(){
			$this->view->getPageHome();
		}

		//trang gioi thieu
		public function getPagegt(){
			$this->view->getPagegt();
		}
		//trang quy trinh muon sach
		public function getPageqtms(){
			$this->view->getPageqtms();
		}
		//trang noi quy
		public function getPagenq(){
			$this->view->getPagenq();
		}
		//trang dang nhap
		public function getPageLogin(){
			$this->view->getPageLogin();
		}
		//trang ad
		public function getPageAdmin(){
			$listUser=$this->model->getDataAdmin();
			$this->view->getPageAdmin($listUser);
		}
		//trang thu thu
		public function getPageTT(){
			$listUser=$this->model->getDataTT();
			$this->view->getPageTT($listUser);
		}
		//trang doc gia
		public function getPageDG(){
			$listUser=$this->model->getDataDG();
			$this->view->getPageDG($listUser);
			
		}
		//trang themdg
		public function getPageThemdg(){
			$this->view->getPageThemdg();
		}
		public function getPageSach(){
			$listSach=$this->model->getDataSach();
			$this->view->getPageSach($listSach);
		}
		//xoadg
		public function deleteUser(){
			$this->model->deleteUser();
			header("location:index.php?task=pagethuthu");
		}
		
		//dang nhap
		public function doLogin(){
			$result = $this->model->doLogin();
			// $_SESSION['id_user'] = $result['id_user'];
			// $_SESSION['matv'] = $result['matv'];
			// $_SESSION['hoten'] = $result['hoten'];
			// $_SESSION['namsinh'] = $result['namsinh'];
			// $_SESSION['gioitinh'] = $result['gioitinh'];
			// $_SESSION['chucdanh'] = $result['chucdanh'];
			// $_SESSION['email'] = $result['email'];
			// $_SESSION['sdt'] = $result['sdt'];
			//  $_SESSION['level'] = $result['level'];
			if (!is_null($result) && isset($result['level'])) {
    			if ($result['level'] ==2) {
				header("location:index.php?task=pageadmin");
				}
				elseif ($result['level'] ==1){
				header("location:index.php?task=pagedocgia");
				}
				elseif ($result['level'] ==3){
				header("location:index.php?task=pagethuthu");
				}
			}
			
		}
		public function doThemDG($matv,$hoten,$email,$phone,$ngaysinh,$gioitinh){
			$result = $this->model->doThemDG($matv,$hoten,$email,$phone,$ngaysinh,$gioitinh);
			$message = "bạn đã đăng ký thành công";
             echo "<script type='text/javascript'>alert('$message');</script>";
             $this->view->getPageThemdg();
		}

	}

 ?>