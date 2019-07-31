
#Criação do banco de dados
CREATE DATABASE infotec33;
USE infotec33;

#Criação das tabelas
CREATE TABLE admin (
    cod_adm INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(45) NOT NULL,
    senha VARCHAR(45) NOT NULL,
    nome VARCHAR(245) NOT NULL,
    nasc DATE NOT NULL,
    email VARCHAR(245) NOT NULL
);

CREATE TABLE cadastro_usuario (
    cod_cadastro INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(245) NOT NULL,
    nasc DATE NOT NULL,
    email VARCHAR(254) NOT NULL
);

CREATE TABLE cadastro_enquete_grupos (
    cod_enquete INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    voto_enquete VARCHAR(245) NOT NULL,
    momento DATETIME NOT NULL,
    protocolo VARCHAR(45),
    cadastra_usuario_cod_cadastro INT(4) NOT NULL,
    FOREIGN KEY (cadastra_usuario_cod_cadastro)
        REFERENCES cadastra_usuario (cod_cadastro)
);

CREATE TABLE cadastro_voto_curso (
    cod_votacao INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    voto VARCHAR(245) NOT NULL,
    motivo VARCHAR(245) NOT NULL,
    momento DATETIME NOT NULL,
    protocolo INT(6) NOT NULL,
    cadastra_usuario_cod_cadastro INT(4) NOT NULL,
    FOREIGN KEY (cadastra_usuario_cod_cadastro)
        REFERENCES cadastra_usuario (cod_cadastro)
);

CREATE TABLE lista_votos_curso (
    cadastro_voto_curso_cod_votacao INT(5) NOT NULL,
    cadastro_voto_curso_voto VARCHAR(254) NOT NULL,
    quant_votos INT(5) NOT NULL,
    FOREIGN KEY (cadastro_voto_curso_cod_votacao)
        REFERENCES cadastro_voto_curso (cod_votacao),
	FOREIGN KEY (cadastro_voto_curso_voto)
        REFERENCES cadastro_voto_curso (voto)
);

CREATE TABLE lista_votos_enquete (
    cadastro_enquete_grupos_cod_enquete INT(5) NOT NULL,
    cadastro_enquete_grupos_voto_enquete VARCHAR(254) NOT NULL,
    quant_votos_enquete INT(5) NOT NULL,
    feira VARCHAR(10) NOT NULL,
    FOREIGN KEY (cadastro_enquete_grupos_voto_enquete)
        REFERENCES cadastro_enquete_grupos (voto_enquete)
);



CREATE TABLE cadastro_grupo_infotec (
    cod_inscricao INT(3) NOT NULL PRIMARY KEY,
    tema_grupo VARCHAR(254) NOT NULL,
    descricao VARCHAR(254),
    turma VARCHAR(45) NOT NULL,
    feira VARCHAR(10) NOT NULL
);


CREATE TABLE cadastro_grupo_fesec (
    cod_inscricao INT(3) NOT NULL PRIMARY KEY,
    tema_grupo VARCHAR(254) NOT NULL,
    descricao VARCHAR(254),
    turma VARCHAR(45) NOT NULL,
    feira VARCHAR(10) NOT NULL
);

CREATE TABLE cadastro_grupo_silog (
    cod_inscricao INT(3) NOT NULL PRIMARY KEY,
    tema_grupo VARCHAR(254) NOT NULL,
    descricao VARCHAR(254),
    turma VARCHAR(45) NOT NULL,
    feira VARCHAR(10) NOT NULL
);

CREATE TABLE cont_votos_grupos (
    codigo INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    grupo VARCHAR(254) NOT NULL,
    feira VARCHAR(45) NOT NULL
);

CREATE TABLE info_grupo_infotec (
    cadastro_grupo_infotec_cod_inscricao INT(3) NOT NULL PRIMARY KEY,
    cadastro_grupo_infotec_tema_grupo VARCHAR(254) NOT NULL, 
    turma VARCHAR(45) NOT NULL,
    lider VARCHAR(245) NOT NULL,
    integrante_2 VARCHAR(245) NOT NULL,
    integrante_3 VARCHAR(245) NOT NULL,
    integrante_4 VARCHAR(245) NOT NULL,
    integrante_5 VARCHAR(245),
    integrante_6 VARCHAR(245),
    integrante_7 VARCHAR(245),
    integrante_8 VARCHAR(245),
    integrante_9 VARCHAR(245),
    integrante_10 VARCHAR(245),
    feira VARCHAR(10) NOT NULL,
    FOREIGN KEY (cadastro_grupo_infotec_cod_inscricao)
        REFERENCES cadastro_grupo_infotec (cod_inscricao),
    FOREIGN KEY (cadastro_grupo_infotec_tema_grupo)
        REFERENCES cadastro_grupo_infotec (tema_grupo)
);

CREATE TABLE info_grupo_fesec (
    cadastro_grupo_fesec_cod_inscricao INT(3) NOT NULL PRIMARY KEY,
    cadastro_grupo_fesec_tema_grupo VARCHAR(254) NOT NULL,
    turma VARCHAR(45) NOT NULL,
    lider VARCHAR(245) NOT NULL,
    integrante_2 VARCHAR(245) NOT NULL,
    integrante_3 VARCHAR(245) NOT NULL,
    integrante_4 VARCHAR(245) NOT NULL,
    integrante_5 VARCHAR(245),
    integrante_6 VARCHAR(245),
    integrante_7 VARCHAR(245),
    integrante_8 VARCHAR(245),
    integrante_9 VARCHAR(245),
    integrante_10 VARCHAR(245),
    feira VARCHAR(10) NOT NULL,
    FOREIGN KEY (cadastro_grupo_fesec_cod_inscricao)
        REFERENCES cadastro_grupo_fesec (cod_inscricao),
    FOREIGN KEY (cadastro_grupo_fesec_tema_grupo)
        REFERENCES cadastro_grupo_fesec (tema_grupo)
);

CREATE TABLE info_grupo_silog (
    cadastro_grupo_silog_cod_inscricao INT(3) NOT NULL PRIMARY KEY,
    cadastro_grupo_silog_tema_grupo VARCHAR(254) NOT NULL,
    turma VARCHAR(45) NOT NULL,
    lider VARCHAR(245) NOT NULL,
    integrante_2 VARCHAR(245) NOT NULL,
    integrante_3 VARCHAR(245) NOT NULL,
    integrante_4 VARCHAR(245) NOT NULL,
    integrante_5 VARCHAR(245),
    integrante_6 VARCHAR(245),
    integrante_7 VARCHAR(245),
    integrante_8 VARCHAR(245),
    integrante_9 VARCHAR(245),
    integrante_10 VARCHAR(245),
    feira VARCHAR(10) NOT NULL,
    FOREIGN KEY (cadastro_grupo_silog_cod_inscricao)
        REFERENCES cadastro_grupo_silog (cod_inscricao),
    FOREIGN KEY (cadastro_grupo_silog_tema_grupo)
        REFERENCES cadastro_grupo_silog (tema_grupo)
);

desc cadastro_grupo;


SELECT * FROM lista_votos_curso;
SELECT * FROM lista_votos_enquete;
SELECT * FROM cadastro_usuario;


SELECT * FROM cont_votos_grupos;

ALTER TABLE cont_votos_grupos ADD quant_votos INT(5) NOT NULL;

select * from cont_votos_grupos;

TRUNCATE info_grupo_infotec;

SELECT * FROM cadastro_grupo_infotec;
SELECT * FROM cadastro_grupo_fesec;
SELECT * FROM cadastro_grupo_silog;

TRUNCATE cadastro_grupo_infotec;
TRUNCATE cadastro_grupo_fesec;
TRUNCATE cadastro_grupo_silog;
TRUNCATE cont_votos_grupos;

SELECT COUNT(cadastro_grupo_infotec.cod_inscricao&&cadastro_grupo_fesec.cod_inscricao&&cadastro_grupo_silog.cod_inscricao) FROM cadastro_grupo_infotec, cadastro_grupo_fesec, cadastro_grupo_silog;

TRUNCATE cadastro_enquete_grupos;
TRUNCATE cont_votos_grupos;
TRUNCATE info_grupo_infotec;
truncate lista_votos_enquete;

SELECT COUNT(cadastro_voto_curso_cod_votacao) FROM lista_votos_curso;

DROP TABLE admin;

CREATE TABLE usuarios (cod_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT, usuario VARCHAR(254) NOT NULL, senha VARCHAR (32) NOT NULL, tipo VARCHAR(254));

SELECT * FROM cursos;

CREATE TABLE cursos (cod_curso INT(3) primary key not null auto_increment, curso VARCHAR(254), duracao INT(5), tipo VARCHAR(254));

CREATE TABLE grupos (cod_grupo INT(3) not null, grupo VARCHAR(254) not null, usuario VARCHAR(254) NOT NULL PRIMARY KEY, senha VARCHAR(32) NOT NULL, lider VARCHAR(254) NOT NULL);
SELECT * FROM grupos;


SELECT * FROM cursos;
delete from cursos where cod_curso=1;

select * from usuarios;
INSERT INTO usuarios (usuario, senha, tipo) values ('admin', md5('admin'), 'Administrador');