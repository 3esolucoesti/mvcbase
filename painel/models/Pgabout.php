<?php
	/**
	 * 
	 */
	class Pgabout extends model{

		public function editImgTopo($nameImg200,$nameImg1920x450){

			$array = array();
			$array2 = array();

			$sql =  "SELECT * FROM pg_about WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',1);
			$sql->execute();


			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['imagemtopo'];
				$array2 = $sql['imgfundo200'];

				if(!empty($array)){
					unlink('../painel/assets/images/'.$array);
				}

				if(!empty($array2)){
					unlink('../painel/assets/images/'.$array2);
				}

			}

			$sql = "UPDATE  pg_about SET imagemtopo = :imagemtopo, imgfundo200 = :imgfundo200  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':imagemtopo',$nameImg1920x450);
			$sql->bindValue(':imgfundo200',$nameImg200);
			$sql->execute();
		}


    public function getinfohome(){
			$array = array();

			$sql =  "SELECT * FROM pg_about WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',1);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
    }
    
    public function update($textsobrenos,$texmissaoedit,$textvisaoedit,$textvaloresedit){
      $sql = "UPDATE pg_about SET sobre_desc = :sobre_desc, sobre_missao = :sobre_missao, sobre_visao = :sobre_visao, sobre_valores = :sobre_valores WHERE id = :id  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':sobre_desc',$textsobrenos);
			$sql->bindValue(':sobre_missao',$texmissaoedit);
			$sql->bindValue(':sobre_visao',$textvisaoedit);
			$sql->bindValue(':sobre_valores',$textvaloresedit);
			$sql->bindValue(':id',1);
			$sql->execute();
    }

    public function updatePhoto($nameImg800x500){

			$array = array();

			$sql =  "SELECT * FROM pg_about WHERE id = :id ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id',1);
			$sql->execute();


			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$array = $sql['images'];

				if(!empty($array)){
					unlink('../painel/assets/images/'.$array);
				}

			}

        $sql = "UPDATE pg_about SET images = :images WHERE id = :id ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':images',$nameImg800x500);
        $sql->bindValue(':id',1);
        $sql->execute();

    }
    



	}
?>