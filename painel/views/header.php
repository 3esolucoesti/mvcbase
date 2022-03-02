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
		<title>PAINEL - <?php echo NOME_SITE; ?></title> 
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/images/TEMPLATE/<?=ICON;?>"><!-- Por icon Do site REVENDA SITE  navbar_fixed -->

    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/font-awesome.min.css">

		<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css" />
			<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/flaticon.css" />
			<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/themify-icons.css" />
			<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
			<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->

		
		<style>

      .voltarParaoSite{position: fixed;z-index: 999;color: white;}
      .voltarParaoSite div{height: 40px;background-color: #104E8B;width: 150px;line-height: 40px;padding-left: 10px;margin:auto;}
      .voltarParaoSite div:hover{background-color: #1874CD;}
      .voltarParaoSite div a{color: white;}

      .barraEditarHome{

        width:100%;
        height: 70px;
        background: #000;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;

        }


        .btnEditGeral{
        background-color: darkblue;
        color: white;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px;
        transition: 0.2s;
        }

        .btnEditGeral:hover{
        padding: 15px;
        color: white;
        transition: 0.2s;
        }

          /*EXCLUIR MODAL*/
        .fa-exclamation-triangle{color: #FFB90F; font-size: 4em;margin-bottom: -15px;}
        .atencion{font-size: 2em;}
        .titleExcluir{text-align: center;font-size: 1.2em;margin-top: 10px;}



        /* .banner_area {
            background: url(<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $info_about['imagemtopo']; ?>) no-repeat center center;
        } */

  </style>


		<script src="<?php echo BASE_URL; ?>/assets/js/jquery-3.2.1.min.js"></script>

    <script>
    
      function editimgtopo(obj){
        $('.editarImgTopo').modal('show');
      }
      
    </script>

	</head>
<body>


<!-- Modal editar -->
<div id="editarImgTopo" class="modal fade editarImgTopo" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: transparent;">
        <button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
        <h4 class="modal-title" style="text-transform: uppercase;font-size: 18px;width: 100% !important;background-color: transparent;text-align: center;" ><strong>EDITAR IMAGEM </strong> </h4>
      </div>
     
        <div class="modal-body">
            
            <br><h3>Imagem Topo</h3><br>

            <div class="">
              <center>
                <div class="imgToposEditar">
                  <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $info_about['imgfundo200']; ?>" width="400" border="0" alt="" />
                </div>
                <label>Imagem Atual</label>
              </center><br>
            </div>

            <form method="POST" enctype="multipart/form-data"  action="<?php echo BASE_URL; ?>/painel/pgabout/imgTopoEdit" >

              <label>Alterar Imagem: </label><strong style="color: red;font-size: .9em;" > ( OBS: TAMANHO MÁXIMO 1MB / 1920px X 450px )</strong>
              <input type="file"  name="photoFundoTopoEditar" required="required" class="form-control photoFundoTopoEditar"  ><br>
              
              <input type="hidden" name="pgURL" value="<?php $url = $_GET['url']; echo $url; ?>" >

              <div class="modal-footer">
                  <input type="submit" value="ATUALIZAR" class="btn btn-primary" >
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color: red;" data-dismiss="modal" >CANCELAR</button>
              </div>


            </form>

        
        </div>
       
    </div>

  </div>
</div>
    
  <div class="voltarParaoSite">
    <div>
      <i class="fa fa-arrow-left"></i> <a href="<?php echo BASE_URL; ?>/painel" >IR PARA PAINEL</a>
    </div> 
  </div>

 <!-- colocar conteudo header -->
