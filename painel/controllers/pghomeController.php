<?php 
	class pghomeController extends controller{
		
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
			$data['user_imagem'] = $u->getImagem();	
			$data['sector'] = $u->getSector();

			if($u->hasPermission('editar_site')){	
				$pg_home = new Pghome();
				$pgcontact = new Pgcontact();
				$pg_depoiments = new Pgdepoiments();
				$pg_about = new Pgabout();
				$pg_servicos = new Pgservices();	
				$pg_products = new Pgproducts();	


				if(isset($_POST['textorcamentohome']) && !empty($_POST['textorcamentohome'])){
					$textorcamentohome = $_POST['textorcamentohome'];

					$pg_home->edittextorcamento($textorcamentohome);

					header("Location: ".BASE_URL."/painel/pghome");
				
				}

				$data['info_home'] = $pg_home->getPgHome();
				$data['list_slide'] = $pg_home->getSlide();
				$data['primeiro_slide'] = $pg_home->getPriSlide();
				$data['list_depo'] = $pg_depoiments->getDepoiments();
				$data['info_about'] = $pg_about->getinfohome();
				$data['info_services'] = $pg_servicos->getinfoLimit(4);
				$data['info_products'] = $pg_products->getinfoRand(8);


				$this->loadView("pghome" , $data);

			}else{
				header("Location: ".BASE_URL."/painel");
			}
			
		}


		public function lista_slide(){
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


			if($u->hasPermission('editar_site')){

					//nao apagar
					// if($largura1/$altura1 > $ratio1){
					// 	$largura1 = $altura1 * $ratio1;
					// }else{
					// 	$altura1 = $largura1 / $ratio1;
					// }

				$pg_home = new Pghome();
				

				if(isset($_POST['tituSlide']) && !empty($_POST['tituSlide']) && $_FILES['photoSlide']['tmp_name']){
					$tituSlide = addslashes($_POST['tituSlide']);
					$descSlide = addslashes($_POST['descSlide']);
					$image = $_FILES['photoSlide'];
					$nameImg1920x900 = "";
					$nameImg200 = "";
					$nameImg80 = "";

					$filename1 = $image['tmp_name'];
					
					
					$largura0 = 1920;// Maxíma
					$altura0 = 1044;// Maxíma
					
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
						$nameImg1920x900 = "min_1920x900".md5(rand(0,999).time().rand(0,999)).".jpg";//mandando image 200px
						imagejpeg($image1920_final0, "assets/images/".$nameImg1920x900);
					}else if($image['type'] == 'image/png'){
						$nameImg1920x900 = "min_1920x900".md5(rand(0,999).time().rand(0,999)).".png";//mandando image 200px
						imagepng($image1920_final0, "assets/images/".$nameImg1920x900);
					}else if($image['type'] == 'image/gif'){
						$nameImg1920x900 = "min_1920x900".md5(rand(0,999).time().rand(0,999)).".gif";//mandando image 200px
						imagegif($image1920_final0, "assets/images/".$nameImg1920x900);
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


					$largura2 = 80;// Maxíma
					$altura2 = 80;// Maxíma
					
					//TAMANHO ORIGINAL DA IMAGEM
					list($largura2Original, $altura2Original) = getimagesize($filename1);

					$ratio2 = $largura2Original / $altura2Original;

					//ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
					$largura2 = $altura2 * $ratio2;

					$image80_final2 = imagecreatetruecolor($largura2,$altura2);//criar uma imagem com essa altura e essa largura
					if($image['type'] == 'image/jpeg'){
						$imagem_original2 = imagecreatefromjpeg($filename1);
					}else if($image['type'] == 'image/png'){
						$imagem_original2 = imagecreatefrompng($filename1);
					}else if($image['type'] == 'image/gif'){
						$imagem_original2 = imagecreatefromgif($filename1);
					}

					imagecopyresampled($image80_final2, $imagem_original2, 0, 0, 0, 0, $largura2, $altura2, $largura2Original, $altura2Original); 

					if($image['type'] == 'image/jpeg'){
						$nameImg80 = "min_80".md5(rand(0,999).time().rand(0,999)).".jpg";
						imagejpeg($image80_final2, "assets/images/".$nameImg80); //mandando image 80px
					}else if($image['type'] == 'image/png'){
						$nameImg80 = "min_80".md5(rand(0,999).time().rand(0,999)).".png";
						imagepng($image80_final2, "assets/images/".$nameImg80); //mandando image 80px
					}else if($image['type'] == 'image/gif'){
						$nameImg80 = "min_80".md5(rand(0,999).time().rand(0,999)).".gif";
						imagegif($image80_final2, "assets/images/".$nameImg80); //mandando image 80px
					}


					// move_uploaded_file($image['tmp_name'], 'assets/images/'.$nameImg);//mandando image 1920x1080


					//COMPRIMIR IMAGEM GULP ANTES DE ENVIAR
					
					$pg_home->addSlide($nameImg200,$nameImg80,$nameImg1920x900,$tituSlide,$descSlide);

					header("Location: ".BASE_URL."/painel/pghome/lista_slide");

				}


				if(isset($_POST['tituSlideEditar']) && !empty($_POST['tituSlideEditar'])){
					$tituSlideEditar = addslashes($_POST['tituSlideEditar']);
					$descSlideEditar = addslashes($_POST['descSlideEditar']);
					$idSlideEditar = addslashes($_POST['idSlideEditar']);

					$nameImg1920x900 = "";
					$nameImg200 = "";
					$nameImg80 = "";

					if(!empty($_FILES['photoSlideEditar']['tmp_name'])){

						$image = $_FILES['photoSlideEditar'];

						$filename1 = $image['tmp_name'];

						$largura0 = 1920;// Maxíma
						$altura0 = 1044;// Maxíma
						
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
						$nameImg1920x900 = "min_1920x900".md5(rand(0,999).time().rand(0,999)).".jpg";//mandando image 200px
						imagejpeg($image1920_final0, "assets/images/".$nameImg1920x900);
					}else if($image['type'] == 'image/png'){
						$nameImg1920x900 = "min_1920x900".md5(rand(0,999).time().rand(0,999)).".png";//mandando image 200px
						imagepng($image1920_final0, "assets/images/".$nameImg1920x900);
					}else if($image['type'] == 'image/gif'){
						$nameImg1920x900 = "min_1920x900".md5(rand(0,999).time().rand(0,999)).".gif";//mandando image 200px
						imagegif($image1920_final0, "assets/images/".$nameImg1920x900);
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


						$largura2 = 80;// Maxíma
						$altura2 = 80;// Maxíma
						
						//TAMANHO ORIGINAL DA IMAGEM
						list($largura2Original, $altura2Original) = getimagesize($filename1);

						$ratio2 = $largura2Original / $altura2Original;

						//ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
						$largura2 = $altura2 * $ratio2;

						$image80_final2 = imagecreatetruecolor($largura2,$altura2);//criar uma imagem com essa altura e essa largura
						if($image['type'] == 'image/jpeg'){
							$imagem_original2 = imagecreatefromjpeg($filename1);
						}else if($image['type'] == 'image/png'){
							$imagem_original2 = imagecreatefrompng($filename1);
						}else if($image['type'] == 'image/gif'){
							$imagem_original2 = imagecreatefromgif($filename1);
						}

						imagecopyresampled($image80_final2, $imagem_original2, 0, 0, 0, 0, $largura2, $altura2, $largura2Original, $altura2Original); 

						if($image['type'] == 'image/jpeg'){
							$nameImg80 = "min_80".md5(rand(0,999).time().rand(0,999)).".jpg";
							imagejpeg($image80_final2, "assets/images/".$nameImg80); //mandando image 80px
						}else if($image['type'] == 'image/png'){
							$nameImg80 = "min_80".md5(rand(0,999).time().rand(0,999)).".png";
							imagepng($image80_final2, "assets/images/".$nameImg80); //mandando image 80px
						}else if($image['type'] == 'image/gif'){
							$nameImg80 = "min_80".md5(rand(0,999).time().rand(0,999)).".gif";
							imagegif($image80_final2, "assets/images/".$nameImg80); //mandando image 80px
						}


						// move_uploaded_file($image['tmp_name'], 'assets/images/'.$nameImgEdit);//mandando image 1920x1080

						$pg_home->editImgSlide($nameImg200,$nameImg80,$idSlideEditar,$nameImg1920x900);

					}


					$pg_home->editTextSlide($tituSlideEditar,$descSlideEditar,$idSlideEditar);

					header("Location: ".BASE_URL."/painel/pghome/lista_slide");

				}

			

				$offeset = 0;
				$limit = 10;	

				
				$totalslide = $pg_home->totalslide();
				$data['paginas'] = ceil($totalslide/$limit);

				$data['paginaAtual'] = 1;

				if(!empty($_GET['p'])){
					$data['paginaAtual'] = intval($_GET['p']);
				}

				$offeset = ($data['paginaAtual'] * $limit) - $limit;

				$data['list_slide'] = $pg_home->getSlidePagi($offeset,$limit);


				$this->loadView("pghome_slide" , $data);
			}else{
				//header("Location: ".BASE_URL."/painel");
				$data['aviso'] = "VER ALERT";
				$this->loadView("pghome_slide" , $data);
			}

		}


		public function delSlide($id){
			$data = array();
			$pg_home = new Pghome();

			$id = addslashes($id);

			$pg_home->delSlide($id);


			header("Location: ".BASE_URL."/painel/pghome/lista_slide");
		}

		public function headerfooter(){

			$pg_home = new Pghome();

				if(isset($_POST['enviourodapeparaeditar']) && !empty($_POST['enviourodapeparaeditar'])){

					$email_rodape01 = addslashes($_POST['email_rodape01']);
					$name_phone = addslashes($_POST['name_phone']);
					$name_cel = addslashes($_POST['name_cel']);
					$endereco__rodape = addslashes($_POST['endereco__rodape']);
					$link_01 = addslashes($_POST['link_01']);
					$link_02 = addslashes($_POST['link_02']);
					$link_03 = addslashes($_POST['link_03']);
					$horariofuncionamento = addslashes($_POST['horariofuncionamento']);

					$URL = $_POST['pgURL'];

					$pg_home->editRodape($email_rodape01,$name_phone,$name_cel,$endereco__rodape,$link_01,$link_02,$link_03,$horariofuncionamento);

					header("Location: ".BASE_URL."/painel/".$URL."");
					
				}

		}


	}	