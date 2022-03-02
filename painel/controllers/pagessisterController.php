<?php 
	class pagessisterController extends controller{

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

      $paginasdosistema = new Pagessister();

      if(isset($_POST['nome']) && !empty($_POST['nome'])){
          $nome = addslashes($_POST['nome']); 
          
          $paginasdosistema->add($nome);

          $data['success'] = "ADICIONADA COM SUCESSO!";
      }


      if(isset($_POST['nomeEdit']) && !empty($_POST['nomeEdit'])){
        $nome = addslashes($_POST['nomeEdit']); 
        $ideditar = addslashes($_POST['ideditar']); 
        
        $paginasdosistema->edit($nome,$ideditar);

        $data['success'] = "ATUALIZADO COM SUCESSO!";
      }


      if(isset($_POST['idatividadedeletar']) && !empty($_POST['idatividadedeletar'])){
        $ideditarDel = addslashes($_POST['idatividadedeletar']); 
        
        $paginasdosistema->del($ideditarDel);

        $data['success'] = "DELETADO COM SUCESSO!";

      }

			$data['paginasdosistema_lista'] = $paginasdosistema->getinfo();

			$this->loadTemplate("pagessister" , $data);


		}

    


	}

?>
