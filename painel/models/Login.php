<?php 

date_default_timezone_set("America/Sao_Paulo");  
setlocale(LC_ALL, 'pt_BR');

	class Login extends model{


    public $id_user;

		public function __construct(){
			parent::__construct();

			// $this->id_user = $id;

		}

       
    private $key = KEY_TOKEN;

    public function auth($tokenSend,$id){

      $header = json_encode(
        array(
          'typ' => 'JWT',
          'alg' => 'HS256'
        )
      );

      $payload = json_encode(
        array(
          'iss' => DOMINIO,
          'id' => $id,
          "exp" => "86400"
        )
      );
      //1 dia para exp

      $hbase = $this->base64url_encode($header);
      $pbase = $this->base64url_encode($payload);

      $signature  = hash_hmac("sha256",  $hbase.".".$pbase, $this->key, true);

      $bsig = $this->base64url_encode($signature);

      $token = $hbase.".".$pbase.".".$bsig;

      if(!empty($tokenSend)){
        if($tokenSend == $token){
          return $token;
        }else{
          return false;
        }
      }else{
        return $token;
      }

      

    }

    private function base64url_encode( $data ){
      return rtrim( strtr( base64_encode( $data ), '+/', '-_'), '=');
    }
    
    private function base64url_decode( $data ){
      return base64_decode( strtr( $data, '-_', '+/') . str_repeat('=', 3 - ( 3 + strlen( $data )) % 4 ));
    }
		

  
			
	}
?>