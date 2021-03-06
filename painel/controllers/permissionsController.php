<?php 

	class permissionsController extends controller{
		
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
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();	
			$data['iddd'] = $u->getId();	
			$data['grupo'] = $u->getGroupUser();

			if($u->hasPermission('permissions_view')){

				
				$permissions = new Permissions();
				$data['permissions_list'] = $permissions->getList($u->getCompany());
				$data['permissions_group_list'] = $permissions->getGroupList($u->getCompany());

				$this->loadTemplate("permissions" , $data);
			}else{
				header("Location: ".BASE_URL."/painel");
			}
		}
		
		public function add(){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();	
			$data['user_email']	= $u->getEmail();
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();	


			if($u->hasPermission('permissions_view')){
					$permissions = new Permissions();
					$paginasdosistema = new Pagessister();

				if(isset($_POST['name']) && !empty($_POST['name'])){
					$pname = addslashes($_POST['name']);
					$descricion = addslashes($_POST['descricion']);
					$public_private = addslashes($_POST['public_private']);
					$lista_pages = addslashes($_POST['lista_pages']);

					$permissions->add($pname, $u->getCompany(),$descricion,$public_private,$lista_pages);
					header("Location: ".BASE_URL."/painel/permissions/add");
				}

				$data['lista_pages'] = $paginasdosistema->getinfo();

				$this->loadTemplate("permissions_add" , $data);
			}else{
				header("Location: ".BASE_URL."/painel");
			}
		}


		public function edit($id){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();	
			$data['user_email']	= $u->getEmail();
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();	

			$id = addslashes($id);

			if($u->hasPermission('permissions_view')){
					$permissions = new Permissions();
					$paginasdosistema = new Pagessister();

				if(isset($_POST['name']) && !empty($_POST['name'])){
					$pname = addslashes($_POST['name']);
					$descricion = addslashes($_POST['descricion']);
					$public_private = addslashes($_POST['public_private']);
					$lista_pages = addslashes($_POST['lista_pages']);

					$permissions->edit($descricion,$id,$public_private,$lista_pages);
					header("Location: ".BASE_URL."/painel/permissions/edit/".$id);
				}

				$data['lista_pages'] = $paginasdosistema->getinfo();
				$data['dadosperimissao'] = $permissions->getid($id);

				$this->loadTemplate("permissions_edit" , $data);
			}else{
				header("Location: ".BASE_URL."/painel");
			}
		}

		public function delete($id){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();	
			$data['user_email']	= $u->getEmail();
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();	

			if($u->hasPermission('permissions_view')){
					$permissions = new Permissions();
					
					$permissions->delete($id);
					header("Location: ".BASE_URL."/painel/permissions");
			}else{
				//header("Location: ".BASE_URL."/");
				$data['aviso'] = "VER ALERT";
			}
		}

		public function add_group(){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();	
			$data['user_email']	= $u->getEmail();
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();


			if($u->hasPermission('permissions_view')){
					$permissions = new Permissions();
					$paginasdosistema = new Pagessister();

				if(isset($_POST['name']) && !empty($_POST['name'])){
					$pname = addslashes($_POST['name']);
					$plist = $_POST['permissions'];

					$permissions->addGroup($pname, $plist ,$u->getCompany());
					header("Location: ".BASE_URL."/painel/permissions");
				}

				$data['permissions_list'] = $permissions->getlist($u->getCompany());
				$data['lista_pages'] = $paginasdosistema->getinfo();

				$this->loadTemplate("permissions_addgroup" , $data);
			}else{
				header("Location: ".BASE_URL."/painel");
			}
		}

		public function edit_group($id){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();	
			$data['user_email']	= $u->getEmail();
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();	

			if($u->hasPermission('permissions_view')){

				$permissions = new Permissions();
				$paginasdosistema = new Pagessister();

				if(isset($_POST['name']) && !empty($_POST['name'])){
					$pname = addslashes($_POST['name']);
					$plist = $_POST['permissions'];

					$permissions->editGroup($pname, $plist , $id, $u->getCompany());
					header("Location: ".BASE_URL."/painel/permissions");
				}

				$data['permissions_list'] = $permissions->getlist($u->getCompany());
				$data['group_info'] = $permissions->getGroup($id,$u->getCompany());
				$data['lista_pages'] = $paginasdosistema->getinfo();


				$this->loadTemplate("permissions_editgroup" , $data);

			}else{
				header("Location: ".BASE_URL."/painel");
			}
		}


		public function delete_group($id){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();
			$data['user_email']	= $u->getEmail();
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();		

			if($u->hasPermission('permissions_view')){
					$permissions = new Permissions();
					
					$permissions->deleteGroup($id);
					header("Location: ".BASE_URL."/painel/permissions");
			}else{
				header("Location: ".BASE_URL."/painel");
			}
		}


	}

?>
