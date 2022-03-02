<?php
	/**
	 * 
	 */
	class Pghome extends model{
		
    public function getPgHome(){
      $array = array();

      $sql = "SELECT *  FROM pghome WHERE id = :id ";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':id',1);
      $sql->execute();

      if($sql->rowCount() > 0){
        $array = $sql->fetch();
      }

      return $array;
    }


    public function getSlide(){
			$array = array();

			$sql =  "SELECT * FROM pghome_slide ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}

		public function getSlidePagi($offeset,$limit){
			$array = array();

			$sql =  "SELECT * FROM pghome_slide LIMIT $offeset,$limit ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}

		public function totalslide(){
			$array = array();

			$sql =  "SELECT COUNT(*) as c FROM pghome_slide ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['c'];
			}else{
				$array = 0;
			}

			return $array;
		}

		public function getPriSlide(){
			$array = array();

			$sql =  "SELECT * FROM pghome_slide ORDER BY ID ASC ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function getSlideId($id){
			$array = array();

			$sql =  "SELECT * FROM pghome_slide WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function addSlide($nameImg200,$nameImg80,$nameImg,$tituSlide,$descSlide){
			$sql =  "INSERT INTO  pghome_slide SET images = :images, images200 = :images200, images80 = :images80, title = :title, descricion = :descricion ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':images200',$nameImg200);
			$sql->bindValue(':images80',$nameImg80);
			$sql->bindValue(':images',$nameImg);
			$sql->bindValue(':title',$tituSlide);
			$sql->bindValue(':descricion',$descSlide);
			$sql->execute();
		}

		public function editImgSlide($nameImg200,$nameImg80,$idSlideEditar,$nameImgEdit){

			$array = array();
			$array2 = array();
			$array3 = array();

			$sql =  "SELECT * FROM pghome_slide WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$idSlideEditar);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['images'];
				$array2 = $sql['images80'];
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

			$sql = "UPDATE  pghome_slide SET images = :images, images80 = :images80, images200 = :images200 WHERE id = :id  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':images',$nameImgEdit);
			$sql->bindValue(':images80',$nameImg80);
			$sql->bindValue(':images200',$nameImg200);
			$sql->bindValue(':id',$idSlideEditar);
			$sql->execute();

		}

		public function editTextSlide($tituSlideEditar,$descSlideEditar,$idSlideEditar){
			$sql =  "UPDATE pghome_slide SET  title = :title, descricion = :descricion  WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$idSlideEditar);
			$sql->bindValue(':title',$tituSlideEditar);
			$sql->bindValue(':descricion',$descSlideEditar);
			$sql->execute();

		}


		public function delSlide($id){

			$array = array();
			$array2 = array();
			$array3 = array();


			$sql =  "SELECT * FROM pghome_slide WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['images'];
				$array2 = $sql['images80'];
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

			$sql = "DELETE FROM  pghome_slide WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',$id);
			$sql->execute();
    }
    

    public function edittextorcamento($textorcamentohome){

      $sql = "UPDATE  pghome SET textorcamento = :textorcamento WHERE id = :id  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':textorcamento',$textorcamentohome);
			$sql->bindValue(':id', 1);
			$sql->execute();

    }

    public function editRodape($email_rodape01,$name_phone,$name_cel,$endereco__rodape,$link_01,$link_02,$link_03,$horariofuncionamento){

			$sql =  "UPDATE pghome SET  email01 = :email01, phone01 = :phone01, cell01 = :cell01, endereco = :endereco, linkrede01 = :linkrede01, linkrede02 = :linkrede02, linkrede03 = :linkrede03, horariofuncionamento = :horariofuncionamento WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id', 1);

			$sql->bindValue(':email01',$email_rodape01);
			$sql->bindValue(':phone01',$name_phone);
			$sql->bindValue(':cell01',$name_cel);
			$sql->bindValue(':endereco',$endereco__rodape);

			$sql->bindValue(':linkrede01',$link_01);
			$sql->bindValue(':linkrede02',$link_02);
			$sql->bindValue(':linkrede03',$link_03);
			
			$sql->bindValue(':horariofuncionamento',$horariofuncionamento);

			$sql->execute();

		}


	}
?>