<?php
	require 'environment.php';
	
	$config = array();

	define ("NOME_SITE", "DR CONEXÕES");
	
	define ("EMAIL_", $_SERVER['EMAIL_']);
	define ("EMAIL_DEV", $_SERVER['EMAIL_DEV']);
	define ("SENHA_DEV", $_SERVER['SENHA_DEV']);
	define ("HOST_MAIL", $_SERVER['HOST_MAIL']);
	define ("ICON", "icon2.png");

	define ("LINKWEBMAIL", "");

	$config['dbname'] = $_SERVER['DB_NAME'];
	$config['host'] = $_SERVER['DB_HOST'];
	$config['dbuser'] = $_SERVER['DB_USER'];
	$config['dbpass'] = $_SERVER['DB_PASS'];
	
	if(ENVIRONMENT == 'development'){
		define ("BASE_URL", "http://127.0.0.1:8080/drconexoesweb");
		define ("LOCAL", "TRUE");
	}elseif(ENVIRONMENT == 'production'){
		$teste = $_SERVER['HTTP_HOST'];
		$teste2 = explode('.', $teste);
		$teste3 = '';

		if($teste2[0] == 'drconexoes'){
			$teste3 = 'drconexoes';
		}else{
			$teste3 = 'www.drconexoes';
		}

		define ("BASE_URL", "https://".$teste3.".com.br");//drconexoesweb
		define ("LOCAL", "FALSE");
	}
	
	global $db;
	
	try{
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
	} catch(PDOException $e){
		echo "ERRO: ".$e->getMenssage();
		exit;	
	}
?>