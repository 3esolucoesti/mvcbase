<?php 

  date_default_timezone_set("America/Sao_Paulo");  
  setlocale(LC_ALL, 'pt_BR');

  if(!empty($aviso)): ?> 
	<script type="text/javascript">
		$('#naoTemPermissao').modal('show');
		$('#naoTemPermissao .modal-content').css('width','100%');
	</script>
	<?php exit; ?>
<?php else: ?>

<?php endif; ?>	

<?php if(BASE_URL.'/users'): ?>
	<script type="text/javascript">$('.navMenuLeft').css('display','none');$('.menuMinhaConta').css('display','block');</script>
<?php endif; ?>

<script type="text/javascript">
   $(document).ready(function(){
      $('.l19').addClass('active');
   });
</script>

<style>
 


</style>

<script type="text/javascript" >


  function addatividade(obj){
    $('.myModalAdd').modal('show');
  }

  function editatividade(obj){

    var id = $(obj).attr('data-id');

    $.ajax({
        url:'<?php echo BASE_URL; ?>/painel/ajax/editarpaginasdosistema',
        type:'POST',
        dataType:'json',
        data:{id:id},
        success:function(json){

          $('.nomeEdit').val(json.name);
          $('.ideditar').val(json.id);
          
          $('.myModalEdit').modal('show');
        }   
    });

    
  }


  function delatividade(obj){
    var id = $(obj).attr('data-id');

    $('.idatividadedeletar').val(id);

    $('#deleteAtividade').modal('show');

  }


</script>

<div class="areadocs" >

    <h3 class="title" >
    PÁGINAS SISTEMA
    </h3>

    <div class="areaHeaderitem" >
      <div>
        <label style="visibility: hidden;"></label><br>
        <button type="button" class="btn btn-primary" onClick="addatividade(this)" >Adicionar</button>
      </div>
    </div>
    <br>


        <!-- Modal -->
    <div id="myModalAdd" class="modal fade myModalAdd" role="dialog" data-backdrop="static"  data-keyboard= "false">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            <h4 class="modal-title">NOME PÁGINA SISTEMA</h4>
          </div>
          <form method="POST" class="modal-body">
                
              <div>
                <label for="">Nome: </label> <br>
                <input type="text" class="form-control nome" name="nome" placeholder="Nome" required />
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-info" >CONFIRMAR</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
              </div>

          </form>
         
        </div>

      </div>
    </div>



       <!-- Modal -->
      <div id="myModalEdit" class="modal fade myModalEdit" role="dialog" data-backdrop="static"  data-keyboard= "false">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            <h4 class="modal-title">EDITAR PÁGINA SISTEMA</h4>
          </div>
          <form method="POST" class="modal-body">
                
              <div>
                <label for="">Nome:</label> <br>
                <input type="text" class="form-control nomeEdit" name="nomeEdit" placeholder="Nome" required />
              </div>

              <input type="hidden" name="ideditar" class="ideditar" required />

              <div class="modal-footer">
                <button type="submit" class="btn btn-info" >CONFIRMAR</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
              </div>

          </form>
         
        </div>

      </div>
    </div>


    
    <div class="modal fade deleteAtividade" id="deleteAtividade" data-backdrop="static"  data-keyboard= "false"role="dialog" style="position: fixed;">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <form method="POST" class="modal-body">
            	<center>
            	 	<i class="fa fa-exclamation-triangle delAviso"></i> <br><br> 
	             	<strong style="font-weight: bold;color: red;" class="atencion" > ATENÇÃO!</strong>
	            </center>

	            <p class="titleExcluir">Tem certeza que deseja excluir?</p>

	            <center>
		            <div>
		            	  <button type="submit" class="btn btn-success simDelEscolher"  >SIM</button>
		            	  <a href="javascript:;" type="button" class="btn btn-danger" data-dismiss="modal" >NÃO</a>
		            </div>
	            </center>

	            <br><br>

                <input type="hidden" name="idatividadedeletar"  class="form-control idatividadedeletar" required="required" />
            </form>
          </div>
        </div>
      </div>


    <?php if(!empty($success)): ?>
        <br><div class="alert alert-success"><center><strong><h2><?php echo $success; ?></h2></strong></center></div>
        <script type="text/javascript">
            setTimeout(function(){
              window.location.href="<?php echo BASE_URL; ?>/painel/pagessister";
            }, 1500);
          </script>
    <?php endif; ?> 


    <?php if(!empty($error)): ?>
        <br><div class="alert alert-danger"><center><strong><h2><?php echo $error; ?></h2></strong></center></div>
        <script type="text/javascript">
            setTimeout(function(){
              window.location.href="<?php echo BASE_URL; ?>/painel/pagessister";
            }, 1500);
          </script>
    <?php endif; ?> 



    <table class="table table-bordered table-striped table-hover tabelalista tablefiltro">
      <thead>
        <tr>
          <th>NOME DA PÁGINA</th>
          <th width="150" style="text-align: center;" >AÇÕES</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($paginasdosistema_lista as $li): ?>
          <tr class="" >
            <td><?php echo $li['name']; ?></td>
            <td>
              <center>
                <a href="javascript:void(0);" class="btn btn-info" onClick="editatividade(this)" data-id="<?php echo $li['id']; ?>" > <i class="fa fa-pencil-square-o"></i> </a>
                <a href="javascript:void(0);" class="btn btn-danger" onClick="delatividade(this)" data-id="<?php echo $li['id']; ?>"  ><i class="fa fa-trash"></i></a>
              </center>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    

</div>