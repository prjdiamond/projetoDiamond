<?php
	class Cat_pontoturistico
	{
		public function __construct(
            private int $id_catPontoTuristico = "",
            private string $descricao = "",
            private string $situacao = "",){}
            
		
		
		public function getId_catPontoTuristico()
		{
			return $this->id_catPontoTuristico;
		}
        		
		public function getDescricao()
		{
			return $this->descricao;
		}

		public function getSituacao()
		{
			return $this->situacao;
		}
		
		

        //METHODO SET
		public function setId_catPontoTuristico($id_catPontoTuristico)
		{
			$this->id_catPontoTuristico = $id_catPontoTuristico;
		}

        public function setDescricao($descricao)
		{
			$this->descricao = $descricao;
		}
		
		public function setSituacao($situacao)
		{
			$this->situacao = $situacao;
		}	
	}
?>