<?php
  class contactController extends controller{
    
    public function __construct(){
      parent::__construct();  
    } 
    
    public function index(){
      $data = array();  

      $pg_contact = new Pgcontact();

      // $data['info_contact'] = $pg_contact->infoContact();

      if(isset($_POST['name']) && !empty($_POST['name'])){
				require("phpmailer/class.phpmailer.php");
	 
	
						$mail = new PHPMailer();//talves colocar "true" dentro do parenteses
						 
						
						$mail->IsSMTP(); // Define que a mensagem será SMTP
						$mail->SMTPAuth = true;// Usa autenticação SMTP? (opcional)
						$mail->Host = "mail-ssl.m9.network"; // Endereço do servidor SMTP
						$mail->Port = 465;
						$mail->SMTPSecure = 'ssl';
						$mail->Username = ''.EMAIL_DEV.''; // Usuário do servidor SMTP
						$mail->Password = ''.SENHA_DEV.''; // Senha do servidor SMTP
						//$mail->Username = 'site@brasilcomputadores.com'; // Usuário do servidor SMTP
						//$mail->Password = 'brasil@1995'; // Senha do servidor SMTP
						//$mail->SMTPDebug  = 2;
							
						$mail->From = "".EMAIL_.""; // Seu e-mail
						$mail->Sender = "".EMAIL_.""; //Adicionar E-mail Principal
						$mail->FromName = utf8_decode("E-mail Enviado do ".NOME_SITE.""); // Nome da pagina 
						
						 
						
							 $mail->AddAddress('ricardotecnicoeletronica@gmail.com');//Adicionar E-mail 2
							 $mail->AddAddress("".EMAIL_."");//Adicionar E-mail 3
						
						 
						#recebendo os dados do formulario
							 
						$name = addslashes($_POST['name']);
						$phone = addslashes($_POST['phone']);
						$email = addslashes($_POST['email']);
						$assunto = addslashes($_POST['assunto']);
						$menssage = addslashes($_POST['menssage']);
	
						//Busca o anexo
						//$anexo = $_FILES["anexo"];
						
						
						if(isset($_POST['name'])){
						
						
						$conteudo = "
						
						<!DOCTYPE html>
						<html>
						<head>
							<title></title>
							<style>
								.containerPrincipal{height:500px;background:#f2f2f2;}
								.topo{height:100px;background:#2b2d76;color:white;}
								.topo h1{padding-top:35px;}
								.conteudoD{padding:20px;}
							</style>
						</head>
						<body>
							<div class='containerPrincipal'>
								<div class='topo'>
									<center><h1> VOCÊ TEM UMA NOVA MENSAGEM </h1></center>
								</div>
								<div class='conteudoD'>
									Olá <strong>".NOME_SITE." </strong>, <br/>
									Você recebeu um novo e-mail enviado por um visitante do seu site. <br/><br/>
	
									<strong>Nome: </strong> ".$name." <br/> 
									<strong>Telefone: </strong> ".$phone." <br/> 
									<strong>E-mail: </strong> ".$email." <br/> 
									<strong>Assunto: </strong> ".$assunto." <br/>
									<br/>
									<p>".$menssage."</p>
	
								</div>
							</div>
						</body>
						</html>
	
						";
						
						}
						 
						
						$mail->IsHTML(true); 
						//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
						 
						
						$mail->Subject  = utf8_decode("".$assunto."");  // Assunto da mensagem
						$exibir = $conteudo;
						$mail->Body = $exibir = utf8_decode($exibir); ;
						//Comando para enviar anexo pelo email
						//$mail->AddAttachment("/var/www/email/teste/teste.pdf", "novo_nome.pdf");  // Insere um anexo		
						
						$enviado = $mail->Send();
						 
						
						//$mail->ClearAllRecipients();
						$mail->ClearAttachments();
						 
						// Exibe uma mensagem de resultado
						if ($enviado) {
	
								$pg_contact->salvarmsg($name,$phone,$email,$assunto,$menssage);
	
									echo '<script>alert("Email Enviado com Sucesso!");</script>'; //Para Banco Vazio
										echo '<script>location.href=("'.BASE_URL.'/contact");</script>';
						} else {
									echo "Não foi possível enviar o e-mail.
						 
						";
						echo "Informações do erro: 
						" . $mail->ErrorInfo;
						exit;
						echo '<script>location.href=("'.BASE_URL.'/contact");</script>';
						
						}
		
				}

		$cache = new Cache();
      
        if(file_exists('assets/caches/contact.cache') && $cache->is_valido('assets/caches/contact.cache') == true){
            require 'assets/caches/contact.cache';
        }else{
          ob_start();
            $this->loadTemplate("contact" , $data); 
            $html = ob_get_contents();
          ob_end_clean(); 
          
          $cache->setVar("contact.cache", $html);

          echo $html;

        }
      
        
    }



  }

?>