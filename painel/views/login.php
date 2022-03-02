<?php require_once('views/headerLogin.php'); ?>

<style>
		.loginarea{width:300px;background:rgba(0,0,0,1);position:absolute;left:50%;top:200px;margin-left:-150px;border-radius:5px;box-shadow:0px 0px 10px #000;border:1px solid #fff;}
		.form{background:rgba(0,0,0,1);padding:10px;color: #fff;}
		.form label{margin-top: 10px;}
		.logo{width: 80%;margin: auto;padding: 10px;margin-top: 30px;}
		.logo img{width:100%;}
		.esqueciminhasenha{margin-top: 8px;color: white;}
		.esqueciminhasenha:hover{color: red;}
</style>

<div class="container-fluid">
	<div class="loginarea">
    	<div class="logo">
        	<img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/logosite2.png" border="0" alt="" />
        </div>
        <?php if(!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
    	<form method="post" class="form">
        	<label for="email">E-mail</label>
        	<input type="email" name="email" autofocus="autofocus" placeholder="E-mail" id="email" class="form-control" required="required">
            <label for="password">Senha</label>
        	<input type="password" name="password" placeholder="Password" id="password" class="form-control" required="required"><br/>
            <input type="submit" value="Entrar" class="btn btn-info" style="width:100%;margin-bottom: 10px;" >
						<center><a href="<?php echo BASE_URL; ?>/painel/login/newpass" class="esqueciminhasenha">Esqueci minha senha</a></center>
						<br>
						<a href="<?php echo BASE_URL; ?>/" class="btn btn-success" ><i class="fa fa-arrow-left"></i></a>
						<br>
        </form>
    </div>
</div>

</body>
</html>




























