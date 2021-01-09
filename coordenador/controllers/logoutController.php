
<?php 
	class logoutController extends controller{

		public function index(){

			$_SESSION['cLogin'] = "";
			$_SESSION['cNome'] = "";
			header('Location: http://localhost/BitProYoS/');
			exit;

		}
	}
 ?>