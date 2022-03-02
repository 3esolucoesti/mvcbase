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

	<?php if(BASE_URL.'/painel/permissions'): ?>
		.menuarea2 ul .permissionsPg a{background: #000;border-left: 2px solid yellow;}
		/*
		.menuarea2 li:nth-child(1){background-image: url('<?php echo BASE_URL; ?>/assets/images/template/key.png');height: 40px;line-height: 40px;font-size: 13px;padding-left: 30px;background-size: 15px;background-repeat: no-repeat;background-position: 10px 11px;}*/
	<?php endif; ?>
		
	<?php if(BASE_URL.'/painel/permissions'): ?>
		.menuarea2 ul .permissionsPg a{background: #000;border-left: 2px solid yellow;}/*
		.menuarea2 li:nth-child(1){background-image: url('<?php echo BASE_URL; ?>/assets/images/template/key.png');height: 40px;line-height: 40px;font-size: 13px;padding-left: 30px;background-size: 15px;background-repeat: no-repeat;background-position: 10px 11px;}*/
	<?php endif; ?>

</style>

<h1>Permissões - Adicionar</h1>

<form method="post" class="form">

	<label for="name" class="nome_titulo">Nome da Permissão</label>
	<input type="text" name="name" id="name" placeholder="Nome da Permissão" autofocus="autofocus" class="form-control" required="required"><br>

	<input type="text" name="descricion" id="descricion" placeholder="Descrição da Permissão" autofocus="autofocus" class="form-control" required="required"><br>

	<select name="public_private" id="public_private" class="form-control public_private" required="required" >
		<option value="0" selected >Publica</option>
		<option value="1">Privada</option>
	</select><br>

	<select name="lista_pages" id="lista_pages" class="form-control lista_pages" required="required" >
		<option value="" selected >Seleciona Página</option>
		<?php foreach($lista_pages as $li): ?>
			<option value="<?php echo $li['id']; ?>"><?php echo $li['name']; ?></option>
		<?php endforeach; ?>
	</select><br>

	<input type="submit" class="btn btn-info add" value="Adicionar" >
	<a href="<?php echo BASE_URL; ?>/painel/permissions" class="btn btn-danger" style="margin-top:12px;">Cancelar</a>
</form>