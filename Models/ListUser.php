<?php 
	require_once 'ModelThuVien.php';
	class listUser extends ModelThuVien{
		public $tableName = 'nguoidung';
		public $columns = ['id_user','matv','hoten','namsinh','gioitinh','chucdanh','email','sdt','level'];
	}


 ?>