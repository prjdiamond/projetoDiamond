<?php
	class cidadeDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($cidade)
		{
			$sql = "INSERT INTO cidade (descritivo, situacao) VALUES(?,?)";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $cidade->getId_cidade());
			$stm->bindValue(2, $cidade->getNome());
			$stm->bindValue(3, $cidade->getUf());		
			$stm->bindValue(4, $cidade->getSituacao());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			
		}
		public function alterar($cidade)
		{
			$sql = "UPDATE cidade SET descritivo = ? WHERE idcidade= ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $cidade->getId_cidade());
			$stm->bindValue(2, $cidade->getNome());
			$stm->bindValue(3, $cidade->getUf());		
			$stm->bindValue(4, $cidade->getSituacao());
			$stm->execute();
			$this->db = null;
		}
		
		public function excluir($cidade)
		{
			$sql = "DELETE FROM cidade WHERE idcidade = ?";
			$stm = $this->db->prepare($sql);			
            $stm->bindValue(1, $cidade->getId_cidade());
			$stm->execute();
			$this->db = null;
		}
		 
		public function buscar_todas()
		{
			//frase sql que será executada
			$sql = "SELECT * FROM cidade as p, cidade as c WHERE p.id_cidade = c.id_cidade";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			//retornar o resultado da execução da frase sql
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		public function buscar_uma_cidade($cidade)
		{
			$sql = "SELECT * FROM cidade WHERE id_cidade = ?";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$cidade->getId_cidade());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		public function alterar_situacao_cidade($cidade)
		{
			$sql = "UPDATE cidade SET situacao = ? WHERE id_cidade = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $cidade->getId_cidade());
			$stm->bindValue(2, $cidade->getNome());
			$stm->bindValue(3, $cidade->getUf());		
			$stm->bindValue(4, $cidade->getSituacao());
			$this->db = null;
		}
	}//fim da classe cidadeDAO
?>