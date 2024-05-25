<?php
	class Hospedagem
	{
		public function __construct(
            private int $id_hospedagem = "",
            private string $nome = "", 
            private string $descricao = "",              
            private string $link = "",
            private string $endereco = "",
            private string $classificacao = "",            
            private string $logradouro = "",
            private string $numero = "",
            private string $bairro = "",
            private string $cep = "",
            private bool $situacao = "",){}
            
		
		
		public function getId_hospedagem()
		{
			return $this->id_hospedagem;
		}
        		
		public function getNome()
		{
			return $this->nome;
		}

		public function getDescricao()
		{
			return $this->descricao;
		}
		
		
		public function getLink()
		{
			return $this->link;
		}
		public function getEndereco()
		{
			return $this->endereco;
		}
		public function getClassificacao()
		{
			return $this->classificacao;
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
			return $this->cep;
		}
		public function getSituacao()
		{
			return $this->situacao;
		}
		


        //METHODO SET
		public function setId_hospedagem($id_hospedagem)
		{
			$this->id_hospedagem = $id_hospedagem;
		}

        public function setNome($nome)
		{
			$this->nome = $nome;
		}
	
		
		public function setDescricao($descricao)
		{
			$this->descricao = $descricao;
		}
		public function setLink($link)
		{
			$this->link = $link;
		}
		public function setEndereco($endereco)
		{
			$this->endereco = $endereco;
		}
		public function setClassificacao($classificacao)
		{
			$this->classificacao = $classificacao;
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
			$this->cep = $cep;
		}
		public function setSituacao($situacao)
		{
			$this->situacao = $situacao;
		}
	}
?>