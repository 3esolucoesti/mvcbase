<?php if(!empty($aviso)): ?>  
	<script type="text/javascript">
		$('#naoTemPermissao').modal('show');
		$('#naoTemPermissao .modal-content').css('width','100%');
		$('#naoTemPermissao').css('z-index','99999999999999');
	</script>
	<?php exit; ?>
<?php else: ?>

<?php endif; ?>	

<?php if(BASE_URL.'/painel/permissions/'): ?>
	<script type="text/javascript">$('.navMenuLeft').css('display','none');$('.menuMinhaConta').css('display','block');</script>
<?php endif; ?>

<script type="text/javascript">
   $(document).ready(function(){
        $('.listNavBar ul .l2').css('background','<?php echo COR_MARCACAO; ?>');
   });
</script>


<style type="text/css">
	#name{width: 90%;}
	.nome_titulo{font-size: 1.2em;}
	.form{margin-top: 40px;}
	.add{margin-top: 10px;}
.avisoPreencher{display: none;}
	<?php if(BASE_URL.'/painel/permissions'): ?>
		.menuarea2 ul .permissionsPg a{background: #000;border-left: 2px solid yellow;}/*
		.menuarea2 li:nth-child(1){background-image: url('<?php echo BASE_URL; ?>/assets/images/template/key.png');height: 40px;line-height: 40px;font-size: 13px;padding-left: 30px;background-size: 15px;background-repeat: no-repeat;background-position: 10px 11px;}*/
	<?php endif; ?>
		
	<?php if(BASE_URL.'/painel/permissions'): ?>
		.menuarea2 ul .permissionsPg a{background: #000;border-left: 2px solid yellow;}/*
		.menuarea2 li:nth-child(1){background-image: url('<?php echo BASE_URL; ?>/assets/images/template/key.png');height: 40px;line-height: 40px;font-size: 13px;padding-left: 30px;background-size: 15px;background-repeat: no-repeat;background-position: 10px 11px;}*/
	<?php endif; ?>


	.caixapermissions{
		display: flex;
		flex-wrap: wrap;
	}

	.conteinerP{
		width: 320px;
		margin-bottom: 50px;
		margin-right: 20px;
	}

	.headerPage{
		height: 50px;
		background:#333;
		display: flex;
		justify-content:space-between;
		align-items:center;
		color: white;
		text-align: center;
		font-weight: bold;
		padding-right: 10px;
		padding-left: 10px;
		

	}

	.paddingcontainerP{
		background: green;
		color: white;
		padding: 5px;
		height: 100%;
	}

	.separarlinhas{
		padding: 5px;
		border-bottom: 2px solid #ccc;
	}
	
</style>

   		<script type="text/javascript">
			$(function(){
				$('.add').on('click', function(e){	

					if( $(".permissions").is(":checked") == true ){
						// e.preventDefault();
						// alert("OPA");
					}else{
						e.preventDefault();
						$('.avisoPreencher').css('display','block');
					}

		   		});
			})
		</script>

<h1>Permissões - Adicionar Grupos de Permissões</h1>

	<div class="alert alert-danger avisoPreencher"><center><strong>É preciso escolher um Permissões</strong></center></div>

<form method="post" class="form">
	<label for="name" class="nome_titulo">Nome do Grupo de Permissões</label>
	<input type="text" name="name" id="name" placeholder="Nome do Grupo de Permissões" autofocus="autofocus" class="form-control" required="required"><br/>

	<label class="nome_titulo" >Permissões</label><br/>
	<div class="caixapermissions" >
		<?php 
		$total2 = 1;
		foreach($lista_pages as $page): ?>
			<div class="conteinerP" >
				<div class="headerPage" > <?php echo $page['name']; ?> <br> <span style="margin-left: 10px;background:#2bb515;color:white;padding:5px;font-size: 14px;" ><?php echo $total2++; ?></span> </div>
				<div class="paddingcontainerP" >

							<?php 
								$total = 1;
								foreach($permissions_list as $p): ?>

								<?php if($page['id'] == $p['page_reference']): ?>
								
									<label class="separarlinhas" > <span style="margin-left: 10px;background:#2bb515;color:white;padding:3px;" ><?php echo $total++; ?></span> <input style="float: left;margin-top: 2px;" type="checkbox" class="permissions" name="permissions[]" value="<?php echo $p['id']; ?>" /> <?php echo '&nbsp;'.$p['name_apresentar']; ?></label><br/> 

								<?php endif; ?>

								<!-- utf8_encode($p['name_apresentar']); -->
							<?php endforeach; ?>

				</div>
			</div>
		<?php endforeach; ?>
	</div>


	<input type="submit" class="btn btn-info add" value="Adicionar" >
	<a href="<?php echo BASE_URL; ?>/painel/permissions" class="btn btn-danger" style="margin-top:12px;">Cancelar</a>
</form>