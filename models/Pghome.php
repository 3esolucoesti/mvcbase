<?php 
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR');
	/**
	 * 
	 */
	class Pghome extends model
	{


    public function list(){
			$array = array();

			$sql =  "SELECT * FROM listadecadastros ";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}
      

			return $array;
    }

		
    public function veryficarsenumerojaestacadastrado($telefone){
			$array = array();

			$sql =  "SELECT COUNT(*) as c FROM listadecadastros WHERE telefone = :telefone ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':telefone',$telefone);
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
        $array = $sql['c'];
			}
      

			return $array;
    }

    public function addregistro($nomepessoa,$telcell,$tenhointeressenavaga){
      $sql = "INSERT INTO  listadecadastros SET nome = :nome, telefone = :telefone , created_at = NOW(), tenhointeressenavaga = :tenhointeressenavaga  ";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':nome',$nomepessoa);
			$sql->bindValue(':telefone',$telcell);
			$sql->bindValue(':tenhointeressenavaga',$tenhointeressenavaga);
			$sql->execute();
    }


  }
?>