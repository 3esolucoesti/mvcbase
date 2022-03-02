<?php 
	class pgaboutController extends controller{
		
		private $dados;
		public $token;
		
		public function __construct(){
			parent::__construct();		
	
				$u = new Users();
				if(isset($_COOKIE['token_'.NAME_TOKEN])){
					$token = $_COOKIE['token_'.NAME_TOKEN];
					$ver = $u->veryToken($token);
					$this->token = $token;
	
					if($ver == false){
						header("Location: ".BASE_URL."/painel/login");
					}else{
						$this->dados = $ver;
					}
	
				}else{
					header("Location: ".BASE_URL."/painel/login");
				}
			
		}	
		
		public function index(){
			$data = array();	
				
			$u = new Users();
			$u->setLoggedUser($this->token);
			$company = new Companies($u->getCompany());
			$data['company_name'] = $company->getName();
			$data['company_logo'] = $company->getLogo();
			$data['user_name']	= $u->getName();	
			$data['user_email']	= $u->getEmail();
			$data['user_imagem']= $u->getImagem();	
			$data['sector'] = $u->getSector();
			$data['grupo'] = $u->getGroupUser();


			if($u->hasPermission('editar_site')){
        
				$pg_home = new Pghome();
        $pg_about = new Pgabout();	
        
        if(isset($_POST['textsobrenos']) && !empty($_POST['textsobrenos'])){
					$textsobrenos = $_POST['textsobrenos'];
					$texmissaoedit = $_POST['texmissaoedit'];
					$textvisaoedit = $_POST['textvisaoedit'];
          $textvaloresedit = $_POST['textvaloresedit'];
          
          if(isset($_FILES['photoAbout']) && !empty($_FILES['photoAbout']['tmp_name'])){

            $image = $_FILES['photoAbout'];
  
  
            $filename1 = $image['tmp_name'];
  
  
            $largura0 = 602;// Maxíma
            $altura0 = 468;// Maxíma
            
            //TAMANHO ORIGINAL DA IMAGEM
            list($largura0Original, $altura0Original) = getimagesize($filename1);
  
            $ratio0 = $largura0Original / $altura0Original;
  
            //ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
            $largura0 = $altura0 * $ratio0;
  
            $image800x500_final0 = imagecreatetruecolor($largura0,$altura0);//criar uma imagem com essa altura e essa largura
            if($image['type'] == 'image/jpeg'){
              $imagem_original0 = imagecreatefromjpeg($filename1);
            }else if($image['type'] == 'image/png'){
              $imagem_original0 = imagecreatefrompng($filename1);
            }else if($image['type'] == 'image/gif'){
              $imagem_original0 = imagecreatefromgif($filename1);
            }
  
            imagecopyresampled($image800x500_final0, $imagem_original0, 0, 0, 0, 0, $largura0, $altura0, $largura0Original, $altura0Original); 
  
            if($image['type'] == 'image/jpeg'){
              $nameImg800x500 = "min_800x500".md5(rand(0,999).time().rand(0,999)).".jpg";//mandando image 200px
              imagejpeg($image800x500_final0, "assets/images/".$nameImg800x500);
            }else if($image['type'] == 'image/png'){
              $nameImg800x500 = "min_800x500".md5(rand(0,999).time().rand(0,999)).".png";//mandando image 200px
              imagepng($image800x500_final0, "assets/images/".$nameImg800x500);
            }else if($image['type'] == 'image/gif'){
              $nameImg800x500 = "min_800x500".md5(rand(0,999).time().rand(0,999)).".gif";//mandando image 200px
              imagegif($image800x500_final0, "assets/images/".$nameImg800x500);
            }
  
  
            $pg_about->updatePhoto($nameImg800x500);
  
  
          }	

          $pg_about->update($textsobrenos,$texmissaoedit,$textvisaoedit,$textvaloresedit);
						
					header("Location: ".BASE_URL."/painel/pgabout");
				}

        $data['info_home'] = $pg_home->getPgHome();
        $data['info_about'] = $pg_about->getinfohome();

				$this->loadView("pgabout" , $data);
			}else{
        header("Location: ".BASE_URL."/painel");
        exit;
			}

    }


    public function imgTopoEdit(){
			$pg_about = new Pgabout();

			if(isset($_FILES['photoFundoTopoEditar']) && !empty($_FILES['photoFundoTopoEditar'])){
				$photoFundoTopoEditar = $_FILES['photoFundoTopoEditar'];
				$URL = $_POST['pgURL'];


					$nameImg1920x450 = "";
					$nameImg200 = "";

					if(!empty($_FILES['photoFundoTopoEditar']['tmp_name'])){

						$image = $_FILES['photoFundoTopoEditar'];

						$filename1 = $image['tmp_name'];

						$largura0 = 1920;// Maxíma
						$altura0 = 450;// Maxíma
						
						//TAMANHO ORIGINAL DA IMAGEM
						list($largura0Original, $altura0Original) = getimagesize($filename1);

						$ratio0 = $largura0Original / $altura0Original;

						//ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
						$largura0 = $altura0 * $ratio0;

						$image1920_final0 = imagecreatetruecolor($largura0,$altura0);//criar uma imagem com essa altura e essa largura
						if($image['type'] == 'image/jpeg'){
							$imagem_original0 = imagecreatefromjpeg($filename1);
						}else if($image['type'] == 'image/png'){
							$imagem_original0 = imagecreatefrompng($filename1);
						}else if($image['type'] == 'image/gif'){
							$imagem_original0 = imagecreatefromgif($filename1);
						}

					imagecopyresampled($image1920_final0, $imagem_original0, 0, 0, 0, 0, $largura0, $altura0, $largura0Original, $altura0Original); 

					if($image['type'] == 'image/jpeg'){
						$nameImg1920x450 = "min_1920x450".md5(rand(0,999).time().rand(0,999)).".jpg";//mandando image 200px
						imagejpeg($image1920_final0, "assets/images/".$nameImg1920x450);
					}else if($image['type'] == 'image/png'){
						$nameImg1920x450 = "min_1920x450".md5(rand(0,999).time().rand(0,999)).".png";//mandando image 200px
						imagepng($image1920_final0, "assets/images/".$nameImg1920x450);
					}else if($image['type'] == 'image/gif'){
						$nameImg1920x450 = "min_1920x450".md5(rand(0,999).time().rand(0,999)).".gif";//mandando image 200px
						imagegif($image1920_final0, "assets/images/".$nameImg1920x450);
					}


						

						$largura1 = 200;// Maxíma
						$altura1 = 200;// Maxíma
						
						//TAMANHO ORIGINAL DA IMAGEM
						list($largura1Original, $altura1Original) = getimagesize($filename1);

						$ratio1 = $largura1Original / $altura1Original;

						//ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
						$largura1 = $altura1 * $ratio1;

						$image200_final1 = imagecreatetruecolor($largura1,$altura1);//criar uma imagem com essa altura e essa largura
						if($image['type'] == 'image/jpeg'){
							$imagem_original1 = imagecreatefromjpeg($filename1);
						}else if($image['type'] == 'image/png'){
							$imagem_original1 = imagecreatefrompng($filename1);
						}else if($image['type'] == 'image/gif'){
							$imagem_original1 = imagecreatefromgif($filename1);
						}

						imagecopyresampled($image200_final1, $imagem_original1, 0, 0, 0, 0, $largura1, $altura1, $largura1Original, $altura1Original); 

						if($image['type'] == 'image/jpeg'){
							$nameImg200 = "min_200".md5(rand(0,999).time().rand(0,999)).".jpg";//mandando image 200px
							imagejpeg($image200_final1, "assets/images/".$nameImg200);
						}else if($image['type'] == 'image/png'){
							$nameImg200 = "min_200".md5(rand(0,999).time().rand(0,999)).".png";//mandando image 200px
							imagepng($image200_final1, "assets/images/".$nameImg200);
						}else if($image['type'] == 'image/gif'){
							$nameImg200 = "min_200".md5(rand(0,999).time().rand(0,999)).".gif";//mandando image 200px
							imagegif($image200_final1, "assets/images/".$nameImg200);
						}


						$pg_about->editImgTopo($nameImg200,$nameImg1920x450);

					}


					header("Location: ".BASE_URL."/painel/".$URL."");

			}


		}






	}

?>
