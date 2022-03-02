<style type="text/css">

        body{}

        .container-fluid{margin: 0px;padding: 0px;}


            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;margin-left: -230px;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;margin-left: -230px;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 40px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 50px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 50px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;display: none;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 10px;margin-top: 50px;padding-top: 50px;}


        @media all and (min-width: 480px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;margin-left: -230px;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;margin-left: -230px;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 50px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 50px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;display: none;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 10px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 640px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;margin-left: -230px;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;margin-left: -230px;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;display: block;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 10px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 768px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;margin-left: 0px;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;margin-left: 0px;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 800px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 960px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1024px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1280px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1366px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }


        @media all and (min-width: 1680px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height:900px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        @media all and (min-width: 1920px){

            .areaMenus{width: 230px;position: absolute;height: 100%; background: <?=COR_MENU_LATERAL;?>;}
            /*::-webkit-scrollbar{width: 0px;}*/
            .barraInit{background: <?=COR_BASE;?>;position: fixed;height: 50px;width: 100%;z-index: 9;display: flex;}
            .barraInit .areaLogo{height: 50px;width: 230px;background: <?=COR_HOLVER;?>;}
            .barraInit .logoEmpresa {height: 29px;margin: 9px;margin-left: 4px;background: transparent;width: 20%;float: left;}
            .barraInit .logoEmpresa img{height: 100%;}
            .nameEmpresa{float: left;width: 65%;background: transparent;margin-top: 5px;color: white;font-weight: bold;text-align: left;}
            .barraInit .btn_Small{height: 50px;background: transparent;width: 50px;text-align: center;padding-top: 12px;}
            .barraInit .btn_Small i{color: white;font-size: 2em;}
            .barraInit .btn_Small:hover{background: <?=COR_HOLVER;?>;}
            .barraInit .btn_smallMenu{cursor: pointer;}

            /* MENU SMALL */
            .menu_small{width: 50px;position: fixed;height: 100%; background: <?=COR_MENU_LATERAL;?>;-webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;}

            .conteudoInfo{display: flex;margin-top: 50px;}

            .imgMini{margin-top: 5px; margin-left: 3px; width: 43px;height: 43px;border-radius: 100%;background: red;border:2px solid #e9e9e9;}
            .imgMini img{width: 100%;height: 100%;}

            .namePersonLogada{color: white;margin-left: 15px;margin-top: 8px;}
            .namePersonLogada strong{}

            .personLogada{color: white;background: transparent;float: right;width: 73%;margin-top: -19px;font-size: .8em;}
            .personLogada i{color: green;font-size: 1.3em;}

            .barratitle{background: <?=COR_BARRA_TITULO;?>;width: 100%;height: 40px;margin-top: 10px;line-height:40px;text-align: left;padding-left: 10px;color: #f2f2f2;font-size: .8em;border-bottom: 1px solid #ccc;}

            .listNavBar{background: <?=COR_LISTA_MENU;?>;}
            .listNavBar ul{list-style: none;padding-left: 0px;}
            .listNavBar ul li{background: transparent;}
            .listNavBar ul li .fa-caret-down{float: right;margin-top: 3px;}
            .listNavBar ul li a{display: block;background: transparent;padding: 10px;color: white;border-bottom: 1px solid #ccc;}
            .listNavBar ul li a:hover{text-decoration: none;background: <?=COR_LISTA_MENU_HOVER;?>;}
            .listNavBar ul li a i{}

            .listNavBar ul li ul{background: <?=COR_LISTA_MENU_UL_SUB_MENU;?>;display: none;} 
            .listNavBar ul li ul li{padding-left: 15px;} 
            .listNavBar ul li ul li a{border-bottom: 1px solid <?=COR_LISTA_MENU_UL_SUB_MENU;?>;}
            .fa-circle-o{font-size: 0.7em;}


            .listNavBar ul li ul li ul{display: none;}

            .areaNotificacoes{position: absolute; right: 180px; width: auto;height: 50px;background: transparent;margin-left: 10px;margin-right: 10px;display: flex;line-height: 50px;}
            .areaNotificacoes a{margin-right: 5px;}
            .areaNotificacoes a i{color: white;}
            .areaNotificacoes a .badge1{background: blue;margin-right: 10px;}
            .areaNotificacoes a .badge2{background: green;}
        
            .areaPerfil{position: absolute; right: 0px;  width: 180px;background: <?=COR_HOLVER;?>;margin-left: 10px;float: right;height: 50px;cursor: pointer;}
            .imgPerfilName{display: flex;cursor: pointer;}
            .areaPerfil{flex: 1;cursor: pointer;}
            .imgPerf{width: 35px;height: 35px;border-radius: 100%;background: red;margin:8px;border:2px solid #e9e9e9;cursor: pointer;}
            .namePerf{line-height: 50px;color: white;cursor: pointer;}
            .areaPerfilConteiner{width: 300px;height: 270px;background: <?=COR_BASE;?>;position: absolute;right: 0px;top: 50px;border:1px solid white;display: none;}
            .imgPerfEdit{width: 100px;height: 100px;border-radius: 100%;margin: auto;background: red;margin-top: 10px;border:2px solid #e9e9e9;}
            .nameFuncao{text-align: center;font-size: 1.2em;color: white;}
            .membroDesde{text-align: center;font-size: 1em;color: white;}
            .listaBtnPerfil{display: flex;justify-content: center;margin-top: 20px;}
            .listaBtnPerfil .btn_Perfil{margin-left: 10px;}
            .listaBtnPerfil .trocaUser{margin-left: 10px;}
            .listaBtnPerfil .btnSair{margin-left: 10px;}

            .containerr{background: #e9e9e9;width: 100%;min-height: 1000px;padding-left: 240px;margin-top: 50px;padding-top: 50px;}

        }

        .formTrocarUser{}
        .formTrocarUser label{margin-top: 10px;}
        .fotoPessoaAtual{width: 100px;height: 100px;border-radius: 100%;background: red;border:2px solid <?=COR_HOLVER;?>;margin:auto;}
        .avisoTrocaUser{display: none;}

        .imgPerf img{width: 100%;height: 100%;}
        .imgPerfEdit img{width: 100%;height: 100%;}
        .imgMini img{width: 100%;height: 100%;}
        .fotoPessoaAtual img{width: 100%;height: 100%;}


           th{background: #e9e9e9;}
          .btn-default{background: #1F3F77;border:1px solid #1F3F77;color: white;padding: 11px;}
          .btn-default:hover{background: rgba(25,25,112,1);border:1px solid #1F3F77;color: white;}
          td{ }

          tr{font-size: 12px;}

            th{background: #e9e9e9;}
             td{background: #FBFBFB;}



             .btn-primary{
                    /* background:<?php echo COR_HOLVER; ?> !important; */
                    /* border: 1px solid <?php echo COR_HOLVER; ?> !important; */
                }

                .btn-primary:hover{
                    /* background:<?php echo COR_BASE; ?> !important; */
                    /* border: 1px solid <?php echo COR_HOLVER; ?> !important; */
                } 


                /* ajuistes */
                .barraInit{
                    top:0;
                }
                .listNavBar ul li a{
                    /* color:#292929; */
                }
                .barratitle{
                    /* color:#292929; */
                }

                .barraInit .btn_Small i{
                    /* color:#292929; */
                }

                .namePersonLogada{
                    /* color:#292929; */
                }

                .personLogada{
                    /* color:#292929; */
                }

                .barraInit .areaLogo{
                    /* border-bottom: 1px solid #fff; */
                }

                .barratitle{
                    /* border-top: 1px solid #fff; */
                }

                .areaNotificacoes a i{
                    /* color:#292929; */
                }

                .badge{
                    /* color: white !important; */
                }

                .areaNotificacoes .btn {
                    /* color:#292929  !important; */
                }

                .namePerf,.nameFuncao,.membroDesde{
                    /* color:#292929  !important; */
                }

                .listaBtnPerfil  .btn {
                    /* color:#292929  !important; */
                }

                .conteudoInfo{
                    margin-top: 0px;
                }


    </style>