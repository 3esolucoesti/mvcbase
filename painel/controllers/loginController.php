<?php 
	class loginController extends controller{
		
		public function __construct(){
			parent::__construct();	
			$u = new Users();

			setcookie( "token_".NAME_TOKEN, '', strtotime( '-30 days' ), '/' );

			if(isset($_SESSION[''.NOME_SESSION.''])){
				$ip = $_SERVER['REMOTE_ADDR'];
				
				$block = $u->isLock($_SESSION[''.NOME_SESSION.''],$ip);
			
			}
				
		}	
		
		public function index(){
			$data = array(
				'aviso' => ''
			);	

			//$_SESSION[''.NOME_SESSION.''] = '';//solução ip unico
			
			if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);
				$pass = addslashes($_POST['password']);	
				//unset($_SESSION[''.NOME_SESSION.'']);exit;
				
				$u = new Users();
				
				if($u->analize($email) == true){

				
					$token = $u->doLogin($email,$pass);

					$cookie_name = "token_".NAME_TOKEN;
					setcookie( $cookie_name, $token, strtotime( '+30 days' ) );


				if(!empty($token)){
					
					header("Location: ".BASE_URL."/painel");	
					
				}else{
					if(!isset($_SESSION[''.NOME_SESSION.'teste'])){
						$_SESSION[''.NOME_SESSION.'teste'] = 0;
					}
						$_SESSION[''.NOME_SESSION.'teste']++;

						if($_SESSION[''.NOME_SESSION.'teste'] > 3){
							$u->userBloqueadoLogin($email);

							$data['error'] = 'ESTE USUÁRIO ESTA BLOQUEADO! ENTRE EM CONTATO COM SUPORTE: <a href="mailto:'.EMAIL_.'">'.EMAIL_.'</a> ou <a href="tel:'.TELEFONE_SUPORTE.'">'.TELEFONE_SUPORTE.'</a>';
							//unset($_SESSION[''.NOME_SESSION.'teste']);

						}else{
							$data['error'] = 'Acesso Negado! E-mail e/ou senha errados Tentativas: '.$_SESSION[''.NOME_SESSION.'teste'];
						}

					}
				}else{
					$data['error'] = 'USUÁRIO e/ou E-MAIL NÃO ENCONTRADO!';
				}
				
			}
		
			
			$this->loadView("login" , $data);
			
		}

		public function trocar_user(){

			$data = array();	

			//$_SESSION[''.NOME_SESSION.''] = '';//solução ip unico
			
			if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);
				$pass = addslashes($_POST['password']);	
				//unset($_SESSION[''.NOME_SESSION.'']);exit;
				
				$u = new Users();
				
				if($u->analize($email) == true){
				if($u->doLogin($email,$pass)){
					$_SESSION[''.NOME_SESSION.'teste2'] = '';
					$data = 4;	
				}else{
					if(!isset($_SESSION[''.NOME_SESSION.'teste2'])){
						$_SESSION[''.NOME_SESSION.'teste2'] = 0;
					}
						$_SESSION[''.NOME_SESSION.'teste2']++;

						if($_SESSION[''.NOME_SESSION.'teste2'] > 3){
							$u->userBloqueadoLogin($email);

							$data = 1;

						}else{
							$data = 2;
						}

					}
				}else{
					$data = 3;
				}
				
			}
			
			echo json_encode($data);

		}
		
		public function logout(){
			$u = new Users();
				$u->logout();

				$_SESSION[''.NOME_SESSION.'teste'] = '';
				$_SESSION[''.NOME_SESSION.'teste2'] = '';

				header("Location: ".BASE_URL."/painel");
		}

		public function newpass(){
			$data = array(
				'error' => '',
				'success' => ''
			);

			$u = new Users();

			if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);

				if($u->veryemail($email) == true){

					require("../phpmailer/class.phpmailer.php");
 

					$mail = new PHPMailer();//talves colocar "true" dentro do parenteses
					 
					
					$mail->IsSMTP(); // Define que a mensagem será SMTP
					$mail->SMTPAuth = true;// Usa autenticação SMTP? (opcional)
					$mail->Host = "".HOST_MAIL.""; // Endereço do servidor SMTP
					$mail->Port = 587;
					$mail->Username = ''.EMAIL_DEV.''; // Usuário do servidor SMTP
					$mail->Password = ''.SENHA_DEV.''; // Senha do servidor SMTP
					//$mail->SMTPDebug  = 2;
						
					$mail->From = "".EMAIL_.""; // Seu e-mail
					$mail->Sender = "".EMAIL_.""; //Adicionar E-mail Principal
					$mail->FromName = utf8_decode("CÓDIGO PARA RECUPERAR SENHA"); // Nome da pagina 
					 
					
					$mail->AddAddress("".EMAIL_."");//Adicionar E-mail 2
					$mail->AddAddress(''.$email.'');//Adicionar E-mail 3
					
					 
					#recebendo os dados do formulario
					   
					//$email = addslashes($_POST['email']);
					for ($i=1; $i <= 6; $i++) { 
					 	 $code[] = rand(0,9);
					 } 

					 sort($code);

					 $code =  implode(' - ', $code);

					 $u->salveCodeUser($email,$code);

					//Busca o anexo
					//$anexo = $_FILES["anexo"];
					
					
					if(isset($email)){
					
					$conteudo = "<body style='margin:0px;'>
							<table width='100%' border='0' cellspacing='0' cellpadding='50' style='background-color:#fff; margin:0px;'><tbody><tr><td height='400' valign='top'>	
						
						<table width='50%' border='0' align='center' cellpadding='50' style='background-color:#0A45AB;margin:auto;'><tbody><tr>
						<td>
						
							<div class='jumbotron' style='text-align:center'>
								<h1 style='font:1.5em Tahoma, Geneva, sans-serif;text-align:center;color:#fff;'></h1>
								<div class='jumbotron' style='text-align:center'>
									<h2 style='font:1.3em Tahoma, Geneva, sans-serif;text-align:center;color:#fff;'>SEU CÓDIGO É</h2>
									<h1 style='font:1.4em Tahoma, Geneva, sans-serif;text-align:center;color:#fff;background:rgba(0,255,255,.1);width:200px;height:100px;line-height:100px;margin:auto;border-radius:100%;' class='teste' style='color:#000;'>$code</h1><br/>
									<br /><br /><a style='text-align:center; color:#fff; margin-top:30px;' href='".BASE_URL."/painel/login/codemail&&email=".$email."'>CONFIRME CÓDIGO</a> 
								</div>
                                
							</div>
						</td></tr></tbody></table>
	
						</td></tr></tbody></table>";
					
					}
					 
					
					$mail->IsHTML(true); 
					//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
					 
					
					$mail->Subject  = utf8_decode("SEU CÓDIGO");  // Assunto da mensagem
					$exibir = $conteudo;
					$mail->Body = $exibir = utf8_decode($exibir); ;
					//Comando para enviar anexo pelo email
					//$mail->AddAttachment("/var/www/email/teste/teste.pdf", "novo_nome.pdf");  // Insere um anexo		
					
					$enviado = $mail->Send();
					 
					
					//$mail->ClearAllRecipients();
					$mail->ClearAttachments();
					 
					// Exibe uma mensagem de resultado
					if ($enviado) {
						$data['success'] = "Confirme <strong>CÓDIGO</strong> no seu E-mail.";
					} else {
						echo "ENTROU!";exit;
						echo "Informações do erro: " . $mail->ErrorInfo;
					}	
				}else{
					$data['error'] = '<strong>E-MAIL</strong> NÃO ENCONTRADO!';
				}

			}

			$this->loadView('newpass', $data);
		}

		public function codemail(){
			$data = array(
				'error' => ''
			);

			$u = new Users();
			$emailParams = $_GET['email'];

			if($u->veryEmailTemCodigo($emailParams) == true){

				if(isset($_POST['code01'])){

					$code01 = addslashes($_POST['code01']);
					$code02 = addslashes($_POST['code02']);
					$code03 = addslashes($_POST['code03']);
					$code04 = addslashes($_POST['code04']);
					$code05 = addslashes($_POST['code05']);
					$code06 = addslashes($_POST['code06']);
	
					$cod =  $code01.' - '.$code02.' - '.$code03.' - '.$code04.' - '.$code05.' - '.$code06;
	
					
					if($u->veryCodCerto($cod) == true){
						//$id = $u->desativarCode($cod);
	
						header("Location: ".BASE_URL."/painel/login/newpassword/".$cod);
	
					}else{
				
						if(!isset($_SESSION['codeerrado'])){
							$_SESSION['codeerrado'] = 0;
						}
							$_SESSION['codeerrado']++;
	
							if($_SESSION['codeerrado'] > 2){
	
								$t =  $_SERVER['REQUEST_URI'];
								$tt = explode('email=', $t);
								$email = $tt[1];
								//print_r($tt[1]);exit;
	
								$u->limparCode($email);
	
								$_SESSION['codeerrado'] = '';
								header("Location: ".BASE_URL."/painel/login/newpass");
	
							}else{
								$data['error'] = 'CÓDIGO INCORRETO: N° TENTATIVAS '.$_SESSION['codeerrado'];
							}	
	
					}
	
				}
	
	
				$this->loadView('codemail', $data);


			}else{
				header("Location: ".BASE_URL."/painel/login/newpass");
			}

		}

		public function newpassword($cod){
			$data = array(
				'error' => ''
			);

			$u = new Users();

			//$id = addslashes($id);

			//$result = $u->verifikId($id);
			$result = $u->veryCodCerto($cod);

			if($result == true){

				if(isset($_POST['password1']) && !empty($_POST['password1'])){
					$password1 = addslashes($_POST['password1']);
					$password2 = addslashes($_POST['password2']);

					if($password1 == $password2){

					$data['info'] = $u->recuperarSenha($cod,$password1);
					
					$email = $data['info']['email'];
					
					$result = $u->doLogin($email,$password1);
					$u->desativarCode($cod);

						if($result == true){
							header("Location: ".BASE_URL."/painel");	
						}else{
							echo "FALSE";
							exit;
						}
					

					}else{
						$data['error'] = "UMA DAS SENHAS NÃO CONINCIDE! ";
					}

				}


				$this->loadView('newsenha', $data);
			}else{
				header("Location: ".BASE_URL."/painel/login/newpassTTTTT");
			}


			
		}

		
	}

?>
