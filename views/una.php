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
	<title>PALESTRA UNA 03/11/2022</title> 
  <link rel="icon" href="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/<?php echo ICON; ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/login/css/style.css">
	<script src="<?php echo BASE_URL; ?>/assets/js/jquery-2.2.4.min.js"></script>
	<!-- <script src="<?php echo BASE_URL; ?>/painel/assets/js/mask.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js" ></script>
	
	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo BASE_URL; ?>/assets/images/bg.jpg); background-repeat: repeat-y; " >


      <style>
        .logoseletor{
          height: 100px;
        }
        .logorodape{
          width: 15px;
        }
      </style>


        <section class="ftco-section" style="margin-top: -100px;" >
          <div class="container">
            <div class="row justify-content-center">

              <center>
                <div class="col-md-12 text-center mb-4"  >

                <center><label style="font-size: 40px;font-weight:bold;color:white;">SORTEIO</label></center> 
                <div style="max-width: 640px;margin:auto;border:1px solid #fff; padding: 8px;margin-bottom: 20px;" >

                  <center style="font-size: 20px;font-weight:bold;color:white;" > <b>PRÊMIO: 2 SESSÕES DE MENTORIA INDIVIDUAL</b></center> 

                  <b style="color:white;" >REGRAS:</b> <br>
                  <span style="color:white;" > - CADASTRAR NÚMERO DE TELEFONE VALIDO </span> <br>
                  <span style="color:white;" > - SEGUIR NO INSTAGRAM  <a href="https://www.instagram.com/diegoreis.1" target="_blank" >LINK INSTAGRAM</a> </span>  <br>
                  <span style="color:white;" > - DATA DO SORTEIO: </span> <span style="text-decoration:underline;color:white;" >21/11/2022</span> <br>

                </div>


                  <h2 class="heading-section"> <img src="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/logo.png" border="0" alt="" class="logoseletor" /> </h2>
                </div>
              </center>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                  
                  <?php if(!empty($success) ): //?>

                    <h3 class="mb-4 text-center" style="background:#333;color:white;font-weight:bold;padding: 5px;" ><?=$success;?></h3>


                    <script type="text/javascript">
                      // setTimeout(function(){
                      //   window.location.href="<?php echo BASE_URL; ?>/";
                      // }, 2000);
                    </script>

                  <?php else: ?>

                    <form class="signin-form" method="POST" >
                      <div class="form-group">
                        <input type="text" class="form-control nomepessoa" name="nomepessoa" placeholder="Nome " required>
                      </div>

                      <div class="form-group">
                        <input id="password-field" type="text" class="form-control telcell"  attrname="telephone1" placeholder="(00) 00000-0000" required name="telcell" >
                        <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                      </div>

                      <div class="form-group" style="display:flex;line-height: 1;" >
                        <input type="checkbox" class="tenhointeressenavaga" name="tenhointeressenavaga" placeholder="" id="tenhointeressenavaga" style="margin-right: 5px;" > <label for="tenhointeressenavaga" style="cursor:pointer;" >Tenho Interesse na Vaga de <b>Estagio</b> de <span style="text-decoration:underline;" >Desenvolvedor Web</span></label>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Concluir</button>
                      </div>
                      <div class="form-group d-md-flex">
                        <div class="w-50">
                          <!-- <label class="checkbox-wrap checkbox-primary">Remember Me
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                          </label> -->
                        </div>
                        <div class="w-50 text-md-right">
                          <!-- <a href="#" style="color: #fff">Forgot Password</a> -->
                        </div>
                      </div>
                    </form>

                  <?php endif; ?>

                  

                  <p class="w-100 text-center">&mdash; <a href="https://www.3esolucoesti.com.br" target="_blank" > Desenvolvido por: <img src="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/icon.png" border="0" alt="" class="logorodape" /></a>  &mdash;</p>

                  <div class="social d-flex text-center">
                    <!-- <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                    <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <script type="text/javascript">
            function inputHandler(masks, max, event) {
              var c = event.target;
              var v = c.value.replace(/\D/g, '');
              var m = c.value.length > max ? 1 : 0;
              VMasker(c).unMask();
              VMasker(c).maskPattern(masks[m]);
              c.value = VMasker.toPattern(v, masks[m]);
            }

            var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
            var tel = document.querySelector('input[attrname=telephone1]');
            VMasker(tel).maskPattern(telMask[0]);
            tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

            var docMask = ['999.999.999-999', '99.999.999/9999-99'];
            var doc = document.querySelector('#doc');
            VMasker(doc).maskPattern(docMask[0]);
            doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);

            // exemple acima: https://pt.stackoverflow.com/questions/42238/m%C3%A1scara-de-telefones-usando-jquery-mask-plugin
        </script>

			<script src="<?php echo BASE_URL; ?>/assets/login/js/jquery.min.js"></script>
 		  <script src="<?php echo BASE_URL; ?>/assets/login/js/popper.js"></script>
      <script src="<?php echo BASE_URL; ?>/assets/login/js/bootstrap.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/assets/login/js/main.js"></script>

	</body>
</html>


