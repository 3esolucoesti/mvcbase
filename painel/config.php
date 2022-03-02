<?php
	require 'environment.php';
	
	$config = array();

	define ("NOME_SITE", "PAINEL");
	define ("NAME_TOKEN", "PAINEL");//sem espaço 
	define ("EMAIL_", "contato@3eprofissionalizante.com.br");
	define ("EMAIL_DEV", "desenvolvimento@3eprofissionalizante.com.br");
	define ("SENHA_DEV", "desenvolvimento@123");
	define ("HOST_MAIL", "mail.3eprofissionalizante.com.br");
	define ("TELEFONE_SUPORTE", "(31) 3840-9112");
	define ("NOME_SESSION", "3epaineladm");
	define ("ICON", "icon.png");
	define ("IMG_FUNDO", "1-YP-Biax952QfRqvTIkV4lg2.jpg");

	define ("COR_BASE", "#3c8dbc !important");
	define ("COR_HOLVER", "#367fa9  !important");
	define ("COR_MARCACAO", "#165274 !important");
	define ("COR_MENU_LATERAL", "#222d32 !important");
	define ("COR_BARRA_TITULO", "#0d1011 !important");
	define ("COR_LISTA_MENU", "#1e282c !important");
	define ("COR_LISTA_MENU_UL_SUB_MENU", "#182024 !important");
	define ("COR_LISTA_MENU_HOVER", "#0f1315 !important");

	define ("WEBSERVICE", '');
	define ("DOMINIO", "https://www.valeverde.com.br");
	define ("KEY_TOKEN", "1843562f1d1bb61f20e111984ada65ec");
	
	
	if(ENVIRONMENT == 'development'){
		define ("BASE_URL", "http://127.0.0.1:8080/painel");
		define ("LOCAL", "TRUE");

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