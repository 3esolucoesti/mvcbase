<?php 
	class usersController extends controller{
		
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
			$data['grupo'] = $u->getGroupUser();


			if($u->hasPermission('users_view')){
				$data['users_list'] = $u->getList($u->getCompany());
				$this->loadTemplate("users" , $data);
			}else{
				//header("Location: ".BASE_URL."/painel");
				$data['aviso'] = "VER ALERT";
				$this->loadTemplate("users" , $data);
			}

		}

		public function profile(){
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
			$data['grupo'] = $u->getGroupUser();

			if(isset($_POST['nameNew']) && !empty($_POST['nameNew'])){
				$nameNew = addslashes($_POST['nameNew']);
				$pass01 = addslashes($_POST['pass01']);
				$pass02 = addslashes($_POST['pass02']);

				$u->editName($nameNew,$u->getCompany(),$_SESSION[''.NOME_SESSION.'']);

				if(isset($pass01) && !empty($pass01)) {
					if(isset($pass02) && !empty($pass02)) {
						if($pass01 == $pass02) {
							$u->alterarPass($pass01,$u->getCompany(),$_SESSION[''.NOME_SESSION.'']);
						}	
					}
				}

				header("Location: ".BASE_URL."/painel/users/profile");

			}

			
			
			$this->loadTemplate("profile" , $data);
			
		}

		public function imgdepoiment(){
			$u = new Users();

				$data = $_POST['image'];


				list($type, $data) = explode(';', $data);
				list(, $data)      = explode(',', $data);


				$data = base64_decode($data);
				$imageName = md5(rand(0,999).time()).'.png';
				file_put_contents('assets/images/'.$imageName, $data);

				$u->img_addlist($imageName);
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
			$data['grupo'] = $u->getGroupUser();

			if($u->hasPermission('users_add_view')){//
					$p = new Permissions();

					if(isset($_POST['email']) && !empty($_POST['email'])){
						
						$name = addslashes($_POST['name']); 
						$email = addslashes($_POST['email']); 
						$pass = addslashes($_POST['password']);
						$group = addslashes($_POST['group']);
						$funcao = addslashes($_POST['funcao']);

						$passEmMd5 = md5($pass);

						$a = $u->add($name,$email,$passEmMd5,$group,$u->getCompany(),$funcao);

						if($a == '1'){
							header("Location: ".BASE_URL."/painel/users");
						}else{
							$data['error_msg'] = "Usuário Já Existe!"; 
						}
						
					}	

					$data['group_list'] = $p->getGroupList($u->getCompany());

				$this->loadTemplate("users_add" , $data);
			}else{
				//header("Location: ".BASE_URL."/painel");
				$data['aviso'] = "VER ALERT";
				$this->loadTemplate("users_add" , $data);
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
			$data['grupo'] = $u->getGroupUser();	

			if($u->hasPermission('users_edit_view')){
					$p = new Permissions();
					

					if(isset($_POST['group']) && !empty($_POST['group'])){
						$pass = addslashes($_POST['password']);
						$group = addslashes($_POST['group']);
						$funcao = addslashes($_POST['funcao']);
						$name = addslashes($_POST['name']);

						$u->edit($name,$pass,$group,$id,$u->getCompany(),$funcao);
						header("Location: ".BASE_URL."/painel/users");
					}	

					$data['user_info'] = $u->getInfo($id, $u->getCompany());
					$data['group_list'] = $p->getGroupList($u->getCompany());

				$this->loadTemplate("users_edit" , $data);
			}else{
				//header("Location: ".BASE_URL."/painel");
				$data['aviso'] = "VER ALERT";
				$this->loadTemplate("users_edit" , $data);
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
			$data['grupo'] = $u->getGroupUser();	

			if($u->hasPermission('users_dell_view')){
					$p = new Permissions();
					$u->delete($id, $u->getCompany());
					header("Location: ".BASE_URL."/painel/users");
			}else{
				header("Location: ".BASE_URL."/painel");
			}
		}
	}

?>
