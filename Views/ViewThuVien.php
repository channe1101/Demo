<?php 
	class ViewThuVien{
		public function getPageHome(){
			include_once "Templates/home.php";
		}
		public function getPagegt(){
			include_once "Templates/gioithieu.php";
		}
		public function getPageqtms(){
			include_once "Templates/quytrinh.php";
		}
		public function getPagenq(){
			//include_once "Templates/noiquy.php";
			include_once "Templates/themdg.php";
		}
		public function getPageLogin(){
			include_once "Templates/Formlogin.php";

		}
		public function getPageAdmin($listUser){
			include_once "Templates/admin.php";
		}
		public function getPageTT($listUser){
			include_once "Templates/thuthu.php";
		}
		public function getPageDG($listUser){
			include_once "Templates/docgia.php";
		}
		public function getPageSach($listSach){
			include_once "Templates/sach.php";
		}
		public function getPageThemdg(){
			include_once "Templates/themdg.php";
		}
		// public function getPageSearch(){
		// 	include_once "Templates/timkiem.php";
		// }
	}
 ?>