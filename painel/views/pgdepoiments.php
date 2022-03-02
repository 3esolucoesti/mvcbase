<?php include_once('views/headerAuxiliar.php'); ?> 

<style type="text/css" media="screen">
	  	 body{background-color: #c28630 !important;}
	  	.voltarParaoSite{position: fixed;z-index: 999;width: 100%;color: white;}
	  	.voltarParaoSite div{height: 40px;background-color: #104E8B;width: 150px;line-height: 40px;padding-left: 10px;margin:auto;}
	  	.voltarParaoSite div:hover{background-color: #1874CD;}
	  	.voltarParaoSite div a{color: white;}

	  	.containerr{width: 100%;min-height: 300px;margin:auto;background-color: #c28630;margin-top: 0px;}
	  	.cabecalho{min-height: 50px;background-color: #a16003;}
	  	.cabecalho .tituPrin{text-align: center;width: 100%;}
	  	.cabecalho .tituPrin label{font-size:2.5em;color: white;margin-top: 100px;font-weight: bold;margin-bottom: 60px;}

	  	.btn-sucess{background-color: #5cb85c;border-color: #4cae4c; color: white; margin-top: 20px; margin-bottom: 20px; margin-left: 10px; }
	  	.btn-sucess:hover{background-color: #4ea74e; color: #e9e9e9; }

	  	.btn-primary{background-color: #337ab7;border-color: #2e6da4; color: white;}
	  	.btn-primary:hover{background-color: #236399; color: #e9e9e9; }

	  	.containerr .divAddInden{width: 98%;margin: auto;margin-top: 50px;background-color: #a16003;}
		.containerr table{width: 98%;margin: auto;margin-top: 0px;background-color: transparent;}
		.containerr table th{}
		.imgSlideEditar img{border:5px solid #e9e9e9;border-radius: 5px;}

		/*EXCLUIR MODAL*/
		.fa-exclamation-triangle{color: #FFB90F; font-size: 4em;margin-bottom: -15px;}
		.atencion{font-size: 2em;}
		.titleExcluir{text-align: center;font-size: 1.2em;margin-top: 10px;}

		.imgTable{width: 50px;}
		.sexoTable{}
		.descrTable{}
		.depoiTable{}
		.tituTable{width: 200px;}
		.acoesTable{width: 230px;}
		.imgTable{}

	  </style>


<script type="text/javascript">	
	$(function(){
		$('.clickEditDepo').on('click', function(){
			var id = $(this).attr('data-id');

			$.ajax({
				url:'<?php echo BASE_URL; ?>/painel/ajax/conteudoPgDepoimento',
				type:'POST',
				dataType:'json',
				data:{id:id},
				success:function(json){

					$('.imgDepoEditar').html('<img src="<?php echo BASE_URL; ?>/painel/assets/images/'+json.images200+'" height="200" alt="" border="0" />');
					$('.nameDepoEditar').val(json.name);
					$('.DepoEditar').val(json.depoiment);
					$('.idDepoEditar').val(id);

					$('.editDepoi').modal('show');
				},
				error:function(){
					console.log("ERROR: ");
				}
			});

		});

		//EXCLUIR MODAL 
		$('.clickDelDepo').on('click', function(){
			var id = $(this).attr('data-id');

			$('.idDepoEditar').val(id);

			$('#deleteDepoi').modal('show');

		});
		$('.simDelEscolher').on('click', function(){
			var id = $('.idDepoEditar').val();

			window.location.href = "<?php echo BASE_URL; ?>/painel/pgdepoiments/delDepoi/"+id;

		});

	});
</script>


	</head>

<body style="background-color: #e9e9e9;" >
	
	<div class="voltarParaoSite">
		<div>
		    <i class="fa fa-arrow-left"></i> <a href="<?php echo BASE_URL; ?>/painel" >IR PARA PAINEL</a>
		</div>	
	</div>

	<div class="container-fluid" style="margin:0px;padding: 0px;" >

	<div class="modal " id="naoTemPermissao" data-backdrop="static" role="dialog" style="position: fixed;">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <center><h1 style="font-weight: bold;color: red;">ATENÇÃO!</h1></center>
              <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <center>
                  <h4 style="color: black;">VOCÊ NÃO TEM PERMISSÃO PARA <strong style="color: blue;font-weight: bold;text-decoration: underline;">ALTERAR</strong> e/ou <strong style="color: blue;font-weight: bold;text-decoration: underline;">EXCLUIR</strong> e/ou <strong style="color: blue;font-weight: bold;text-decoration: underline;"> ENTRAR</strong> NESSA AREA!</h4>
                </center> 
            </div>
            <div class="modal-footer">
              <a href="<?php echo BASE_URL; ?>/painel" type="button" class="btn btn-default">SAIR</a>
            </div>
          </div>
        </div>
    </div>
      

	<div class="modal " id="deleteDepoi" data-backdrop="static" role="dialog" style="position: fixed;z-index: 999999;">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body">
            	<center>
            	 	<i class="fa fa-exclamation-triangle"></i> <br><br> 
	             	<strong style="font-weight: bold;color: red;" class="atencion" > ATENÇÃO!</strong>
	            </center>

	            <p class="titleExcluir">Tem certeza que deseja excluir?</p>

	            <center>
		            <div>
		            	  <a href="javascript:;" type="button" class="btn btn-success simDelEscolher"  >SIM</a>
		            	  <a href="javascript:;" type="button" class="btn btn-danger" data-dismiss="modal" >NÃO</a>
		            </div>
	            </center>

	            <br><br>

                <input type="hidden" name="idSlideDell"  class="form-control idSlideDell" required="required" />
            </div>
          </div>
        </div>
      </div>

<!-- Modal adicionar -->
<div id="addDepoi" class="modal " role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: transparent;">
        <button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
        <h4 class="modal-title" style="text-transform: uppercase;font-size: 18px;width: 100% !important;background-color: transparent;text-align: center;" ><strong>NOVO DEPOIMENTO </strong> </h4>
      </div>
     
	      <div class="modal-body">
		        
				  	<br><h3>Adicionar novo depoimentos</h3><br>


				  	<form method="POST" enctype="multipart/form-data" >

				  	<label>Escolher Imagem:</label> <strong style="color: red;font-size: .9em;" >( OBS: TAMANHO MÁXIMO 1MB / 400px X 400px )</strong>
				  	<input type="file"  name="photoDepo" class="form-control photoDepo" required="required" ><br>
				  	
				  	<label>Nome:</label>
				  	<input type="text" name="namePessoDepo"  class="form-control namePessoDepo" required="required" ><br>

					<label>Depoimentos:</label>
					<textarea  class="form-control depoimentoEsDepo" name="depoimentoEsDepo" style="height: 150px;" required="required" ></textarea><br> <!-- required="required" -->

				  	<div class="modal-footer">
				      	<input type="submit" value="ADICIONAR" class="btn btn-primary" >
				        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
				    </div>


				    </form>

				
	      </div>
	     
    </div>

  </div>
</div>


<!-- Modal editar -->
<div id="editDepoi" class="modal  editDepoi" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: transparent;">
        <button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
        <h4 class="modal-title" style="text-transform: uppercase;font-size: 18px;width: 100% !important;background-color: transparent;text-align: center;" ><strong>EDITAR DEPOIMENTO </strong> </h4>
      </div>
     
	      <div class="modal-body">
		        
				  	<br><h3>Editar novo depoimento</h3><br>

				  	<div class="">
					  	<center>
					  		<div class="imgDepoEditar">
					  			
					  		</div>
					  		<label>Imagem Atual</label>
					  	</center><br>
				  	</div>

				  	<form method="POST" enctype="multipart/form-data" >

				  	<label>Alterar Imagem: </label><strong style="color: red;font-size: .9em;" > ( OBS: TAMANHO MÁXIMO 1MB / 400px X 400px )</strong>
				  	<input type="file"  name="photoDepoEditar" class="form-control photoDepoEditar"  ><br>
				  	
				  	<label>Alterar Titulo:</label>
				  	<input type="text" name="nameDepoEditar"  class="form-control nameDepoEditar" required="required" ><br>

				  	<input type="hidden" name="idDepoEditar"  class="form-control idDepoEditar" required="required" />


					<label>Alterar Depoimentos:</label>
					<textarea  class="form-control DepoEditar" name="DepoEditar" style="height: 150px;" required="required" ></textarea><br>

				  	<div class="modal-footer">
				      	<input type="submit" value="ATUALIZAR" class="btn btn-primary" >
				        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
				    </div>


				    </form>

				
	      </div>
	     
    </div>

  </div>
</div>

     <div class="containerr">
     	<div class="cabecalho">
     		<div class="tituPrin">
     			<label>ÁREA DEPOIMENTOS</label>
     		</div>	
     	</div>

     	<div class="divAddInden">
     		<a href="<?php echo BASE_URL; ?>/painel/pghome" class="btn btn-info" style="margin-left: 5px;" > <i class="fa fa-arrow-left"></i> VOLTAR EDITAR PÁGINA HOME </a>
     		<a href="<?php echo BASE_URL; ?>/painel" class="btn btn-sucess" data-target="#addDepoi" data-toggle="modal" > <i class="fa fa-upload"></i> ADICIONAR DEPOIMENTO </a>
     	</div>

     	 <table class="table table-bordered">
     	 	
		    <thead>
		      <tr>
		        <th width="50" >IMAGEM</th>
		        <th class="tituTable">NOME</th>
		        <th class="depoiTable">DEPOIMENTO</th>
		        <th class="acoesTable" style="text-align: center;" >AÇÕES</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php foreach($list_depo as $depo): ?>
			      <tr>
			        <td><img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $depo['images120']; ?>" style="border:2px solid #e9e9e9;border-radius: 5px;" class="imgTable" border="0" alt="" /></td>
			        <td><?php echo $depo['name']; ?></td>
			        <td><?php echo $depo['depoiment']; ?></td>
			        <td>
			        	<center>
			        		<a href="javascript:;" title="" class="btn btn-primary clickEditDepo" data-id="<?php echo $depo['id']; ?>" style="margin-bottom: 5px;" ><i class="fa fa-ravelry"></i> EDITAR</a>
			        		<a href="javascript:;" title="" class="btn btn-danger clickDelDepo" data-id="<?php echo $depo['id']; ?>" ><i class="fa fa-trash-o"></i> EXCLUIR</a>
			        	</center>	
			        </td>
			      </tr>
					<?php endforeach; ?>
		    </tbody>
		  </table>
		  <br><br>

     </div>



  </div>
  
<?php include_once('views/footerAuxiliar.php'); ?>


