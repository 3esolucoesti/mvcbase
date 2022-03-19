<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="Criação de sites, sites, divulgação"> 
	<meta name="robots" content="index, follow">
	<meta name="author" content="Ricardo Alves-Programador">
  <meta name="author" content="Diego Reis-Desing">
	
	<title><?php echo NOME_SITE; ?></title> 
  
		<link rel="icon" href="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/<?php echo ICON; ?>"><!-- Por icon Do site REVENDA SITE -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/animate.css">

		<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-2.2.4.min.js"></script>
    
	</head>
<body  style="background:#000;" >

	<div class="container-fluid">

        <div class="container">
            <?php $this->loadInTemplate($viewName, $viewData); ?>
        </div>
	
	</div>

<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/colorbox.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>

</body>
</html>