<?php
  class notfoundController extends controller{
    
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

      
      $this->loadView("404" , $data);  
    }
  
  }

?>