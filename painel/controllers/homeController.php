<?php 
	class homeController extends controller{
		
		private $dados;
		public $token;
		
		public function __construct(){
			parent::__construct();		
	
				$u = new Users();
				if(isset($_COOKIE['token_'.NAME_TOKEN])){

					$token = $_COOKIE['token_'.NAME_TOKEN];
					$ver = $u->veryToken($token);
					$this->token = $token;
	
					if($ver == false){
						header("Location: ".BASE_URL."/painel/login");
					}else{
						$this->dados = $ver;
					}
	
				}else{
					header("Location: ".BASE_URL."/painel/login");
				}
			
		}	
		
		public function index(){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();		
			$data['user_email']	= $u->getEmail();
			$data['user_imagem'] = $u->getImagem();	
			$data['sector'] = $u->getSector();


			
			$this->loadTemplate("home" , $data);
			
		}

		public function logout(){
			$data = array();

			$cookie_name = "token_".NAME_TOKEN;
			$cookie_value = "".$this->token."";
			setcookie($cookie_name, $cookie_value, time() - 99999999999999, "/"); // 86400 = 1 day


			$this->loadTemplate("logout" , $data);
			//header("Location: ".BASE_URL."/painel/login");
			
			// $u = new Users();
			// 	$u->logout();

			// 	$_SESSION['testepostoipepainel1'] = '';

			// 	header("Location: ".BASE_URL."");
		}
	
	}

?>
