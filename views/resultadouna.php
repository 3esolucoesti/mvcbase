<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PALESTRA UNA 03/11/2022</title> 

  <link rel="icon" href="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/<?php echo ICON; ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/login/css/style.css">
	<script src="<?php echo BASE_URL; ?>/assets/js/jquery-2.2.4.min.js"></script>
	<!-- <script src="<?php echo BASE_URL; ?>/painel/assets/js/mask.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js" ></script>

</head>
<body>



<style>

  /*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  background: #00b09b;
  background: -webkit-linear-gradient(to right, #00b09b, #96c93d);
  background: linear-gradient(to right, #00b09b, #96c93d);
  min-height: 100vh;
}

.text-gray {
  color: #aaa;
}


</style>

<div class="container py-5">

  <!-- For demo purpose -->
  <div class="row text-center text-white mb-5">
    <div class="col-lg-7 mx-auto">
      <h1 class="display-4" style="color:white;" >Resultado UNA</h1>
      <h3 class="" style="color:white;" >TOTAL #<?=count($lista);?></h3>
      </p>
    </div>
  </div>
  <!-- End -->

  <div class="row" style="margin-top: -50px;" >
    <div class="col-lg-8 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow">

        <?php foreach($lista as $li): ?>

          <!-- list group item-->
          <li class="list-group-item">
            <!-- Custom content-->
            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
              <div class="media-body order-2 order-lg-1">
                <h5 class="mt-0 font-weight-bold mb-0"> <?=$li['nome'];?> </h5>
                <p class="font-italic text-muted mb-0 small"><i class="fa fa-whatsapp"></i> TELEFONE: <?=$li['telefone'];?> </p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                  <h6 class="font-weight-bold my-2"><?=$li['tenhointeressenavaga'] == 0 ? '<span style="color:red;" >NÃO TEM INTERESSE NO ESTAGIO</span>' : '<span style="color:blue;" >TEM INTERESSE NO ESTAGIO</span>';?>  </h6>
                </div>
              </div><img src="<?=BASE_URL;?>/assets/images/TEMPLATE/user2.png" alt="Generic placeholder image" width="50" class="ml-lg-5 order-1 order-lg-2">
            </div>
            <!-- End -->
          </li>
          <!-- End -->

        <?php endforeach; ?>


      </ul>
      <!-- End -->
    </div>
  </div>
</div>

  
</body>
</html>