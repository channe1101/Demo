<?php 
//keets noois datbase
		class ModelThuVien{
		public function __construct(){
			$db = mysqli_connect("localhost","root","","thuvien");
			mysqli_set_charset($db,"utf8");
			$this->db = $db;
		}


		public function doLogin(){
			$query = "SELECT * 
					FROM nguoidung 
					WHERE matv = '".$_POST['username']."'AND ngaysinh ='".$_POST['password']."'";
			$result = mysqli_query($this->db,$query);
				if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				return $row;
			}
			return false;
		}

		public function getDataAdmin(){
			$query = " SELECT * FROM nguoidung WHERE level ='1'";
			$listUser = mysqli_query($this->db,$query);
			return $listUser;
		}
		public function getDataDG(){
			$query = " SELECT * FROM nguoidung WHERE level ='1'";
			$listUser = mysqli_query($this->db,$query);
			return $listUser;
			
		}
		public function getDataTT(){
			$query = " SELECT * FROM nguoidung WHERE level ='1'";
			$listUser = mysqli_query($this->db,$query);
			return $listUser;
		}
		public function getDataSach(){
			$query = " SELECT * FROM tailieu";
			$listSach = mysqli_query($this->db,$query);
			return $listSach;
		}

		public function doThemDG($matv,$hoten,$email,$phone,$ngaysinh,$gioitinh){
			$query= "INSERT INTO `nguoidung`(`matv`, `hoten`, `ngaysinh`, `gioitinh`, `chucdanh`, `email`, `sdt`, `level`) VALUES('".$matv."','".$hoten."','".$ngaysinh."','".$gioitinh."','','".$email."','".$phone."','1')";
			$result =mysqli_query($this->db,$query);
			return $result;
		}
		//xoa
		public function deleteUser(){
			$query= "DELETE FROM `nguoidung` WHERE id_user= '{$_GET['iduser']}'";
			$result= mysqli_query($this->db,$query);
			return $result;
		}
	} 

 ?>