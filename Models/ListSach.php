<?php 
	require_once 'ModelThuVien.php';
	class listSach extends ModelThuVien{
		public $tableName = 'tailieu';
		public $columns = ['matailieu','tentailieu','hinhanh','matheloai','makhoa','matg','manxb','mann','sotrang','giabia','soluong','ngaycapnhat','soluongcon'];
	}


 ?>