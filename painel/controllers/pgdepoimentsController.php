<?php 
	class pgdepoimentsController extends controller{//pgdepoiments
		
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


			if($u->hasPermission('editar_site')){
					
				header("Location: ".BASE_URL."/painel/pgdepoiments/lista_depoiments");

			}else{
				//header("Location: ".BASE_URL."/painel");
				$data['aviso'] = "VER ALERT";
				$this->loadTemplate("pgdepoiments" , $data);
			}

		}

		public function lista_depoiments(){
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

			$pg_depoiments = new Pgdepoiments();


			if(isset($_POST['namePessoDepo']) && !empty($_POST['namePessoDepo']) && $_FILES['photoDepo']['tmp_name']){
					$namePessoDepo = addslashes($_POST['namePessoDepo']);
					$depoimentoEsDepo = $_POST['depoimentoEsDepo'];
					$image = $_FILES['photoDepo'];


					$filename1 = $image['tmp_name'];

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

					//////////////////////////////////////////////

					$largura2 = 120;// Maxíma
					$altura2 = 120;// Maxíma
					
					//TAMANHO ORIGINAL DA IMAGEM
					list($largura2Original, $altura2Original) = getimagesize($filename1);

					$ratio2 = $largura2Original / $altura2Original;

					//ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
					$largura2 = $altura2 * $ratio2;

					$image120_final2 = imagecreatetruecolor($largura2,$altura2);//criar uma imagem com essa altura e essa largura
					if($image['type'] == 'image/jpeg'){
						$imagem_original2 = imagecreatefromjpeg($filename1);
					}else if($image['type'] == 'image/png'){
						$imagem_original2 = imagecreatefrompng($filename1);
					}else if($image['type'] == 'image/gif'){
						$imagem_original2 = imagecreatefromgif($filename1);
					}

					imagecopyresampled($image120_final2, $imagem_original2, 0, 0, 0, 0, $largura2, $altura2, $largura2Original, $altura2Original); 

					if($image['type'] == 'image/jpeg'){
						$nameImg120 = "min_120".md5(rand(0,999).time().rand(0,999)).".jpg";
						imagejpeg($image120_final2, "assets/images/".$nameImg120); //mandando image 80px
					}else if($image['type'] == 'image/png'){
						$nameImg120 = "min_120".md5(rand(0,999).time().rand(0,999)).".png";
						imagepng($image120_final2, "assets/images/".$nameImg120); //mandando image 80px
					}else if($image['type'] == 'image/gif'){
						$nameImg120 = "min_120".md5(rand(0,999).time().rand(0,999)).".gif";
						imagegif($image120_final2, "assets/images/".$nameImg120); //mandando image 80px
					}


					//////////////////////////////////////////////////

					$largura3 = 400;// Maxíma
					$altura3 = 400;// Maxíma
					
					//TAMANHO ORIGINAL DA IMAGEM
					list($largura3Original, $altura3Original) = getimagesize($filename1);

					$ratio3 = $largura3Original / $altura3Original;

					//ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
					$largura3 = $altura3 * $ratio3;

					$image400_final2 = imagecreatetruecolor($largura3,$altura3);//criar uma imagem com essa altura e essa largura
					if($image['type'] == 'image/jpeg'){
						$imagem_original3 = imagecreatefromjpeg($filename1);
					}else if($image['type'] == 'image/png'){
						$imagem_original3 = imagecreatefrompng($filename1);
					}else if($image['type'] == 'image/gif'){
						$imagem_original3 = imagecreatefromgif($filename1);
					}

					imagecopyresampled($image400_final2, $imagem_original3, 0, 0, 0, 0, $largura3, $altura3, $largura3Original, $altura3Original); 

					if($image['type'] == 'image/jpeg'){
						$nameImg400x400 = "min_80".md5(rand(0,999).time().rand(0,999)).".jpg";
						imagejpeg($image400_final2, "assets/images/".$nameImg400x400); //mandando image 80px
					}else if($image['type'] == 'image/png'){
						$nameImg400x400 = "min_80".md5(rand(0,999).time().rand(0,999)).".png";
						imagepng($image400_final2, "assets/images/".$nameImg400x400); //mandando image 80px
					}else if($image['type'] == 'image/gif'){
						$nameImg400x400 = "min_80".md5(rand(0,999).time().rand(0,999)).".gif";
						imagegif($image400_final2, "assets/images/".$nameImg400x400); //mandando image 80px
					}


					$pg_depoiments->addDepo($nameImg200,$nameImg120,$nameImg400x400,$namePessoDepo,$depoimentoEsDepo);

					header("Location: ".BASE_URL."/painel/pgdepoiments/lista_depoiments");

				}


				if(isset($_POST['nameDepoEditar']) && !empty($_POST['nameDepoEditar'])){
					$nameDepoEditar = addslashes($_POST['nameDepoEditar']);
					$DepoEditar = $_POST['DepoEditar'];
					$idDepoEditar = addslashes($_POST['idDepoEditar']);
					


					if($_FILES['photoDepoEditar']['tmp_name']){
						$image = $_FILES['photoDepoEditar'];

						if($image['type'] == 'image/jpeg'){
							$nameImg = md5($image['name'].rand(0,9999).time().rand(0,9999)).'.jpg';
						}else if($image['type'] == 'image/png'){
							$nameImg = md5($image['name'].rand(0,9999).time().rand(0,9999)).'.png';
						}else if($image['type'] == 'image/gif'){
							$nameImg = md5($image['name'].rand(0,9999).time().rand(0,9999)).'.gif';
						}


						$filename1 = $image['tmp_name'];

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

						//////////////////////////////////////////////

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


						//////////////////////////////////////////////////

						$largura3 = 400;// Maxíma
						$altura3 = 400;// Maxíma
						
						//TAMANHO ORIGINAL DA IMAGEM
						list($largura3Original, $altura3Original) = getimagesize($filename1);

						$ratio3 = $largura3Original / $altura3Original;

						//ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
						$largura3 = $altura3 * $ratio3;

						$image400_final2 = imagecreatetruecolor($largura3,$altura3);//criar uma imagem com essa altura e essa largura
						if($image['type'] == 'image/jpeg'){
							$imagem_original3 = imagecreatefromjpeg($filename1);
						}else if($image['type'] == 'image/png'){
							$imagem_original3 = imagecreatefrompng($filename1);
						}else if($image['type'] == 'image/gif'){
							$imagem_original3 = imagecreatefromgif($filename1);
						}

						imagecopyresampled($image400_final2, $imagem_original3, 0, 0, 0, 0, $largura3, $altura3, $largura3Original, $altura3Original); 

						if($image['type'] == 'image/jpeg'){
							$nameImg400x400 = "min_80".md5(rand(0,999).time().rand(0,999)).".jpg";
							imagejpeg($image400_final2, "assets/images/".$nameImg400x400); //mandando image 80px
						}else if($image['type'] == 'image/png'){
							$nameImg400x400 = "min_80".md5(rand(0,999).time().rand(0,999)).".png";
							imagepng($image400_final2, "assets/images/".$nameImg400x400); //mandando image 80px
						}else if($image['type'] == 'image/gif'){
							$nameImg400x400 = "min_80".md5(rand(0,999).time().rand(0,999)).".gif";
							imagegif($image400_final2, "assets/images/".$nameImg400x400); //mandando image 80px
						}

						$pg_depoiments->editDepoImg($nameImg200,$nameImg80,$nameImg400x400,$idDepoEditar);

					}	


					$pg_depoiments->editDepoText($idDepoEditar,$nameDepoEditar,$DepoEditar);

					header("Location: ".BASE_URL."/painel/pgdepoiments/lista_depoiments");

				}

				$data['list_depo'] = $pg_depoiments->getDepoiments();

				$this->loadView("pgdepoiments" , $data);
			}else{
				//header("Location: ".BASE_URL."/painel");
				$data['aviso'] = "VER ALERT";
				$this->loadTemplate("pgdepoiments" , $data);
			}
		}


		public function delDepoi($id){
			$data = array();
			$pg_depoiments = new Pgdepoiments();

			$id = addslashes($id);

			$pg_depoiments->delDep($id);


			header("Location: ".BASE_URL."/painel/pgdepoiments/lista_depoiments");
		}


	}

?>
