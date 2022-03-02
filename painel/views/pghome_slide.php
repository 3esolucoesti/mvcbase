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
		.racaTable{}
		.tituTable{}
		.acoesTable{width: 250px;}
		.imgTable{}

		.areaPaginacao{background: transparent;width: 95%; margin:auto; display: flex; justify-content: right;}
		.pagination a{border:1px solid #fff;padding: 5px;float: right;margin-right: 10px;background: #a16003; color: white;}
	    .pagination .active{background: #000;}

	  </style>

<script src="<?php echo BASE_URL; ?>/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	// $(document).ready(function(){
	// 	//$('#deleteSlide').modal('show');
	// 	CKEDITOR.replace( 'descSlide', {
	// 		toolbarGroups: 
	// 		[		
	// 	 		{ name: '', groups: [ 'basicstyles' ] }	
	// 		]
	// 	});
	// });
</script>
<script type="text/javascript">	
	$(function(){
		$('.clickEditSlide').on('click', function(){
			var id = $(this).attr('data-id');

			$.ajax({
				url:'<?php echo BASE_URL; ?>/painel/ajax/conteudoPgSlideHome',
				type:'POST',
				dataType:'json',
				data:{id:id},
				success:function(json){

					$('.imgSlideEditar').html('<img src="<?php echo BASE_URL; ?>/painel/assets/images/'+json.images200+'" height="200" alt="" border="0" />');
					$('.tituSlideEditar').val(json.title);
					// CKEDITOR.replace( 'descSlideEditar', {
					// 	toolbarGroups: 
					// 	[		
		 		// 			{ name: '', groups: [ 'basicstyles' ] }	
					// 	]
					// });
					$('.descSlideEditar').val(json.descricion);
					$('.idSlideEditar').val(id);

					$('.editSlide').modal('show');
				},
				error:function(){
					console.log("ERROR: ");
				}
			});

		});

		//EXCLUIR MODAL 
		$('.clickDelSlide').on('click', function(){
			var id = $(this).attr('data-id');

			$('.idSlideDell').val(id);

			$('#deleteSlide').modal('show');

		});
		$('.simDelEscolher').on('click', function(){
			var id = $('.idSlideDell').val();

			window.location.href = "<?php echo BASE_URL; ?>/painel/pghome/delSlide/"+id;

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
      



<!-- Modal adicionar -->
<div id="addSlide" class="modal " role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: transparent;">
        <button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
        <h4 class="modal-title" style="text-transform: uppercase;font-size: 18px;width: 100% !important;background-color: transparent;text-align: center;" ><strong>NOVO SLIDE </strong> </h4>
      </div>
     
	      <div class="modal-body">
		        
				  	<br><h3>Adicionar novo slide</h3><br>


				  	<form method="POST" enctype="multipart/form-data" >

				  	<label>Escolher Imagem:</label> <strong style="color: red;font-size: .9em;" >( OBS: TAMANHO MÁXIMO 1MB / 1920px X 1044px )</strong>
				  	<input type="file"  name="photoSlide" class="form-control photoSlide" required="required" ><br>
				  	
				  	<label>Titulo:</label>
				  	<input type="text" name="tituSlide"  class="form-control tituSlide" required="required" ><br>

				  	<label>Descrição:</label>
					<textarea  class="form-control descSlide" name="descSlide" style="height: 300px;"  ></textarea><br> <!-- required="required" -->

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
<div id="editSlide" class="modal  editSlide" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: transparent;">
        <button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
        <h4 class="modal-title" style="text-transform: uppercase;font-size: 18px;width: 100% !important;background-color: transparent;text-align: center;" ><strong>EDITAR SLIDE </strong> </h4>
      </div>
     
	      <div class="modal-body">
		        
				  	<br><h3>Editar novo slide</h3><br>

				  	<div class="">
					  	<center>
					  		<div class="imgSlideEditar">
					  			
					  		</div>
					  		<label>Imagem Atual</label>
					  	</center><br>
				  	</div>

				  	<form method="POST" enctype="multipart/form-data" >

				  	<label>Alterar Imagem: </label><strong style="color: red;font-size: .9em;" > ( OBS: TAMANHO MÁXIMO 1MB / 1920px X 1044px )</strong>
				  	<input type="file"  name="photoSlideEditar" class="form-control photoSlideEditar"  ><br>
				  	
				  	<label>Alterar Titulo:</label>
				  	<input type="text" name="tituSlideEditar"  class="form-control tituSlideEditar" required="required" ><br>

				  	<input type="hidden" name="idSlideEditar"  class="form-control idSlideEditar" required="required" />

				  	<label>Alterar Descrição:</label>
					<textarea  class="form-control descSlideEditar" name="descSlideEditar" style="height: 300px;"  ></textarea><br>

				  	<div class="modal-footer">
				      	<input type="submit" value="ATUALIZAR" class="btn btn-primary" >
				        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
				    </div>


				    </form>

				
	      </div>
	     
    </div>

  </div>
</div>

	<div class="modal " id="deleteSlide" data-backdrop="static" role="dialog" style="position: fixed;">
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


     <div class="containerr">
     	<div class="cabecalho">
     		<div class="tituPrin">
     			<label>SLIDE SHOW PÁGINA HOME</label>
     		</div>	
     	</div>

     	<div class="divAddInden">
     		<a href="<?php echo BASE_URL; ?>/painel/pghome" class="btn btn-info" style="margin-left: 5px;" > <i class="fa fa-arrow-left"></i> VOLTAR EDITAR PÁGINA HOME </a>
     		<a href="<?php echo BASE_URL; ?>/painel" class="btn btn-sucess" data-target="#addSlide" data-toggle="modal" > <i class="fa fa-upload"></i> ADICIONAR SLIDE </a>
     	</div>

     	 <table class="table table-bordered">
     	 	
		    <thead>
		      <tr>
		        <th width="50" >IMAGEM</th>
		        <th class="tituTable" >TITULO</th>
		        <th>DESCRIÇÃO</th>
		        <th  class="acoesTable" style="text-align: center;" >AÇÕES</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php foreach($list_slide as $slide): ?>
			      <tr>
			        <td><img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $slide['images80']; ?>" class="imgTable" style="border:2px solid #e9e9e9;border-radius: 5px;"  border="0" alt="" /></td>
			        <td><?php echo $slide['title']; ?></td>
			        <td><?php echo $slide['descricion']; ?></td>
			        <td>
			        	<center>
			        		<a href="javascript:;" title="" class="btn btn-primary clickEditSlide" data-id="<?php echo $slide['id']; ?>" ><i class="fa fa-ravelry"></i> EDITAR</a>
			        		<a href="javascript:;" title="" class="btn btn-danger clickDelSlide" data-id="<?php echo $slide['id']; ?>" ><i class="fa fa-trash-o"></i> EXCLUIR</a>
			        	</center>	
			        </td>
			      </tr>
			    <?php endforeach; ?>
		    </tbody>
		  </table>
		  <br><br>

		  

     </div>

  </div>

  <div class="areaPaginacao">
  	<?php for ($q=1; $q <=$paginas ; $q++): ?>
		    <ul class="pagination">
		      <li class="<?php echo($paginaAtual == $q)? 'active' : ''; ?>" ><a href="<?php echo BASE_URL; ?>/painel/pghome/lista_slide?p=<?php echo $q; ?>" class="<?php echo($paginaAtual == $q)? 'active' : ''; ?>" ><?php echo $q; ?></a></li>
		    </ul>
		  <?php endfor ?>
  </div>


<?php include_once('views/footerAuxiliar.php'); ?>