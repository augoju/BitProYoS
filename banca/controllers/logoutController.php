
<?php 
	class logoutController extends controller{

		public function index(){

			$_SESSION['bLogin'] = "";
			$_SESSION['bNome'] = "";
			header('location: http://localhost/BitProYoS/');
			exit;

		}
	}
 ?>