<?php
	/**
	 * 
	 */
	class Pgcontact extends model{
		

		public function nmsg(){
			$array = array();

				$sql = "SELECT COUNT(*) as c FROM mensages WHERE status = :status ";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':status',0);
				$sql->execute();

				if($sql->rowCount() > 0){
					$sql = $sql->fetch();
					$array = $sql['c'];
				}else{
					$array = 0;
				}

				return $array;
		}

		public function getEmails(){
			$array = array();

			$sql = "SELECT * FROM mensages  ORDER BY ID DESC  ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}	


			public function totaldeemails(){
				$array = array();

				$sql =  "SELECT COUNT(*) as c FROM mensages ";
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

			public function mudarstatus($id){
				$sql = "UPDATE mensages SET status = :status WHERE id = :id ";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':status', 1);
				$sql->bindValue(':id', $id);
				$sql->execute();
			}

			public function delmsg($id){
				$sql = "DELETE FROM mensages  WHERE id = :id ";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':id', $id);
				$sql->execute();
			}

			public function newsleder(){
				$array = array();
		
					$sql = "SELECT COUNT(*) as c FROM newsletter ";
					$sql = $this->db->prepare($sql);
					// $sql->bindValue(':status',0);
					$sql->execute();
		
					if($sql->rowCount() > 0){
						$sql = $sql->fetch();
						$array = $sql['c'];
					}else{
						$array = 0;
					}
		
					return $array;
			}

			public function getLeads($offeset,$limit){
				$array = array();
	
				$sql = "SELECT *  FROM newsletter LIMIT $offeset,$limit ";
				$sql = $this->db->prepare($sql);
				$sql->execute();
	
				if($sql->rowCount() > 0){
					$array = $sql->fetchAll();
				}
	
				return $array;
			}


			
		public function totallides(){
			$array = array();

			$sql =  "SELECT COUNT(*) as c FROM newsletter ";
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


	}
?>