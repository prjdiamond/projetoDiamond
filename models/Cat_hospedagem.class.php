<?php
	class Cat_hospedagem
	{
		public function __construct(
            private int $id_catHospedagem = "",
            private string $descritivo = "", 
            private string $situacao = "",
			private $cat_hospedagem = null){}){}
            
		
		
		public function getId_catHospedagem()
		{
			return $this->id_catHospedagem;
		}
        		
		public function getDescritivo()
		{
			return $this->descritivo;
		}

		public function getSituacao()
		{
			return $this->situacao;
		}
		

        //METHODO SET
		public function setId_catHospedagem($id_catHospedagem)
		{
			$this->id_catHospedagem = $id_catHospedagem;
		}

        public function setDescritivo($descritivo)
		{
			$this->descritivo = $descritivo;
		}
	
		
		public function setSituacao($situacao)
		{
			$this->situacao = $situacao;
		}
		
?>