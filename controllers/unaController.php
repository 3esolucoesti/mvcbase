<?php
  class unaController extends controller{
    
    public function __construct(){
      parent::__construct();  
        
      
    } 
    
    public function index(){
      $data = array();  

      $pghome = new Pghome();

      if(isset($_POST['nomepessoa']) && !empty($_POST['nomepessoa'])){
        $nomepessoa = addslashes($_POST['nomepessoa']);
        $telcell = addslashes($_POST['telcell']);

        $tenhointeressenavaga = 0;
        if(isset($_POST['tenhointeressenavaga']) && !empty($_POST['tenhointeressenavaga'])){
          $tenhointeressenavaga = 1;
        }

        $resp = $pghome->veryficarsenumerojaestacadastrado($telcell);

        if($resp == 0){
          $pghome->addregistro($nomepessoa,$telcell,$tenhointeressenavaga);
        }

        $data['success'] = " Cadastro Realizado com Sucesso! <hr> Para <b style='text-decoration:underline;' >Finalizar</b> siga nosso Instagram <br> <i class='fa fa-arrow-down' style='font-size: 40px' ></i> <br> <a href='https://www.instagram.com/diegoreis.1' target='_blank' ><img src='".BASE_URL."/assets/images/instagram.jpg' style='width: 150px;margin-top:5px;margin-bottom: 5px;border-radius: 10px;' /></a> ";

      }


      
      $this->loadView("una" , $data);  
    }

    public function resultado(){

      $data = array();  
      $pghome = new Pghome();

      $data['lista'] = $pghome->list();

      $this->loadView("resultadouna" , $data);  
    }
  
  }

?>