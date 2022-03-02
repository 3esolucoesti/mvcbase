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



    <script type="text/javascript">
        $(window).on('scroll', function(){
            var scroll = $(window).scrollTop();
        // o valor 400 é a altura do scroll para iniciar o efeito
            if (scroll > 200) {
                $('.miniLogo').addClass('efeito');
            }else{
                $('.miniLogo').removeClass('efeito');
            }
    });


    $(function(){

        $('.areaPerfil').on('click', function(){
            $('.areaPerfilConteiner').slideToggle();
        });


        $('.btn_smallMenu').on('click', function(){

            var tamanho = $(window).width(); 


        if(tamanho < 768){

            if($('.areaMenus').hasClass('menu_small1') == true){    
                $('.areaMenus').removeClass('menu_small1');
                $('.barraInit .areaLogo').css('margin-left','-230px');
                $('.areaMenus').css('margin-left','-230px');

                $('.barraInit .areaLogo').css('-webkit-transition','all 0.5s ease');
                $('.barraInit .areaLogo').css('-moz-transition','all 0.5s ease');
                $('.barraInit .areaLogo').css('-o-transition','all 0.5s ease');
                $('.barraInit .areaLogo').css(' transition','all 0.5s ease');

                $('.areaMenus').css('-webkit-transition','all 0.5s ease');
                $('.areaMenus').css('-moz-transition','all 0.5s ease');
                $('.areaMenus').css('-o-transition','all 0.5s ease');
                $('.areaMenus').css(' transition','all 0.5s ease');

                if(tamanho < 480){
                    $('.areaNotificacoes').css('display','block');
                    $('.areaNotificacoes').css('display','flex');
                }   



            }else{

                $('.areaMenus').addClass('menu_small1');
                $('.barraInit .areaLogo').css('margin-left','0px');
                $('.areaMenus').css('margin-left','0px');

                $('.barraInit .areaLogo').css('-webkit-transition','all 0.5s ease');
                $('.barraInit .areaLogo').css('-moz-transition','all 0.5s ease');
                $('.barraInit .areaLogo').css('-o-transition','all 0.5s ease');
                $('.barraInit .areaLogo').css(' transition','all 0.5s ease');

                $('.areaMenus').css('-webkit-transition','all 0.5s ease');
                $('.areaMenus').css('-moz-transition','all 0.5s ease');
                $('.areaMenus').css('-o-transition','all 0.5s ease');
                $('.areaMenus').css(' transition','all 0.5s ease');

                if(tamanho < 480){
                    $('.areaNotificacoes').css('display','none');
                }   

            }
            

        } else{

            if($('.areaMenus').hasClass('menu_small') == true){
                $('.containerr').css('padding-left','240px');
                $('.areaMenus').removeClass('menu_small');
                $('.areaLogo').css('width','230px');
                $('.areaLogo,.areaMenus').css('-webkit-transition','all 0.5s ease');
                $('.areaLogo,.areaMenus').css('-moz-transition','all 0.5s ease');
                $('.areaLogo,.areaMenus').css('-o-transition','all 0.5s ease');
                $('.areaLogo,.areaMenus').css(' transition','all 0.5s ease');

                $('.namePersonLogada').css('display','block');
                $('.personLogada').css('display','block');

                //aparecento escrita
                $('.listNavBar ul li span').css('display','block');
                $('.barratitle span').css('display','block');
                $('.listNavBar ul li a .menuCicle').css('margin-right','5px');
                $('.listNavBar ul li a .menuCicle').css('float','left');
                $('.listNavBar ul li ul li a .setaParaBaixo').css('margin-right','5px');
                $('.listNavBar ul li ul li a .setaParaBaixo').css('float','right');

                //MENU SUB INDICADORES
                $('.listNavBar ul li ul li .setaParaBaixo').removeClass('fa-caret-right');
                $('.listNavBar ul li ul li .setaParaBaixo').addClass('fa-caret-down');
                

                $('.listNavBar ul li a span').css('margin-top','-3px');
                $('.listNavBar ul li a span').css('float','left');
                $('.listNavBar ul li .setaMenu').css('float','right');

                $('.setaMenu').removeClass('fa-caret-right');
                $('.setaMenu').addClass('fa-caret-down');
                $('.fa-caret-down').css('margin-top','-0px');

                $('.listNavBar ul li').css('clear','both');
                $('.listNavBar ul li a').css('padding-top','13px');
                $('.listNavBar ul li a').css('padding-bottom','28px');
                $('.nameEmpresa').css('display','block');

                //Css sub menu
                $('.listNavBar ul li ul').css('background','<?php echo COR_HOLVER; ?>');
                $('.listNavBar ul li ul').css('display','none');
                $('.listNavBar ul li ul').css('position','static');
                $('.listNavBar ul li ul').css('left','0px');
                $('.listNavBar ul li ul').css('margin-top','-0px');
                $('.listNavBar ul li ul').css('width','100%');
                $('.listNavBar ul li ul li').css('padding-left','15px');
                $('.listNavBar ul li ul li a').css('border-bottom','1px solid <?php echo COR_HOLVER; ?>');
                $('.listNavBar ul li ul li a').css('padding','10px');
                $('.listNavBar ul li ul li a span').css('margin-top','-4px');
                $('.listNavBar ul li ul li a i').css('margin-top','6px');
                $('.fa-circle-o').css('font-size','0.7em');
                $('.listNavBar ul li ul li ul').css('display','block');
                $('.listNavBar ul li ul ').slideUp();

            }else{


                $('.containerr').css('padding-left','60px');
                $('.areaMenus').addClass('menu_small');
                $('.areaLogo').css('width','50px');
                $('.areaLogo,.areaMenus').css('-webkit-transition','all 0.5s ease');
                $('.areaLogo,.areaMenus').css('-moz-transition','all 0.5s ease');
                $('.areaLogo,.areaMenus').css('-o-transition','all 0.5s ease');
                $('.areaLogo,.areaMenus').css(' transition','all 0.5s ease');

                $('.namePersonLogada').css('display','none');
                $('.personLogada').css('display','none');
                $('.nameEmpresa').css('display','none');

                //deixando somente icone
                $('.listNavBar ul li span').css('display','none');
                $('.barratitle span').css('display','none');
                $('.setaMenu').removeClass('fa-caret-down');
                $('.setaMenu').addClass('fa-caret-right');
                $('.fa-caret-right').css('margin-top','0px');
                $('.fa-caret-right').css('margin-left','5px');

                //Css Sub Menu
                $('.listNavBar ul li ul').css('background','<?php echo COR_HOLVER; ?>');
                $('.listNavBar ul li ul').css('display','none');
                $('.listNavBar ul li ul').css('position','absolute');
                $('.listNavBar ul li ul').css('left','50px');
                $('.listNavBar ul li ul').css('margin-top','-41px');
                $('.listNavBar ul li ul').css('width','200px');
                $('.listNavBar ul li ul li').css('padding-left','0px');
                $('.listNavBar ul li ul li a').css('border-bottom','1px solid <?php echo COR_HOLVER; ?>');
                $('.fa-circle-o').css('font-size','0.7em');

                //Css Sub Menu SUB HOVER
                $('.listNavBar ul li ul li ul').css('background','<?php echo COR_HOLVER; ?>');
                $('.listNavBar ul li ul li ul').css('display','none');
                $('.listNavBar ul li ul li ul').css('position','absolute');
                $('.listNavBar ul li ul li ul').css('left','200px');
                $('.listNavBar ul li ul li ul').css('margin-top','-41px');
                $('.listNavBar ul li ul li ul').css('width','200px');
                $('.listNavBar ul li ul li ul').css('padding-left','0px');
                $('.listNavBar ul li ul li ul a').css('border-bottom','1px solid <?php echo COR_HOLVER; ?>');
                $('.fa-circle-o').css('font-size','0.7em');

                // .listNavBar ul li ul li ul li   //MENU SUB INDICADORES
                $('.listNavBar ul li ul li .setaParaBaixo').removeClass('fa-caret-down');
                $('.listNavBar ul li ul li .setaParaBaixo').addClass('fa-caret-right');
                $('.listNavBar ul li ul li .setaParaBaixo').css('float','right');
                $('.listNavBar ul li ul li .setaParaBaixo').css('margin-top','3px');
                $('.listNavBar ul li ul ').slideUp();

            }       

        }

     });    

        $('.trocarUser').on('click',function(){
            $('.areaPerfilConteiner').slideUp();
        });
            

        // LISTA DE SUB MENUS 
        $('.openSubMenu1').on('click', function(){
            $('.listNavBar ul li .m1').slideToggle();

            //Fechando Menus
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu2').on('click', function(){
            $('.listNavBar ul li .m2').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu3').on('click', function(){
            $('.listNavBar ul li .m3').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu4').on('click', function(){
            $('.listNavBar ul li .m4').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu5').on('click', function(){
            $('.listNavBar ul li .m5').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu6').on('click', function(){
            $('.listNavBar ul li .m6').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu7').on('click', function(){
            $('.listNavBar ul li .m7').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu8').on('click', function(){
            $('.listNavBar ul li .m8').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu9').on('click', function(){
            $('.listNavBar ul li .m9').slideToggle();   

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu10').on('click', function(){
            $('.listNavBar ul li .m10').slideToggle();  

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu11').on('click', function(){
            $('.listNavBar ul li .m11').slideToggle();  

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu12').on('click', function(){
            $('.listNavBar ul li .m12').slideToggle();  

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu13').on('click', function(){
            $('.listNavBar ul li .m13').slideToggle();  

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m14').slideUp();  

        });

        $('.openSubMenu14').on('click', function(){
            $('.listNavBar ul li .m14').slideToggle();  

            //Fechando Menus
            $('.listNavBar ul li .m1').slideUp();
            $('.listNavBar ul li .m2').slideUp();   
            $('.listNavBar ul li .m3').slideUp();   
            $('.listNavBar ul li .m4').slideUp();   
            $('.listNavBar ul li .m5').slideUp();   
            $('.listNavBar ul li .m6').slideUp();   
            $('.listNavBar ul li .m7').slideUp();   
            $('.listNavBar ul li .m8').slideUp();   
            $('.listNavBar ul li .m9').slideUp();   
            $('.listNavBar ul li .m10').slideUp();  
            $('.listNavBar ul li .m11').slideUp();  
            $('.listNavBar ul li .m12').slideUp();  
            $('.listNavBar ul li .m13').slideUp();  

        });


        $('.subMenuHover1').on('click', function(){
            $('.listNavBar ul li ul li .subMenuHoverUL1').slideToggle();
            $('.listNavBar ul li ul li .subMenuHoverUL2').slideUp();


        });

        $('.subMenuHover2').on('click', function(){
            $('.listNavBar ul li ul li .subMenuHoverUL2').slideToggle();
            $('.listNavBar ul li ul li .subMenuHoverUL1').slideUp();

        });

    });

    function areaconfigt(){
        $('.areamenudrop').slideToggle('show');
     }  
    
    </script> 

    <!-- TROCAR DE USUARIO  -->
    <script type="text/javascript">
        $(function(){
            $('.btn_trocarUser').on('click', function(){

                var email = $('input[name=email]').val();
                var password = $('input[name=password]').val();

                $.ajax({
                    url:'<?php echo BASE_URL; ?>/painel/login/trocar_user',
                    type:'POST',
                    dataType:'json',
                    data:{email:email,password:password},
                    success:function(json){

                        if(json == 1){
                            $('.avisoTrocaUser').slideDown();

                            $('.avisoTrocaUser').html( 'ESTE USUÁRIO ESTA BLOQUEADO! ENTRE EM CONTATO COM SUPORTE: <a href="mailto:<?php echo EMAIL_; ?>"><?php echo EMAIL_; ?></a> ou <a href="tel:<?php echo TELEFONE_SUPORTE; ?>"><?php echo TELEFONE_SUPORTE; ?></a>' );
                        }
                        if(json == 2){
                            $('.avisoTrocaUser').slideDown();

                            $('.avisoTrocaUser').html( 'Acesso Negado! E-mail e/ou senha errados' );
                        }
                        if(json == 3){
                            $('.avisoTrocaUser').slideDown();

                            $('.avisoTrocaUser').html( ' ESSE E-MAIL NÃO EXISTE! ' );
                        }

                        if(json == 4){
                            window.location.href="<?php echo BASE_URL; ?>/painel";
                        }

                    },
                    error:function(){
                        console.log('Algum ERROR!');
                    }
                });

            });

        $('.emailNewLogin').on('focus', function(){
            $('.avisoTrocaUser').slideUp();
        }); 

        $('.passwordNewLogin').on('focus', function(){
            $('.avisoTrocaUser').slideUp();
        }); 

    });
</script>