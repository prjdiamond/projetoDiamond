<?php
	class Pontoturistico
	{
		public function __construct(
            private int $id_pontoTuristico = "",
            private string $nome = "", 
            private string $descricao = "",              
            private string $ingresso = "",
            private string $horarioFuncionamento = "",
            private string $logradouro = "",            
            private string $numero = "",
            private string $bairro = "",
            private string $cep = "",
            private string $situacao = "",){}
            
		
		
		public function getId_pontoTuristico()
		{
			return $this->id_pontoTuristico;
		}
        		
		public function getNome()
		{
			return $this->nome;
		}

		public function getDescricao()
		{
			return $this->descricao;
		}
		
		
		public function getIngresso()
		{
			return $this->ingresso;
		}
		public function getHorarioFuncionamento()
		{
			return $this->horarioFuncionamento;
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
		public function setId_pontoTuristico($Id_pontoTuristico)
		{
			$this->id_pontoTuristico = $id_pontoTuristico;
		}

        public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function setDescricao($descricao)
		{
			$this->descricao = $descricao;
		}
		
		public function setPreco($email)
		{
			$this->email = $email;
		}
		
		public function setCategoria($senha)
		{
			$this->senha = $senha;
		}
		public function setCategoria($telefone)
		{
			$this->telefone = $telefone;
		}
		public function setCategoria($foto_perfil)
		{
			$this->foto_perfil = $foto_perfil;
		}
		public function setCategoria($tipo)
		{
			$this->tipo = $tipo;
		}
		public function setCategoria($logradouro)
		{
			$this->logradouro = $logradouro;
		}
		public function setCategoria($numero)
		{
			$this->numero = $numero;
		}
		public function setCategoria($bairro)
		{
			$this->bairro = $bairro;
		}
		public function setCategoria($cep)
		{
			$this->cep = $cep;
		}
		public function setCategoria($situacao)
		{
			$this->categoria = $situacao;
		}
	}
?>