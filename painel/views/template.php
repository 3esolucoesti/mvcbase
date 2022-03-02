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

    <style>
        .dtr-control{
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
            cursor: pointer;
        }
        .dtr-control::after{
            top: 50%;
            left: 5px;
            height: 1em;
            width: 1em;
            margin-top: 0px;
            display: block;
            position: static;
            color: white;
            border: .15em solid white;
            border-radius: 1em;
            box-shadow: 0 0 .2em #444;
            box-sizing: content-box;
            text-align: center;
            text-indent: 0 !important;
            font-family: "Courier New",Courier,monospace;
            line-height: 1em;
            content: "+";
            background-color: #31b131;
        }
    </style>

    <link href="<?php echo BASE_URL; ?>/painel/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>/painel/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>/painel/assets/css/ruang-admin.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/painel/assets/vendor/datatables/dataTables.bootstrap4.min.css" />
    <link href="<?php echo BASE_URL; ?>/painel/assets/vendor/datatables/responsive.dataTables.min.css" />
    
    <script src="<?php echo BASE_URL; ?>/painel/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/croppie.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/sweetalert.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/script.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/exif.js"></script>
    <script src="<?php echo BASE_URL; ?>/ckeditor/ckeditor.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/mask.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/vendor/datatables/dataTables.responsive.min.js"></script>

    <script>
        $(function(){
            $('.tabelaGeralManipular').DataTable( {
                responsive: true,
                autoFill: true,
                "language": {
                    "paginate": {
                    "previous": "Anterior",
                    "next": "Próximo"
                    },
                    "search": "<div style='text-align:left !important;' >Buscar <br></div>",
                    "lengthMenu": "Nº POR LISTA <br> _MENU_ "
                },columnDefs: [
                    { type: 'date-br', targets: 1 }
                ],
            });
            $('#DataTables_Table_0_info').css('display', 'none');
            $('.dataTables_wrapper .dataTables_filter input').attr('placeholder', 'Digite a Busca ...');
        })
    </script>


<style>
        #DataTables_Table_0_wrapper{width: 100% !important;}
        .table.dataTable{
            width: 100% !important;
            margin-left: 0px !important; 
        }
        .dataTables_wrapper .dataTables_filter{
            float: right;
            margin-top: -50px;
            margin-left: 120px;
        }
        .dataTables_wrapper .dataTables_filter label div{
            display: none !important;
        }
        .dataTables_wrapper .dataTables_filter input{
            padding: 8px;
            border: 1px solid #333;
            background:  #fff;
            color: #333;
            font-weight: 300;
            width: 213px;
            border-radius: 3px;
        }
        
        .dataTables_wrapper .dataTables_paginate{
            float: none !important;
            width: 90% !important;
            margin-top: 10px !important;
        }

        table.dataTable thead .sorting { background: url('<?php echo BASE_URL; ?>/painel/assets/images/sort_both.png') no-repeat center right; }
        table.dataTable thead .sorting_asc { background: url('<?php echo BASE_URL; ?>/painel/assets/images/sort_asc.png') no-repeat center right; }
        table.dataTable thead .sorting_desc { background: url('<?php echo BASE_URL; ?>/painel/assets/images/sort_desc.png') no-repeat center right; }

        table.dataTable thead .sorting_asc_disabled { background: url('<?php echo BASE_URL; ?>/painel/assets/images/sort_asc_disabled.png') no-repeat center right; }
        table.dataTable thead .sorting_desc_disabled { background: url('<?php echo BASE_URL; ?>/painel/assets/images/sort_desc_disabled.png') no-repeat center right; }

        #DataTables_Table_0_previous,#DataTables_Table_0_next{
            display: none !important;
        }
        #DataTables_Table_0_paginate span{
            padding: 10px !important;
            background: #999;
            border-radius: 3px;
        }
        #DataTables_Table_0_paginate span:hover{
            background: #333;
            cursor: pointer;
        }
        #DataTables_Table_0_paginate span a{
            color: #fff !important;
            margin-right: 5px !important;
            background: #333 !important;
            padding: 5px !important;
            border-radius: 3px !important;
        }
        #DataTables_Table_0_paginate span:hover a{
            color: #fff !important;
            background: #333 !important;
            text-decoration: none;
        }

        #DataTables_Table_0_paginate .current{
            background: #777 !important;
        }

        /*EXCLUIR MODAL*/
		.delAviso{color: #FFB90F; font-size: 4em;margin-bottom: -15px;}
		.atencion{font-size: 2em;}
		.titleExcluir{text-align: center;font-size: 1.2em;margin-top: 10px;}


        .containerr{
            padding: 10px;
        }
    </style>

    </head>
<body id="page-top" >
    <div id="wrapper">

    <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img src="<?=BASE_URL;?>/painel/assets/images/TEMPLATE/icon.png">
                </div>
                <div class="sidebar-brand-text mx-3"><?=NOME_SITE;?></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/painel/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Início</span></a>
            </li>
            <!-- <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Bootstrap UI</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Bootstrap UI</h6>
                    <a class="collapse-item" href="alerts.html">Alerts</a>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="dropdowns.html">Dropdowns</a>
                    <a class="collapse-item" href="modals.html">Modals</a>
                    <a class="collapse-item" href="popovers.html">Popovers</a>
                    <a class="collapse-item" href="progress-bar.html">Progress Bars</a>
                </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
                aria-controls="collapseForm">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Forms</span>
                </a>
                <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Forms</h6>
                    <a class="collapse-item" href="form_basics.html">Form Basics</a>
                    <a class="collapse-item" href="form_advanceds.html">Form Advanceds</a>
                </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
                aria-controls="collapseTable">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span>
                </a>
                <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Tables</h6>
                    <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
                    <a class="collapse-item" href="datatables.html">DataTables</a>
                </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ui-colors.html">
                <i class="fas fa-fw fa-palette"></i>
                <span>UI Colors</span>
                </a>
            </li> -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Área do Site
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
                aria-controls="collapsePage">
                <i class="fas fa-fw fa-columns"></i>
                <span>Menus Do Site</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Páginas</h6>

                    <a class="collapse-item" href="login.html">Login</a>
                    <a class="collapse-item" href="register.html">Register</a>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item" href="blank.html">Blank Page</a>
                    
                </div>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span>
                </a>
            </li> -->
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>

        <!-- Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- TopBar -->
                    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">

                            <!-- <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                                        aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                        <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </li>
                             -->
                             <?php if(!empty($menuUsuarios) || !empty($menuPermissoes) || !empty($menuPaginasdosistema) ): ?>
                                <li class="nav-item dropdown no-arrow mx-1">

                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);"  id="alertsDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog fa-fw"></i>
                                        <span class="badge badge-danger badge-counter"></span>
                                    </a>

                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">

                                        <h6 class="dropdown-header">
                                        Opções
                                        </h6>

                                        <?php if(!empty($menuUsuarios)): ?> 

                                            <a class="dropdown-item d-flex align-items-center" href="<?php echo BASE_URL; ?>/painel/users">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-primary">
                                                        <i class="fas fa-users text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="font-weight-bold"> Usuários </span>
                                                </div>
                                            </a>

                                        <?php endif; ?>

                                        <?php if(!empty($menuPermissoes)): ?>
                                            <a class="dropdown-item d-flex align-items-center" href="<?php echo BASE_URL; ?>/painel/permissions">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-success">
                                                        <i class="fas fa-lock text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    Permissões
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        <?php if(!empty($menuPaginasdosistema)): ?>
                                            <a class="dropdown-item d-flex align-items-center" href="<?php echo BASE_URL; ?>/painel/pagessister">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-success">
                                                        <i class="fas fa-lock text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    Páginas do Sistema
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    </div>
                                
                                </li>
                            <?php endif; ?>

                            <li class="nav-item dropdown no-arrow mx-1">

                            <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_leads"  id="alertsDropdown" role="button" >
                            <!-- data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" -->
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter"><?php echo $newsleder; ?></span>
                            </a>

                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div> -->

                            </li>




                            <li class="nav-item dropdown no-arrow mx-1">

                                <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>/painel/pgcontact/lista_msg" id="messagesDropdown" role="button" >
                                <!-- data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" -->
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <span class="badge badge-warning badge-counter"><?php echo $msg; ?></span>
                                </a>

                                <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                    Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                                        having.</div>
                                        <div class="small text-gray-500">Udin Cilok · 58m</div>
                                    </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                                        <div class="status-indicator bg-default"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                                        say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Jaenab · 2w</div>
                                    </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div> -->
                            </li>

                            <!-- <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-tasks fa-fw"></i>
                                    <span class="badge badge-success badge-counter">3</span>
                                </a>
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                    Task
                                    </h6>
                                    <a class="dropdown-item align-items-center" href="#">
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Design Button
                                        <div class="small float-right"><b>50%</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    </a>
                                    <a class="dropdown-item align-items-center" href="#">
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Make Beautiful Transitions
                                        <div class="small float-right"><b>30%</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    </a>
                                    <a class="dropdown-item align-items-center" href="#">
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Create Pie Chart
                                        <div class="small float-right"><b>75%</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
                                </div>
                            </li> -->

                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">

                                <?php if($viewData['user_imagem'] == 'user2.png' || empty($viewData['user_imagem'])): ?>
                                    <img src="<?php echo BASE_URL; ?>/painel/assets/images/TEMPLATE/user2.png" border="0" alt="" style="max-width: 60px" class="img-profile rounded-circle" />
                                <?php else: ?>  
                                    <img src="<?php echo BASE_URL; ?>/painel/assets/images/<?php echo $viewData['user_imagem']; ?>" border="0" alt="" style="max-width: 60px" class="img-profile rounded-circle" />
                                <?php endif; ?>   

                                <span class="ml-2 d-none d-lg-inline text-white small">
                                    <?php 
                                        $name = explode(' ', $viewData['user_name']); 
                                        if(!empty($name[1][1])){
                                            echo $name[0]." ".$name[1][0].".";
                                        }else{
                                            echo $name[0];
                                        }
                                    ?>    
                                </span>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/painel/users/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Meu Perfil
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>/painel/home/logout" onClick="exitLoja()" >
                                    <!-- href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal"  -->
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                            </li>
                        </ul>
                    </nav>

                    <div class="containerr" >
                        <?php $this->loadInTemplate($viewName, $viewData); ?>
                    </div>


                </div>
            </div>
        </div>
        <!-- Topbar -->

        <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - Desenvolvido por
                        <b><a href="https://www.3esolucoesti.com.br" target="_blank">3E SOLUÇÕES TI</a></b>
                    </span>
                    </div>
                </div>
            </footer>
        <!-- Footer -->


    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <script src="<?php echo BASE_URL; ?>/painel/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/ruang-admin.min.js"></script>
    <!-- <script src="<?php echo BASE_URL; ?>/painel/assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/painel/assets/js/demo/chart-area-demo.js"></script>   -->
    <script>
        function exitLoja() {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
            window.location.href = `<?php echo BASE_URL; ?>/login`;
        }
    </script>


</body>
</html>