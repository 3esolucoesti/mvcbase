<?php
	/**
	 * 
	 */
	class Pgdepoiments extends model{

		public function getDepoiments(){
			$array = array();

			$sql =  "SELECT * FROM pgdepoiments  ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}

		public function addDepo($nameImg200,$nameImg120,$nameImg400x400,$namePessoDepo,$depoimentoEsDepo){
			$sql =  "INSERT INTO pgdepoiments SET images120 = :images120, images200 = :images200, images = :images, name = :name, depoiment = :depoiment  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':images120',$nameImg120);
			$sql->bindValue(':images200',$nameImg200);
			$sql->bindValue(':images',$nameImg400x400);
			$sql->bindValue(':name',$namePessoDepo);
			$sql->bindValue(':depoiment',$depoimentoEsDepo);
			$sql->execute();
		}

		public function editDepoImg($nameImg200,$nameImg120,$nameImg400x400,$idDepoEditar){

			$array = array();
			$array2 = array();
			$array3 = array();


			$sql =  "SELECT * FROM pgdepoiments WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$idDepoEditar);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['images'];
				$array2 = $sql['images120'];
				$array3 = $sql['images200'];

				if(!empty($array)){
					unlink('../painel/assets/images/'.$array);
				}

				if(!empty($array2)){
					unlink('../painel/assets/images/'.$array2);
				}

				if(!empty($array3)){
					unlink('../painel/assets/images/'.$array3);
				}

			}

			$sql = "UPDATE  pgdepoiments SET images120 = :images120, images200 = :images200, images = :images WHERE id = :id  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':images120',$nameImg120);
			$sql->bindValue(':images200',$nameImg200);
			$sql->bindValue(':images',$nameImg400x400);
			$sql->bindValue(':id',$idDepoEditar);
			$sql->execute();
		}

		public function editDepoText($idDepoEditar,$nameDepoEditar,$DepoEditar){
			$sql = "UPDATE  pgdepoiments SET name = :name, depoiment = :depoiment WHERE id = :id  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':name',$nameDepoEditar);
			$sql->bindValue(':depoiment',$DepoEditar);
			$sql->bindValue(':id',$idDepoEditar);
			$sql->execute();
		}

		public function getDepoId($id){
			$array = array();

			$sql =  "SELECT * FROM pgdepoiments WHERE id = :id  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}


		public function delDep($id){
			$array = array();
			$array2 = array();
			$array3 = array();


			$sql =  "SELECT * FROM pgdepoiments WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['images'];
				$array2 = $sql['images120'];
				$array3 = $sql['images200'];

				if(!empty($array)){
					unlink('../painel/assets/images/'.$array);
				}

				if(!empty($array2)){
					unlink('../painel/assets/images/'.$array2);
				}

				if(!empty($array3)){
					unlink('../painel/assets/images/'.$array3);
				}

			}

			$sql = "DELETE FROM  pgdepoiments WHERE id = :id  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$id);
			$sql->execute();
		}


	}
?>