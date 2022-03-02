<?php
	class Pagessister extends model {

    public function getinfo(){
      $array = array();

      $sql = "SELECT * FROM pagessister WHERE ISNULL(deleted_at) ";
			$sql = $this->db->prepare($sql);
      $sql->execute();

      if($sql->rowCount() > 0){

        $array = $sql->fetchAll();

      }

      return $array;
    }


    public function getinfoid($id){
      $array = array();

      $sql = "SELECT * FROM pagessister WHERE id = :id AND ISNULL(deleted_at) ";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':id', $id);
      $sql->execute();
      
      if($sql->rowCount() > 0){
        $array = $sql->fetch();
      }

      return $array;
    }


   public function add($nome){

    $array = array();
      
    $sql = "INSERT INTO pagessister SET name = :nome ";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->execute();


   }



   public function edit($nome,$ideditar){

      $array = array();
        
      $sql = "UPDATE pagessister SET  name = :nome WHERE id = :id ";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':id', $ideditar);
      $sql->bindValue(':nome', $nome);
      $sql->execute();

   }


   public function del($ideditarDel){

    $array = array();
        
    $sql = "UPDATE  pagessister SET deleted_at = NOW()  WHERE id = :id ";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', $ideditarDel);
    $sql->execute();

   }

	}/// FIM MODEL

?>