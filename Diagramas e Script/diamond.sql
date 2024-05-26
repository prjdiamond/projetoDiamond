CREATE TABLE cat_pontoTuristico (
  id_catPontoTuristico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descritivo VARCHAR(100) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(id_catPontoTuristico)
);

CREATE TABLE cidade (
  id_cidade INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  uf CHAR(2) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(id_cidade)
);

CREATE TABLE cat_hospedagem (
  id_catHospedagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descritivo VARCHAR(50) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(id_catHospedagem)
);

CREATE TABLE cat_alimentacao (
  id_catAlimentacao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descritivo VARCHAR(100) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(id_catAlimentacao)
);

CREATE TABLE usuario (
  idusuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  id_cidade INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  senha VARCHAR(100) NULL,
  telefone VARCHAR(15) NULL,
  foto_perfil VARCHAR(100) NULL,
  tipo VARCHAR(15) NULL,
  logradouro VARCHAR(100) NULL,
  numero VARCHAR(5) NULL,
  bairro VARCHAR(80) NULL,
  cep VARCHAR(10) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(idusuario),
  INDEX usuario_FKIndex1(id_cidade),
  FOREIGN KEY(id_cidade)
    REFERENCES cidade(id_cidade)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE pontoTuristico (
  id_pontoTuristico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  id_cidade INTEGER UNSIGNED NOT NULL,
  id_catPontoTuristico INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(100) NULL,
  descricao TEXT NULL,
  ingresso FLOAT NULL,
  horarioFuncionamento TIME NULL,
  logradouro VARCHAR(100) NULL,
  numero VARCHAR(5) NULL,
  bairro VARCHAR(80) NULL,
  cep VARCHAR(10) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(id_pontoTuristico),
  INDEX pontoTuristico_FKIndex1(id_catPontoTuristico),
  INDEX pontoTuristico_FKIndex2(id_cidade),
  FOREIGN KEY(id_catPontoTuristico)
    REFERENCES cat_pontoTuristico(id_catPontoTuristico)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(id_cidade)
    REFERENCES cidade(id_cidade)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE alimentacao (
  id_alimentacao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  id_cidade INTEGER UNSIGNED NOT NULL,
  id_catAlimentacao INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(100) NULL,
  telefone VARCHAR(15) NULL,
  email VARCHAR(100) NULL,
  link VARCHAR(200) NULL,
  descricao TEXT NULL,
  imagem VARCHAR(80) NULL,
  logradouro VARCHAR(100) NULL,
  numero VARCHAR(5) NULL,
  bairro VARCHAR(80) NULL,
  cep VARCHAR(10) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(id_alimentacao),
  INDEX alimentacao_FKIndex1(id_catAlimentacao),
  INDEX alimentacao_FKIndex2(id_cidade),
  FOREIGN KEY(id_catAlimentacao)
    REFERENCES cat_alimentacao(id_catAlimentacao)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(id_cidade)
    REFERENCES cidade(id_cidade)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE hospedagem (
  id_hospedagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  id_cidade INTEGER UNSIGNED NOT NULL,
  id_catHospedagem INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(100) NULL,
  descricao TEXT NULL,
  link VARCHAR(200) NULL,
  endereco VARCHAR(100) NULL,
  classificacao CHAR(1) NULL,
  logradouro VARCHAR(100) NULL,
  numero VARCHAR(5) NULL,
  bairro VARCHAR(80) NULL,
  cep VARCHAR(10) NULL,
  situacao BOOL NULL,
  PRIMARY KEY(id_hospedagem),
  INDEX hospedagem_FKIndex1(id_catHospedagem),
  INDEX hospedagem_FKIndex2(id_cidade),
  FOREIGN KEY(id_catHospedagem)
    REFERENCES cat_hospedagem(id_catHospedagem)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(id_cidade)
    REFERENCES cidade(id_cidade)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


