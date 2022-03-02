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
    <link rel="icon" href="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/<?php echo ICON; ?>"><!-- Por icon Do site REVENDA SITE -->

    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/painel/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/painel/assets/css/croppie.css" />
    <link href="<?php echo BASE_URL; ?>/painel/assets/css/sweetalert.css" rel="stylesheet"/>
    <link href="<?php echo BASE_URL; ?>/painel/assets/css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/painel/assets/css/bootstrap.min.css">
    
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/painel/assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/painel/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/croppie.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/sweetalert.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/script.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/exif.js"></script>
    <script src="<?php echo BASE_URL; ?>/ckeditor/ckeditor.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/mask.js"></script>
    
    <?php include_once('assets/css/templatecss.php'); ?>
    <?php include_once('assets/js/templatejs.php'); ?>
    <!-- badge -->

    </head>
<body>
<div class="container-fluid">

        <div class="modal fade" id="naoTemPermissao" data-backdrop="static" role="dialog" style="position: fixed;">
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

        <div class="barraInit">

            <!-- <div class="logoEmpresa">
                
            </div> -->
            <div class="barraInit">
                <div class="nameEmpresa">
                    <a href="<?php echo BASE_URL; ?>/painel"><img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/<?php echo "logo.png"; ?>" border="0" alt="" height="40px;" style="margin-left: 50px;" /></a>
                </div>
                <div class="btn_Small">
                    <a  class="btn_smallMenu"><i class="fa fa-list"></i></a>
                </div>
            </div>

            <div class="areaNotificacoes">
                

                    <?php if(!empty($menuUsuarios) || !empty($menuPermissoes) ): ?>
                        <div class="dropdown">
                            <button  type="button" class="btn btn-primary " onClick="areaconfigt()"  style="font-size: 20px;margin-top: 9px;margin-right: 20px;"  ><i class="fa fa-cog"></i>
                            </button>
                            <ul class="dropdown-menu areamenudrop">
                                <?php if(!empty($menuUsuarios)): ?> 
                                    <li><a  class="dropdown-item" href="<?php echo BASE_URL; ?>/painel/users">USUÁRIOS</a></li>
                                <?php endif; ?>
                                <?php if(!empty($menuPermissoes)): ?>
                                    <li><a  class="dropdown-item" href="<?php echo BASE_URL; ?>/painel/permissions">PERMISSÕES</a></li>
                                <?php endif; ?>
                            </ul>
                        </div> 
                    <?php endif; ?>

                    <a href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_msg"><i class="fa fa-envelope-o"></i> <span class="badge badge1" style="color:white;"  ><?php echo $msg; ?></span></a><br>
                    
                    <a href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_leads"><i class="fa fa-bell"></i> <span class="badge badge2" style="color:white;"  ><?php echo $newsleder; ?></span></a><br>

            </div>
            <div class="areaPerfil">
                <div class="imgPerfilName">
                    <div class="imgPerf">
                        <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                        <?php else: ?>  
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                        <?php endif; ?>         
                    </div>
                    <div class="namePerf">
                        <label style="cursor: pointer;">
                             <?php 
                                $name = explode(' ', $viewData['user_name']); 
                                if(!empty($name[1][1])){
                                    echo $name[0]." ".$name[1][0].".";
                                }else{
                                    echo $name[0];
                                }
                            ?>    
                        </label>  <i class="fa fa-caret-down"></i>
                    </div>
                </div>
            </div>
            <div class="areaPerfilConteiner">
                <div class="imgPerfEdit">
                    <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                    <?php else: ?>  
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                    <?php endif; ?>     
                </div>
                <hr>
                <div class="nameFuncao">
                            <?php 
                                $name = explode(' ', $viewData['user_name']); 
                                if(!empty($name[1][0])){
                                    echo $name[0]." ".$name[1].".";
                                }else{
                                    echo $name[0];
                                }
                            ?>  
                </div>
                <div class="membroDesde">
                    <?php echo $viewData['sector']; ?>  
                </div>
                <div class="listaBtnPerfil">
                    <div class="btn_Perfil">
                        <a href="<?php echo BASE_URL; ?>/painel/users/profile" class="btn btn-primary">Perfil</a>
                    </div>
                    <div class="trocaUser">
                        <a  class="btn btn-primary trocarUser" style="cursor: pointer;" data-toggle="modal" data-target="#trocarUser" >Trocar de Conta</a> <!-- href="<?php echo BASE_URL; ?>/login/trocar_user" -->
                    </div>
                    <div class="btnSair">
                        <a href="<?php echo BASE_URL; ?>/painel/home/logout" onClick="exitLoja()"  class="btn btn-primary">Sair</a>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Modal Trocar User -->
        <div id="trocarUser" class="modal fade" role="dialog" style="position: fixed;" data-backdrop="static">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">ACESSE OUTRA CONTA</h4></center>
              </div>
              <div class="modal-body">
                <form method="POST" class="formTrocarUser">
                    <div class="fotoPessoaAtual">
                        <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                        <?php else: ?>  
                            <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                        <?php endif; ?>     
                    </div>  
                    <br>
                        <div class="alert alert-danger avisoTrocaUser">
                            
                        </div>

                    <div class="campos">
                        <label>E-MAIL</label>
                        <input type="email" name="email" class="form-control emailNewLogin" required="required"  placeholder="E-mail" > 

                        <label>SENHA</label>
                        <input type="password" name="password" class="form-control passwordNewLogin" required="required" placeholder="Senha" ><br>  

                        <input type="button"  class="btn btn-primary btn_trocarUser" value="Trocar de Usuário">

                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">SAIR</button>
              </div>
            </div>

          </div>
        </div>

        <div class="areaMenus">

            <div class="conteudoInfo">
                <div class="imgMini">
                    <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" />
                    <?php else: ?>  
                        <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" />
                    <?php endif; ?>         
                </div>
                <div class="namePersonLogada">
                    <strong><?php 
                                $name = explode(' ', $viewData['user_name']); 
                                if(!empty($name[1][0])){
                                    echo $name[0]." ".$name[1].".";
                                }else{
                                    echo $name[0];
                                }
                            ?>  </strong>
                </div>
            </div>  
            <div class="personLogada">
                <i class="fa fa-circle"></i> Online
            </div>
            <div class="barratitle">
                <span>Menus de Navegação</span>
            </div>
            <div class="listNavBar"> 
                <ul>
                    <li class="l1"><a href="<?php echo BASE_URL; ?>/painel"><i class="fa fa-home menuCicle"></i> <span>Home</span></a></li>

                    <li>
                        <a style="cursor: pointer;" class="openSubMenu3"><i class="fa fa-list-alt menuCicle"></i> <span>PÁGINAS DO SITE</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m3">
                            <li><a href=""><i class="fa fa-circle-o menuCicle"></i> HOME</a></li>
                            <li><a href=""><i class="fa fa-circle-o menuCicle"></i> QUEM SOMOS</a></li>
                            <li><a href=""><i class="fa fa-circle-o menuCicle"></i> DESTAQUES</a></li>
                            <li><a href=""><i class="fa fa-circle-o menuCicle"></i> DOADORES</a></li>
                            <li class="subMenuHover1" > 
                                <a href="javascript:;"><i class="fa fa-circle-o menuCicle"></i> ANIMAIS À VENDA <i class="setaParaBaixo fa fa-caret-down"></i></a>

                                <ul class="subMenuHoverUL1" >
                                    <li><a href=""><i class="fa fa-caret-right"></i> GIR LEITEIRO</a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i> HOLANDÊS</a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i> GIROLANDO</a></li>
                                </ul>

                            </li>
                            <li class="subMenuHover2" >
                                <a href="javascript:;"><i class="fa fa-circle-o menuCicle"></i> VENDA DE SÊMEN <i class="setaParaBaixo fa fa-caret-down"></i></a>

                                <ul class="subMenuHoverUL2">
                                    <li><a href=""><i class="fa fa-caret-right"></i> GIR LEITEIRO</a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i> HOLANDÊS</a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i> GIROLANDO</a></li>
                                </ul>

                            </li>
                            <li><a href=""><i class="fa fa-circle-o menuCicle"></i> FOTOS</a></li>
                            <li><a href=""><i class="fa fa-circle-o menuCicle"></i> NOTÍCIAS</a></li>
                            <li><a href=""><i class="fa fa-circle-o menuCicle"></i> FALE CONOSCO</a></li>
                        </ul>
                    </li>

                    <li data-toggle="tooltip" title="VOLTAR PARA O SITE" data-placement="right" style="background-color: red;" >
                        <a href="<?php echo BASE_URL; ?>/">
                            <i class="fa fa-arrow-left menuCicle"> VOLTAR PARA O SITE</i>
                        </a>
                    </li>

                    <!-- 
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu4"><i class="fa fa-home"></i> <span>Teste 4</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m4">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu5"><i class="fa fa-home"></i> <span>Teste 5</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m5">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu6"><i class="fa fa-home"></i> <span>Teste 6</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m6">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu7"><i class="fa fa-home"></i> <span>Teste 7</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m7">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu8"><i class="fa fa-home"></i> <span>Teste 8</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m8">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu9"><i class="fa fa-home"></i> <span>Teste 9</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m9">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu10"><i class="fa fa-home"></i> <span>Teste 10</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m10">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu11"><i class="fa fa-home"></i> <span>Teste 11</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m11">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu12"><i class="fa fa-home"></i> <span>Teste 12</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m12">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu13"><i class="fa fa-home"></i> <span>Teste 13</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m13">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="cursor: pointer;" class="openSubMenu14"><i class="fa fa-home"></i> <span>Teste 14</span> <i class="setaMenu fa fa-caret-down "></i></a>
                        <ul class="m14">
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> TESTE</a></li>
                        </ul>
                    </li> -->

                </ul>
            </div>
        </div>
        
        
        <div class="containerr">
            <?php $this->loadInTemplate($viewName, $viewData); ?>
        </div> 
    
</div>
</body>
</html>