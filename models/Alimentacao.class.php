<?php
	class Alimentacao
	{
		public function __construct(
            private int $id_alimentacao = "",
            private string $nome = "", 
            private string $telefone = "",              
            private string $email = "",
            private string $link = "",
            private string $descricao = "",            
            private string $imagem = "",
            private string $logradouro = "",
            private string $numero = "",
            private string $bairro = "",
            private string $cep = "",
            private bool $situacao = "",){}
            
		
		
		public function getId_alimentacao()
		{
			return $this->id_alimentacao;
		}
        		
		public function getNome()
		{
			return $this->nome;
		}

		public function getTelefone()
		{
			return $this->telefone;
		}
		
		
		public function getEmail()
		{
			return $this->email;
		}
		public function getLink()
		{
			return $this->link;
		}
		public function getDescricao()
		{
			return $this->descricao;
		}
		public function getImagem()
		{
			return $this->imagem;
		}
		public function getLogradouro()
		{
			return $this->logradouro;
		}
		public function getNumero()
		{
			return $this->numero;
		}
		public function getBairro()
		{
			return $this->bairro;
		}
		public function getCep()
		{
			return $this->getCep;
		}
		public function getSituacao()
		{
			return $this->situacao;
		}
		


        //METHODO SET
		public function setId_alimentacao($id_alimentacao)
		{
			$this->id_alimentacao = $id_alimentacao;
		}

        public function setNome($nome)
		{
			$this->nome = $nome;
		}	
		
		public function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}
		public function setEmail($email)
		{
			$this->email = $email;
		}
		public function setLink($link)
		{
			$this->link = $link;
		}
		public function setDescricao($descricao)
		{
			$this->descricao = $descricao;
		}
		public function setImagem($imagem)
		{
			$this->imagem = $imagem;
		}
		public function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;
		}
		public function setNumero($numero)
		{
			$this->numero = $numero;
		}
		public function setBairro($bairro)
		{
			$this->bairro = $bairro;
		}
		public function setCep($cep)
		{
			$this->getcep = $cep;
		}
		public function setSituacao($situacao)
		{
			$this->situacao = $situacao;
		}
	}
?>