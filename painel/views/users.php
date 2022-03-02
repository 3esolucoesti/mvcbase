<?php if(!empty($aviso)): ?> 
	<script type="text/javascript">
		$('#naoTemPermissao').modal('show');
		$('#naoTemPermissao .modal-content').css('width','100%');
	</script>
	<?php exit; ?>
<?php else: ?>

<?php endif; ?>	

<?php if(BASE_URL.'/painel/users'): ?>
	<script type="text/javascript">$('.navMenuLeft').css('display','none');$('.menuMinhaConta').css('display','block');</script>
<?php endif; ?>

<script type="text/javascript">
   $(document).ready(function(){
        $('.listNavBar ul .l3').css('background','<?php echo COR_MARCACAO; ?>');
   });
</script>

<style type="text/css">
	.table-bordered{width: 100%;}

	<?php if(BASE_URL.'/painel/users'): ?>
		.menuarea2 ul .userPg a{background: #000;border-left: 2px solid yellow;}/*
		.menuarea2 li:nth-child(2){background-image: url('<?php echo BASE_URL; ?>/assets/images/template/user.png');height: 40px;line-height: 40px;font-size: 13px;padding-left: 30px;background-size: 15px;background-repeat: no-repeat;background-position: 10px 11px;}*/
	<?php endif; ?>
		
	<?php if(BASE_URL.'/users'): ?>
		.menuarea2 ul .userPg a{background: #000;border-left: 2px solid yellow;}/*
		.menuarea2 li:nth-child(2){background-image: url('<?php echo BASE_URL; ?>/assets/images/template/user.png');height: 40px;line-height: 40px;font-size: 13px;padding-left: 30px;background-size: 15px;background-repeat: no-repeat;background-position: 10px 11px;}*/
	<?php endif; ?>

	.btn-default{background: #1F3F77;border:1px solid #1F3F77;color: white;padding: 11px;}
	.btn-default:hover{background: rgba(25,25,112,1);border:1px solid #1F3F77;color: white;}

    .caixapontuacao{}
    .caixapontuacao .titlePontu{font-size: 1.2em;}

    .clickSelection{width: 100%;margin:auto;margin-top: 50px;margin-bottom: 20px;display: none;}
    .clickSelection label{font-size: 1em;}
    .clickSelection input{width: 80px;margin-right: 10px;}
    .clickSelection button{margin-left: 10px;}
    .campolitros,.passerrado{display: none;}
    .clickSelectionTitulo{float: left;margin-top: 5px;margin-right: 10px;}
    .nlitros{float: left;}

    .areaPontoss{display: flex;}
    .seis_prime_nume{width: 49%;margin-right: 10px;}
    .seis_ulti_nume{width: 49%;}

    .modal-title{font-size: 2em;color: #999;padding-top: 30px;}

    .logoEmpresa{height: 120px;}
    .logoEmpresa img{height: 100%;}

    .senhaUserAddPonto{display: none;}  

    .nameUser2{font-size: 2em;}
    .totalPontosClients{font-size: 1.3em;}
    .pontTotal{font-size: 2.5em;background: blue;padding:30px;border-radius: 100%;color: white;}
    .irAoInicio{font-size: 1.3em;}
    .nameUltimoAtendent{}



  </style>

<script type="text/javascript">
	$(function(){
		  $('.CancelRegisterUser').on('click', function(){
              var id = $(this).attr('data-id');

              $('.idSelectCancell').val(id);

              $('#myModal2').modal('show');
          });
           
          
          $('.clickSimCancel').on('click', function(){
              var id = $('.idSelectCancell').val();
              window.location.href = "<?php echo BASE_URL; ?>/painel/users/delete/"+id;
          });
          
	});
</script>

  <!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog" style="position: fixed;" data-backdrop="static">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
      </div>
      <div class="modal-body">
        <center>
          <i class="fa fa-exclamation-triangle" style="font-size: 5em;color: #FFC125;"></i><br>
          <p style="font-size: 1.3em;font-weight: bold;">TEM CERTEZA QUE DESEJA EXCLUIR?</p><br><br>
          <input type="hidden" name="idSelectCancell"  class="idSelectCancell" >
          <a href="javascript:;" class="btn btn-success clickSimCancel" >SIM</a>
          <button class="btn btn-danger" data-dismiss="modal" >NÃO</button>
        </center> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="display: none;">Close</button>
      </div>
    </div>

  </div>
</div>

<div class="container-fluid">


  <div class="titulosite">
    <center><label style="font-size: 2em;" >USUÁRIOS</label></center>
  </div>
 <div class="caixapontuacao">
    <label class="titlePontu"></label><br><br>
 <br/><a href="<?php echo BASE_URL; ?>/painel/users/add/" class="btn btn-default">Adicionar -  Usuário</a><br/><br/>
		<table class="table table-bordered" >
		    <thead>
		      <tr>
		        <th>Email Usuário</th>
		        <th width="200">Grupo Usuário</th>
		        <th width="180" style="text-align: center;">AÇÕES</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($users_list as $us): ?>
				      <tr>
				        <td><?php echo $us['email']; ?></td>
				        <td><?php echo $us['name']; ?></td>
				        <td>
				        	<center>
				        		<?php if($us['id'] == '1'): ?>
				        			<?php if($grupo == '1'): ?>
				        				<a href="<?php echo BASE_URL; ?>/painel/users/edit/<?php echo $us['id']; ?>" class="btn btn-info">Editar</a>
				        			<?php endif; ?>	
				        			<?php else: ?>
				        				<a href="<?php echo BASE_URL; ?>/painel/users/edit/<?php echo $us['id']; ?>" class="btn btn-info">Editar</a>
				        		<?php endif; ?>
				        		

				        		<?php if($us['id'] != 1): ?>
				        			<a href="javascript:;" data-id="<?php echo $us['id']; ?>" class="btn btn-danger CancelRegisterUser">Excluir</a>
				        		<?php endif; ?>	
				        	</center>	
				        </td>
				      </tr>
		        <?php endforeach; ?>
		    </tbody>
		  </table>
</div>	
</div>	  