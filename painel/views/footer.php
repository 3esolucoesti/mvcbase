<script>
        $(document).ready(function(){
            //$('.editRodape').modal('show');
        });

        function editRodape(obj){
            $('.editRodape').modal('show');
        }

    </script>


		<!-- Modal -->
    <div id="editRodape" class="modal fade editRodape" role="dialog" data-backdrop="static" style="position:fixed;" >
			<div class="modal-dialog modal-lg">

					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header" style="background-color: transparent;">
							<button type="button" class="close" data-dismiss="modal" style="display: none;">&times;</button>
							<h4 class="modal-title" style="text-transform: uppercase;font-size: 18px;width: 100% !important;background-color: transparent;text-align: center;" ><strong>EDITANDO RODAPÉ </strong> <br> [ Endereço / Contatos ] [ Links Redes Sociais  ]  </h4>
					</div>
									<form class="modal-body" method="POST" action="<?php echo BASE_URL; ?>/painel/pghome/headerfooter" >

											<input type="hidden" name="enviourodapeparaeditar" class="enviourodapeparaeditar" value="1" />

											<ul class="nav nav-tabs" style="display:flex;" >

												<li class="active show t3R"  style="margin-left: 5px;flex: 1;" ><a data-toggle="tab" href="#contatoRodape" > CONTATOS </a></li> 
						
												<li style="margin-left: 5px;flex: 1;" class="t2R" ><a data-toggle="tab" href="#linkRedeRodapoe"> LINKS REDES SOCIAIS </a></li>
											
											</ul>


											<div class="tab-content">

											<!-- //// -->
											<div id="contatoRodape" class="tab-pane fade in active show">
													<br><h3>Editar Contatos</h3><br>

													<label><span style="color:red;">*</span> E-mail:</label>
													<input type="text" name="email_rodape01" value="<?php echo $info_home['email01']; ?>" class="form-control titleHomeApre" required="required" style="border:1px solid #ccc !important" ><br>

													<label><span style="color:red;">*</span> Telefone:</label>
													<input type="text" name="name_phone" value="<?php echo $info_home['phone01']; ?>" class="form-control titleHomeApre" required="required"  style="border:1px solid #ccc !important" ><br>

													<label><span style="color:red;">*</span> Celular:</label>
													<input type="text" name="name_cel" value="<?php echo $info_home['cell01']; ?>" class="form-control titleHomeApre" required="required" style="border:1px solid #ccc !important" ><br>

													<label><span style="color:red;">*</span> Endereço:</label>
													<textarea name="endereco__rodape" class="form-control endereco--rodape"  style="height:120px;border:1px solid #ccc !important" ><?php echo $info_home['endereco']; ?></textarea><br>

                          <label><span style="color:red;">*</span> Horário de Funcionamento:</label>
													<textarea name="horariofuncionamento" class="form-control horariofuncionamento"  style="height:120px;border:1px solid #ccc !important" ><?php echo $info_home['horariofuncionamento']; ?></textarea><br>

											</div>

											<!-- //// -->
											<div id="linkRedeRodapoe" class="tab-pane fade">
													<br><h3>Editar Links Redes Sociais</h3><br>
																	
															<label>Link Facebook:</label>
															<input type="text" name="link_01" value="<?php echo $info_home['linkrede01']; ?>" class="form-control titleHomeApre" style="border:1px solid #ccc !important" ><br>
															
															<label  >Link Linkedin :</label>
															<input type="text" name="link_02" value="<?php echo $info_home['linkrede02']; ?>" class="form-control titleHomeApre"  style="border:1px solid #ccc !important" ><br>

															<label>Link Instagram:</label>
															<input type="text" name="link_03" value="<?php echo $info_home['linkrede03']; ?>" class="form-control titleHomeApre" style="border:1px solid #ccc !important" ><br>

													
											</div> 


											</div>

											<input type="hidden" name="pgURL" value="<?php $url = $_GET['url']; echo $url; ?>" >

											<div class="modal-footer">
													<input type="submit" value="ATUALIZAR" class="btn btn-primary" >
													<button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
											</div>

							</form>
							
					</div>

			</div>
		</div>


    <div class="barraEditarHome"  style="margin-bottom: 0px;" >
			<a href="javascript:void(0);" class="btnEditGeral" onClick="editRodape(this)" > Editar Rodapé <i class="fa fa-cogs"></i></a>
		</div>
   
   
   <!--================ conteudo rodape  =================-->
        
   <!--================ conteudo rodape  =================-->
  

</body>
</html>