<?php include_once('views/headerLogin.php'); ?>

   <style type="text/css">
		.loginarea{width:300px;background:#000;position:absolute;left:50%;top:200px;margin-left:-150px;border-radius:5px;box-shadow:0px 0px 10px #999;border:1px solid #ccc;}
		.form{background:#000;padding:10px;color: #fff;}
		.form label{background:#000;}
		.logo{width: 80%;margin: auto;padding: 10px;margin-top: 30px;}
		.logo img{width:100%;}
		.esqueciminhasenha{float: right;margin-top: 8px;color: white;}
		.esqueciminhasenha:hover{color: red;}

		.orgCode{display: flex;justify-content: center;margin-top: 30px;}
		.code01{width: 35px;margin-right: 2px;}
		.traco{font-size: 3em;margin-top: -15px;margin-left: 5px;margin-right: 5px;}
	</style>
    
	</head>
<body>
<div class="container-fluid">
	<div class="loginarea">
    	<div class="logo">
					<img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/logosite2.png" border="0" alt="" />
        </div>
        <?php if(!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
    	<form method="POST" class="form">
        		<!-- <center><label for="code01" style="" >Código Recebido</label></center> -->
        		<div class="orgCode">
		        	<input type="text" name="code01" autofocus="autofocus" maxlength="1" placeholder="0" id="code01" class="form-control code01" required="required"><br/>
		        	<input type="text" name="code02" autofocus="autofocus" maxlength="1" placeholder="0" id="code01" class="form-control code01" required="required"><br/>
		        	<input type="text" name="code03" autofocus="autofocus" maxlength="1" placeholder="0" id="code01" class="form-control code01" required="required"><br/>
		        	<span class="traco">-</span>
		        	<input type="text" name="code04" autofocus="autofocus" maxlength="1" placeholder="0" id="code01" class="form-control code01" required="required"><br/>
		        	<input type="text" name="code05" autofocus="autofocus" maxlength="1" placeholder="0" id="code01" class="form-control code01" required="required"><br/>
		        	<input type="text" name="code06" autofocus="autofocus" maxlength="1" placeholder="0" id="code01" class="form-control code01" required="required"><br/>
		        </div>	
		        <center><a href="<?php echo BASE_URL; ?>/painel/login/newpass" style="color: white;">Reenviar Código</a></center><br>
        	<!--<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5531987016568"></a>-->
            <input type="submit" value="Confirmar" class="btn btn-info" style="width:100%;margin-bottom: 10px;" >
        </form>
    </div>
</div>

</body>
</html>




























