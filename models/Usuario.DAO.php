<?php
	class UsuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($usuario)
		{
			$sql = "INSERT INTO usuario (descritivo, situacao) VALUES(?,?)";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $usuario->getIdusuario());
			$stm->bindValue(2, $usuario->getNome());
			$stm->bindValue(3, $usuario->getEmail());
			$stm->bindValue(4, $usuario->getSenha());
			$stm->bindValue(5, $usuario->getTelefone());
			$stm->bindValue(6, $usuario->getFoto_perfil());
			$stm->bindValue(7, $usuario->getTipo());
			$stm->bindValue(8, $usuario->getLogradouro());
			$stm->bindValue(9, $usuario->getNumero());
			$stm->bindValue(10, $usuario->getBairro());
			$stm->bindValue(11, $usuario->getCep());
			$stm->bindValue(12, $usuario->getSituacao());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			
		}
		public function alterar($usuario)
		{
			$sql = "UPDATE usuario SET descritivo = ? WHERE idusuario= ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $usuario->getIdusuario());
			$stm->bindValue(2, $usuario->getNome());
			$stm->bindValue(3, $usuario->getEmail());
			$stm->bindValue(4, $usuario->getSenha());
			$stm->bindValue(5, $usuario->getTelefone());
			$stm->bindValue(6, $usuario->getFoto_perfil());
			$stm->bindValue(7, $usuario->getTipo());
			$stm->bindValue(8, $usuario->getLogradouro());
			$stm->bindValue(9, $usuario->getNumero());
			$stm->bindValue(10, $usuario->getBairro());
			$stm->bindValue(11, $usuario->getCep());
			$stm->bindValue(12, $usuario->getSituacao());
			$stm->execute();
			$this->db = null;
		}
		
		public function excluir($usuario)
		{
			$sql = "DELETE FROM usuario WHERE idusuario = ?";
			$stm = $this->db->prepare($sql);			
            $stm->bindValue(1, $usuario->getIdusuario());
			$stm->execute();
			$this->db = null;
		}
		 
		public function buscar_todos()
		{
			//frase sql que será executada
			$sql = "SELECT * FROM usuario as p, cidade as c WHERE p.id_cidade = c.id_cidade";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			//retornar o resultado da execução da frase sql
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		public function buscar_um_usuario($usuario)
		{
			$sql = "SELECT * FROM usuario WHERE idusuario = ?";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$usuario->getIdisuario());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		public function alterar_situacao_usuario($usuario)
		{
			$sql = "UPDATE usuario SET situacao = ? WHERE idusuario = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $usuario->getIdusuario());
			$stm->bindValue(2, $usuario->getNome());
			$stm->bindValue(3, $usuario->getEmail());
			$stm->bindValue(4, $usuario->getSenha());
			$stm->bindValue(5, $usuario->getTelefone());
			$stm->bindValue(6, $usuario->getFoto_perfil());
			$stm->bindValue(7, $usuario->getTipo());
			$stm->bindValue(8, $usuario->getLogradouro());
			$stm->bindValue(9, $usuario->getNumero());
			$stm->bindValue(10, $usuario->getBairro());
			$stm->bindValue(11, $usuario->getCep());
			$stm->bindValue(12, $usuario->getSituacao());
			$this->db = null;
		}
	}//fim da classe usuarioDAO
?>