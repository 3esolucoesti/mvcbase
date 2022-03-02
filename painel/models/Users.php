<?php
	class Users extends model {//veryEmailTemCodigo recuperarSenha setLoggedUser doLogin veryToken
		
		private $userInfo;
		private $permissions;
		private $very;
		private $key = KEY_TOKEN;

		public $id_user;

		public function desbloquearConta($id){
			$sql = "UPDATE users SET lock_tela = :lock_tela WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':lock_tela', 0);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}
		
		public function isLogged($ip){
			
			if(isset($_SESSION[''.NOME_SESSION.'']) && !empty($_SESSION[''.NOME_SESSION.''])){

				$array = array();

				$sql = $this->db->prepare("SELECT * FROM users WHERE ip = :ip AND ISNULL(deleted_at)  ");
				$sql->bindValue(":ip", $ip);
				$sql->execute();

				if($sql->rowCount() > 0){
					return true;
				}else{
					return false;
				}

			}else{
				return false;
			}
			
		}


		public function veryEmailTemCodigo($emailParams){
			$array = array();

			$sql = "SELECT * FROM users WHERE email = :email AND ISNULL(deleted_at) ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':email',$emailParams);
			$sql->execute();

			if($sql->rowCount() > 0){

				$sql = $sql->fetch();
				$array = $sql['code_pass'];
				
				if($array != ""){
					return true;
				}else{
					return false;
				}

			}else{
				return false;
			}

		}

		

		public function isLock($id,$ip){
			$array = array();

			$sql = $this->db->prepare("SELECT * FROM users WHERE id = :id AND ip = :ip  AND ISNULL(deleted_at) ");
			$sql->bindValue(":id", $id);
			$sql->bindValue(":ip", $ip);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();	
				$array = $sql['lock_tela'];
			}

			return $array;
		}



		public function img_addlist($imageName){

			$array = array();

			$sql = "SELECT * FROM manipula_img_user WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',1);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['imagem'];

				if(!empty($array)){
					unlink('../painel/assets/images/'.$array);
				}

			}

			$sql = "UPDATE manipula_img_user SET imagem = :imagem WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':imagem', $imageName);
			$sql->bindValue(':id', 1);
			$sql->execute();

		}
		
		public function veryToken($token){
			$array = array();
	
			$jwt_split = explode('.', $token); 
		
			if(count($jwt_split) == 3){
		
				$signature  = hash_hmac("sha256",  $jwt_split[0].".".$jwt_split[1], $this->key, true);
				$bsig = $this->base64url_encode($signature);
		
				if($bsig == $jwt_split[2]){
		
					$array = json_decode($this->base64url_decode($jwt_split[1]));
					return $array;
		
				}else{
					return false;
				}
		
			}else{
				return false;
			}
		}

		private function base64url_encode( $data ){
			return rtrim( strtr( base64_encode( $data ), '+/', '-_'), '=');
		}
		
		private function base64url_decode( $data ){
			return base64_decode( strtr( $data, '-_', '+/') . str_repeat('=', 3 - ( 3 + strlen( $data )) % 4 ));
		}
	
		
		public function doLogin($email,$pass){

			$verycompany = new Login();
			$token = array();

			$sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password AND user_lock = :user_lock  AND ISNULL(deleted_at) ");
			$sql->bindValue(':email',$email);
			$sql->bindValue(':password',md5($pass));
			$sql->bindValue(':user_lock',0);
			$sql->execute();
			
			if($sql->rowCount() > 0){
				$sql = $sql->fetch();	

				$token = $verycompany->auth($token="",$sql['id']);
				
				//atualizar o token
				$sql2 = "UPDATE users SET token = :token WHERE id = :id ";
				$sql2 = $this->db->prepare($sql2);
				$sql2->bindValue(':id', $sql['id']);
				$sql2->bindValue(':token', $token);
				$sql2->execute();
		
		
				return $token;

			}else{
				return false;	
			}	
		}

		public function analize($email){
			$sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND user_lock = :user_lock AND ISNULL(deleted_at) ");
			$sql->bindValue(':email',$email);
			$sql->bindValue(':user_lock',0);
			$sql->execute();

			if($sql->rowCount() > 0){
				return true;
			}else{
				return false;
			}

		}
		
		public function setLoggedUser($token){

			if(isset($token) && !empty($token)){

					$sql = $this->db->prepare("SELECT * FROM users WHERE token = :token  AND ISNULL(deleted_at) ");
					$sql->bindValue(':token', $token);
					$sql->execute();
				
					if($sql->rowCount() > 0){
						$this->userInfo = $sql->fetch();	
						$this->permissions = new Permissions();
						$this->permissions->setGroup($this->userInfo['id_group'],$this->userInfo['id_company']);
					}
				
				
			}

		}


		public function unlock($email,$pass){
			$array = array();

			$sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password AND id = :id AND ISNULL(deleted_at)  ");
			$sql->bindValue(":email", $email);
			$sql->bindValue(":password", md5($pass));
			$sql->bindValue(":id", $_SESSION[''.NOME_SESSION.'']);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $this->db->prepare("UPDATE users SET lock_tela = :lock_tela WHERE id = :id   ");	
				$sql->bindValue(":lock_tela", 0);
				$sql->bindValue(":id", $_SESSION[''.NOME_SESSION.'']);
				$sql->execute();
				return true;
			}else{
				return false;
			}

		}

		public function logout(){
			unset($_SESSION[''.NOME_SESSION.'']);
		}

		public function changeUser($email,$pass){

			$array = array();
			$sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password AND ISNULL(deleted_at) ");
			$sql->bindValue(':email',$email);
			$sql->bindValue(':password',md5($pass));
			$sql->execute();
			
			if($sql->rowCount() > 0){
				unset($_SESSION[''.NOME_SESSION.'']);

				$sql = $sql->fetch();	
				$_SESSION[''.NOME_SESSION.''] = $sql['id'];
				
				$array = true;
				
			}else{
				$array = false;	
			}


			return $array;

		}
		
		public function hasPermission($name){
			return $this->permissions->hasPermission($name);
		}

		public function getCompany(){
			if(isset($this->userInfo['id_company'])){
				return $this->userInfo['id_company'];
			}else{
				return 0;
			}
		}

		public function getGroupUser(){
			if(isset($this->userInfo['id_group'])){
				return $this->userInfo['id_group'];
			}else{
				return 0;
			}
		}

		public function getName(){
			if(isset($this->userInfo['name'])){
				return $this->userInfo['name'];
			}else{
				return '';
			}
		}

		public function getEmail(){
			if(isset($this->userInfo['email'])){
				return $this->userInfo['email'];
			}else{
				return '';
			}
		}

		public function getImagem(){
			if(isset($this->userInfo['imagem'])){
				return $this->userInfo['imagem'];
			}else{
				return '';
			}
		}

		public function getId(){
			if(isset($this->userInfo['id'])){
				return $this->userInfo['id'];
			}else{
				return '';
			}
		}

		public function getSector(){
			if(isset($this->userInfo['sector'])){
				return $this->userInfo['sector'];
			}else{
				return '';
			}
		}

		public function getCodePesonReseller(){
			if(isset($this->userInfo['codi_reseller'])){
				return $this->userInfo['codi_reseller'];
			}else{
				return '';
			}
		}

		public function veryIdBlock($id,$id_company){
			$sql = $this->db->prepare("SELECT id FROM users WHERE id = :id AND id_company = :id_company ");
			$sql->bindValue(":id", $id);
			$sql->bindValue(":id_company", $id_company);
			$sql->execute();

			if($sql->rowCount() > 0){

				$sql = $this->db->prepare("UPDATE users SET lock_tela = :lock_tela WHERE id = :id AND id_company = :id_company ");
				$sql->bindValue(":lock_tela",1);
				$sql->bindValue(":id", $id);
				$sql->bindValue(":id_company", $id_company);
				$sql->execute();

				return true;
			}else{
				return false;
			}

		}

		public function getInfo($id, $id_company){
			$array = array();

			$sql = $this->db->prepare("SELECT * FROM users WHERE id = :id AND id_company = :id_company AND ISNULL(deleted_at) ");
			$sql->bindValue(':id', $id);
			$sql->bindValue(':id_company', $id_company);
			$sql->execute();
			
			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function getInfoGeral($id_company){
			$array = array();

			$sql = $this->db->prepare("SELECT * FROM users WHERE id_company = :id_company AND ISNULL(deleted_at) ");
			$sql->bindValue(':id_company', $id_company);
			$sql->execute();
			
			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}


		public function findUsersInGroup($id){
			$sql = $this->db->prepare("SELECT COUNT(*) as c FROM users WHERE id_group = :group AND ISNULL(deleted_at) ");
			$sql->bindValue(':group', $id);
			$sql->execute();
			$row = $sql->fetch();

			if($row['c'] == 0){
				return false;
			}else{
				return true;
			}

		}	

		public function getList($id_company){
			$array = array();

			$sql = $this->db->prepare("	
				SELECT 
					users.id, 
					users.email, 
					permission_groups.name 
				FROM  users 
				LEFT JOIN permission_groups ON permission_groups.id = users.id_group
				WHERE users.id_company = :id_company AND ISNULL(users.deleted_at) ");

			$sql->bindValue(':id_company',$id_company);
			$sql->execute();
			
			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();	
			}

			return $array;
		}

		public function add($name,$email,$passEmMd5,$group,$id_company,$funcao){
			
			$sql = $this->db->prepare("SELECT COUNT(*) as c FROM users WHERE email = :email AND ISNULL(deleted_at) ");
			$sql->bindValue(':email', $email);
			$sql->execute();
			$row = $sql->fetch();


			if($row['c'] == 0){
				$sql = $this->db->prepare("INSERT INTO users SET id_company = :id_company, name = :name, email = :email, password = :password, id_group = :id_group, sector = :sector  ");
				$sql->bindValue(':id_company', $id_company);
				$sql->bindValue(':name', $name);
				$sql->bindValue(':email', $email);
				$sql->bindValue(':password', $passEmMd5);
				$sql->bindValue(':id_group', $group);
				$sql->bindValue(':sector', $funcao);
				$sql->execute();

				return '1';
			}else{
				return '0';
			}
			
		}

		public function edit($name,$pass,$group,$id,$id_company,$funcao){

			$sql = $this->db->prepare("UPDATE users SET name = :name, id_group = :id_group, sector = :sector  WHERE id = :id AND id_company = :id_company ");
			$sql->bindValue(':id', $id);
			$sql->bindValue(':id_company', $id_company);
			$sql->bindValue(':id_group', $group);
			$sql->bindValue(':sector', $funcao);
			$sql->bindValue(':name', $name);
			$sql->execute();

			if(!empty($pass)){
				$passEmMd5 = md5($pass);
				$sql = $this->db->prepare("UPDATE users SET password = :password  WHERE id = :id AND id_company = :id_company ");
				$sql->bindValue(':id', $id);
				$sql->bindValue(':id_company', $id_company);
				$sql->bindValue(':password', $passEmMd5);
				$sql->execute();
			}

		}

		public function delete($id, $id_company){
			$sql = $this->db->prepare("UPDATE users SET deleted_at = NOW() WHERE id = :id  ");
			$sql->bindValue(':id', $id);
			// $sql->bindValue(':id_company', $id_company);
			$sql->execute();
		}

		public function dataPerson(){
			return $this->userInfo;
		}

		public function editName($nameNew,$id_company,$id){
			$array = array();
			$array2 = array();

			$sql = "SELECT * FROM manipula_img_user";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['imagem'];
			}

			if(empty($array)){
				$sql = $this->db->prepare("UPDATE users SET name = :name  WHERE id = :id AND id_company = :id_company ");
				$sql->bindValue(':id', $id);
				$sql->bindValue(':id_company', $id_company);
				$sql->bindValue(':name', $nameNew);
				$sql->execute();
			}else{


				$sql = "SELECT * FROM users WHERE id = :id ";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':id',$id);
				$sql->execute();

				if($sql->rowCount() > 0){
					$sql = $sql->fetch();
					$array2 = $sql['imagem'];

					if(!empty($array2)){
						unlink('../painel/assets/images/'.$array2);
					}

				}


				$sql = $this->db->prepare("UPDATE users SET name = :name, imagem = :imagem WHERE id = :id AND id_company = :id_company ");
				$sql->bindValue(':id', $id);
				$sql->bindValue(':id_company', $id_company);
				$sql->bindValue(':name', $nameNew);
				$sql->bindValue(':imagem',$array);
				$sql->execute();

				$sql = $this->db->prepare("UPDATE manipula_img_user SET imagem = :imagem WHERE id = :id  ");
				$sql->bindValue(':id', 1);
				$sql->bindValue(':imagem', '');
				$sql->execute();

			}
			
		}

		public function alterarPass($pass01,$id_company,$id){

			$array = array();
			$array2 = array();

			$sql = "SELECT * FROM manipula_img_user ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['imagem'];
			}

			if(empty($array)){
				$sql = $this->db->prepare("UPDATE users SET password = :password  WHERE id = :id AND id_company = :id_company ");
				$sql->bindValue(':id', $id);
				$sql->bindValue(':id_company', $id_company);
				$sql->bindValue(':password', md5($pass01));
				$sql->execute();
			}else{


				$sql = "SELECT * FROM users WHERE id = :id ";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':id',$id);
				$sql->execute();

				if($sql->rowCount() > 0){
					$sql = $sql->fetch();
					$array2 = $sql['imagem'];

					if(!empty($array2)){
						unlink('../painel/assets/images/'.$array2);
					}

				}


				$sql = $this->db->prepare("UPDATE users SET password = :password, imagem = :imagem  WHERE id = :id AND id_company = :id_company ");
				$sql->bindValue(':id', $id);
				$sql->bindValue(':id_company', $id_company);
				$sql->bindValue(':password', md5($pass01));
				$sql->bindValue(':imagem',$array);
				$sql->execute();

				$sql = $this->db->prepare("UPDATE manipula_img_user SET imagem = :imagem WHERE id = :id  ");
				$sql->bindValue(':id', 1);
				$sql->bindValue(':imagem', '');
				$sql->execute();

			}

		}



		public function userBloqueadoLogin($email){
			$sql = $this->db->prepare("SELECT email FROM users  WHERE email = :email AND ISNULL(deleted_at) ");
				$sql->bindValue(':email', $email);
				$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $this->db->prepare("UPDATE users SET  user_lock = :user_lock  WHERE email = :email ");
					$sql->bindValue(':user_lock', 1);
					$sql->bindValue(':email', $email);
					$sql->execute();
			}else{
				unset($_SESSION[''.NOME_SESSION.'']);
			}
		}

		public function veryemail($email){
			$sql = $this->db->prepare("SELECT email FROM users WHERE email = :email AND ISNULL(deleted_at)  ");
			$sql->bindValue(":email", $email);
			$sql->execute();

			if($sql->rowCount() > 0){
				return true;
			}else{
				return false;
			}

		}

		public function salveCodeUser($email,$code){
			$u = new Users();
			if($u->veryemail($email) == true){
				$sql = $this->db->prepare("UPDATE users SET code_pass = :code_pass WHERE email = :email ");
				$sql->bindValue(":email", $email);
				$sql->bindValue(":code_pass", $code);
				$sql->execute();
			}
		}

		public function veryCodCerto($cod){

			$sql = "SELECT * FROM users WHERE code_pass = :code_pass AND ISNULL(deleted_at) ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':code_pass',$cod);
			$sql->execute();

			if($sql->rowCount() > 0){
				return true;
			}else{
				return false;
			}

		}

		public function desativarCode($cod){
			$array = array(); 

			$sql = "SELECT * FROM users WHERE code_pass = :code_pass AND ISNULL(deleted_at) ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':code_pass',$cod);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['id'];
			}

			$sql = $this->db->prepare("UPDATE users SET code_pass = :code_pass WHERE id = :id  ");
			$sql->bindValue(':id',$array);
			$sql->bindValue(':code_pass','');
			$sql->execute();

			return $array;
		}

		public function limparCode($email){
			$array = array(); 

			$sql = "SELECT * FROM users WHERE email = :email AND ISNULL(deleted_at) ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':email',$email);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['id'];
			}

			$sql = $this->db->prepare("UPDATE users SET code_pass = :code_pass WHERE id = :id ");
			$sql->bindValue(':id',$array);
			$sql->bindValue(':code_pass','');
			$sql->execute();

			return $array;
		}

		public function verifikId($id){

			$array = array(); 

			$sql = "SELECT * FROM users WHERE id = :id AND ISNULL(deleted_at) ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();

				return true;
			}else{
				return false;
			}

		}

		public function recuperarSenha($cod,$password1){

			$array2 = array();
			
			$sql2 = "SELECT * FROM users WHERE code_pass = :code_pass AND ISNULL(deleted_at) ";
			$sql2 = $this->db->prepare($sql2);
			$sql2->bindValue(':code_pass',$cod);
			$sql2->execute();

			if($sql2->rowCount() > 0){
				$array2 = $sql2->fetch();

				$sql = $this->db->prepare("UPDATE users SET password = :password, user_lock = :user_lock, bloc = :bloc WHERE id = :id ");
				$sql->bindValue(':id',$array2['id']);
				$sql->bindValue(':user_lock', 0);
				$sql->bindValue(':bloc', 0);
				$sql->bindValue(':password',md5($password1));
				$sql->execute();


			}

		

			$array = array(); 

			$sql = "SELECT * FROM users WHERE id = :id AND ISNULL(deleted_at) ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$array2['id']);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;


		}
		
	}/// FIM MODEL

?>