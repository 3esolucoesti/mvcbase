<?php
	require 'environment.php';
	
	$config = array();

	define ("NOME_SITE", "PAINEL");

	define ("EMAIL_", "desenvolvimento@3esolucoesti.com.br");
	define ("EMAIL_DEV", "desenvolvimento@3esolucoesti.com.br");
	define ("SENHA_DEV", "3esolucoesti@1995");
	define ("HOST_MAIL", "mail.3esolucoesti.com.br");
	define ("ICON", "icon.jpg");

	define ("LINKWEBMAIL", "");
	
	if(ENVIRONMENT == 'development'){
		define ("BASE_URL", "http://127.0.0.1:8080/painel");
		
		$config['dbname'] = 'painel';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}elseif(ENVIRONMENT == 'production'){
		$teste = $_SERVER['HTTP_HOST'];
		$teste2 = explode('.', $teste);
		$teste3 = '';

		if($teste2[0] == 'tidobrasilhost'){
			$teste3 = 'tidobrasilhost';
		}else{
			$teste3 = 'www.tidobrasilhost';
		}

		define ("BASE_URL", "https://".$teste3.".com.br/negocioentreamigos2");
		define ("LOCAL", "FALSE");

		//define ("BASE_URL", "http://www.tidobrasilhost.com.br/empresasantos");
		$config['dbname'] = 'basemodelo';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'basemodelo';
		$config['dbpass'] = 'ewR2&p61';
	}
	
	global $db;
	
	try{
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
	} catch(PDOException $e){
		echo "ERRO: ".$e->getMenssage();
		exit;	
	}
?>