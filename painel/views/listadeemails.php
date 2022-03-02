<style type="text/css">
	.atencion{width: 150px;}
</style>

<center><h1>MEUS E-MAILS</h1></center>
<br><br>



<script type="text/javascript">
	$(function(){
		$('.abrirMsg').on('click', function(){

			var id = $(this).attr('data-id');
			var name = $(this).attr('data-name');
			var phone = $(this).attr('data-phone');
			var email = $(this).attr('data-email');
			var assunto = $(this).attr('data-assunto');
			var menssage = $(this).attr('data-mensagem');
			var data_envio = $(this).attr('data-dataenvio');

			$('.idCasoDel').val(id);
			$('.nameP').html(name);
			$('.phoneP').html(phone);
			$('.emailP').html(email);
			$('.assuntoP').html(assunto);
			$('.mensagemP').html(menssage);
			$('.dataaenvio').html('Data Envio: '+data_envio);


			$.ajax({
				url:'<?php echo BASE_URL; ?>/painel/ajax/mudastatus',
				type:'POST',
				dataType:'json',
				data:{id:id},
				success:function(json){

				}
			});
		});

		$('.jaabariu').on('click', function(){
			var id = $(this).attr('data-id');
			var name = $(this).attr('data-name');
			var phone = $(this).attr('data-phone');
			var email = $(this).attr('data-email');
			var assunto = $(this).attr('data-assunto');
			var menssage = $(this).attr('data-mensagem');
			var data_envio = $(this).attr('data-dataenvio');

			$('.idCasoDel').val(id);
			$('.nameP').html(name);
			$('.phoneP').html(phone);
			$('.emailP').html(email);
			$('.assuntoP').html(assunto);
			$('.mensagemP').html(menssage);
			$('.dataaenvio').html('Data Envio: '+data_envio);
		});

		$('.mensagemfoifechada').on('click', function(){
			window.location.href = "<?php echo BASE_URL; ?>/painel/pgcontact/lista_msg";
		});

		$('.confirMeExclusao').on('click', function(){
			var id = $('.idCasoDel').val();

			window.location.href = "<?php echo BASE_URL; ?>/painel/pgcontact/delmsg/"+id;

		});

	});
</script>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog" style="position: fixed;" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">MENSAGEM</h4></center>
      </div>
      <div class="modal-body">
      			<style>
					.containerPrincipal{min-height:500px;background:#f2f2f2;}
					.topo{height:100px;background:#2b2d76;color:white;}
					.topo h1{padding-top:35px;}
					.conteudoD{padding:20px;}
				</style>
       		<div class='containerPrincipal'>
							<div class='topo'>
								<center><h1>AVISO!</h1></center>
							</div>
							<div class='conteudoD'>
								Olá <strong><?php echo NOME_SITE; ?></strong>, <br/>
								Você recebeu um novo e-mail enviado por um visitante do seu site. <br/><br/>

								<input type="hidden" name="idCasoDel" class="idCasoDel">

								<strong>Nome: </strong> <span class="nameP"></span> <br/> 
								<strong>Telefone: </strong> <span class="phoneP"></span> <br/>
								<strong>E-mail: </strong> <span class="emailP"></span> <br/> 
								<strong>Assunto: </strong> <span class="assuntoP"></span> <br/>
								<br/>
								<textarea class="form-control mensagemP" style="height: 200px;" ></textarea>
								<br>
								<p class="dataaenvio"></p>
							</div>
						</div>
      		</div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success mensagemfoifechada">FECHAR</button>
        <button type="button" class="btn btn-danger excluirMsg" data-toggle="modal" data-target="#excluirMsg">Excluir</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="excluirMsg" class="modal fade" role="dialog" style="position: fixed;">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
      </div>
      <div class="modal-body">
       <center>
       	<img src="<?php echo BASE_URL; ?>/painel/assets/images/atencion.png" class="atencion">
       	<h4 class="modal-title">TEM CERTEZA QUE DESEJA <strong style="color: red;">EXCLUIR</strong> ESSA MENSAGEM</h4>
       </center>
      </div>
      <div class="modal-footer">
      	<a href="javascript:;" class="btn btn-success confirMeExclusao">CONFIRMAR</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
      </div>
    </div>

  </div>
</div>

<div>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>E-MAIL</th>
        <th>ASSUNTO</th>
        <th>AÇÕES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($lista_emails as $li): ?>	
	      <tr>
	        <td><?php echo $li['name']; ?></td>
	        <td><?php echo $li['phone']; ?></td>
	        <td><?php echo $li['email']; ?></td>
	        <td><?php echo $li['assunto']; ?></td>
	        <?php if($li['status'] == 0): ?>
	        	<td><button type="button" class="btn btn-info abrirMsg" data-toggle="modal" data-target="#myModal1" data-id="<?php echo $li['id']; ?>" data-name="<?php echo $li['name']; ?>" data-phone="<?php echo $li['phone']; ?>" data-email="<?php echo $li['email']; ?>" data-assunto="<?php echo $li['assunto']; ?>" data-mensagem="<?php echo $li['mensagem']; ?>" data-dataenvio="<?php echo $li['dataenvio']; ?>"   >ABRIR</button></td>
	        <?php elseif($li['status'] == 1): ?>	
	        	<td><button type="button" class="btn btn-primary jaabariu" data-toggle="modal" data-target="#myModal1" data-id="<?php echo $li['id']; ?>" data-name="<?php echo $li['name']; ?>" data-phone="<?php echo $li['phone']; ?>" data-email="<?php echo $li['email']; ?>" data-assunto="<?php echo $li['assunto']; ?>" data-mensagem="<?php echo $li['mensagem']; ?>" data-dataenvio="<?php echo $li['dataenvio']; ?>"  >ABERTA</button></td>
	    	<?php endif; ?>
	      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>


	<!-- <div class="areaPaginacao">
        <?php for ($q=1; $q <=$paginas ; $q++): ?>
        <ul class="pagination">
          <li class="<?php echo($paginaAtual == $q)? 'active' : ''; ?>" ><a href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_msg?p=<?php echo $q; ?>" class="<?php echo($paginaAtual == $q)? 'active' : ''; ?>" ><?php echo $q; ?></a></li>
        </ul>
      <?php endfor ?>
  </div> -->

	</div>
