<?php 
	class pgcontactController extends controller{
		
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

			if($u->hasPermission('editar_site')){	
				// $pg_home = new Pghome();
				// $pgcontact = new Pgcontact();
				// $pg_about = new Pgabout();	

				// $data['info_home'] = $pg_home->getPgHome();
        // $data['info_about'] = $pg_about->getinfohome();

				// $this->loadView("pgcontact" , $data);

			}else{
				header("Location: ".BASE_URL."/painel");
			}
			
		}

		public function lista_msg(){
    		// STATUS 0 = NÃO LEU
    		// STATUS 1 = LEU

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

			if($u->hasPermission('lista_deemails')){	
				$pgcontact = new Pgcontact();

				$offeset = 0;
				$limit = 10;

				$totaldeemails = $pgcontact->totaldeemails();
				$data['paginas'] = ceil($totaldeemails/$limit);

				$data['paginaAtual'] = 1;

				if(!empty($_GET['p'])){
					$data['paginaAtual'] = intval($_GET['p']);
				}

				$offeset = ($data['paginaAtual'] * $limit) - $limit;


				$data['lista_emails'] = $pgcontact->getEmails($offeset,$limit);

				$p = '?p=';

				if(!empty($_GET['p'])){
					$Pparams = $_GET['p'];
				}else{
					$Pparams = '1';
				}

				$data['final'] = $p.$Pparams;


				$this->loadTemplate("listadeemails" , $data);

				
			}else{
				header("Location: ".BASE_URL."/painel");
			}

    	}

    	public function delmsg($id){
    		$pgcontact = new Pgcontact();

    		$pgcontact->delmsg($id);

    		header("Location: ".BASE_URL."/painel/pgcontact/lista_msg");

			}
			

			public function lista_leads(){
				// STATUS 0 = NÃO LEU
					// STATUS 1 = LEU
	
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
	
				if($u->hasPermission('lista_leads')){	
					$pg_contact = new Pgcontact();
	
	
	
					$offeset = 0;
					$limit = 10;
	
	
					$totallides = $pg_contact->totallides();
					$data['paginas'] = ceil($totallides/$limit);
	
					$data['paginaAtual'] = 1;
	
					if(!empty($_GET['p'])){
						$data['paginaAtual'] = intval($_GET['p']);
					}
	
					$offeset = ($data['paginaAtual'] * $limit) - $limit;
	
					$data['lista_leads_info'] = $pg_contact->getLeads($offeset,$limit);
	
	
					$this->loadTemplate("listadeleads" , $data);
	
					
				}else{
					header("Location: ".BASE_URL."/painel");
				}
			}
  


	}	