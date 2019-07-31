use infotec;

set names utf8;
set charset utf8;


CREATE TABLE cont_voto (
    cod_curso INT(3) PRIMARY KEY NOT NULL,
	voto VARCHAR(254),
    quant_votos INT(5)
);

insert into cont_voto (cod_curso, voto, quant_votos) values 
('1','Eletromecânica','0'), 
('2','Eletrônica','0'), 
('3','Eletrotécnica','0'), 
('4','Informática','0'),
('5','Informática para Internet','0'),
('6','Logística','0'),
('7','Segurança do trabalho','0');

CREATE TABLE lista_voto (
    cod_votacao INT(4) PRIMARY KEY AUTO_INCREMENT,
    voto VARCHAR(254),
    motivo VARCHAR(254),
    momento DATETIME,
    protocolo int(10)
);

CREATE TABLE grupos (
    cod_inscricao INT(3) PRIMARY KEY,
    tema_grupo VARCHAR(254) NOT NULL,
    descricao VARCHAR(254) NOT NULL,
    turma VARCHAR(254) NOT NULL
);



CREATE TABLE info_grupos (
    grupos_cod_inscricao INT(3) NOT NULL,
    grupo_tema_grupo VARCHAR(254) NOT NULL,
    grupos_turma VARCHAR(254) NOT NULL,
    lider VARCHAR(254) NOT NULL,
    integrante_2 VARCHAR(254) NOT NULL,
    integrante_3 VARCHAR(254) NOT NULL,
    integrante_4 VARCHAR(254) NOT NULL,
    integrante_5 VARCHAR(254),
    integrante_6 VARCHAR(254),
    integrante_7 VARCHAR(254),
    integrante_8 VARCHAR(254),
    integrante_9 VARCHAR(254),
    integrante_10 VARCHAR(254),
    PRIMARY KEY (grupos_cod_inscricao),
    FOREIGN KEY (grupos_cod_inscricao) REFERENCES grupos(cod_inscricao),
    FOREIGN KEY (grupos_turma) REFERENCES grupos(turma),
    FOREIGN KEY (grupo_tema_grupo) REFERENCES grupos(tema_grupo)
);


INSERT INTO info_grupos (grupos_cod_inscricao, grupo_tema_grupo, grupos_turma, lider, integrante_2, integrante_3, integrante_4, integrante_5, integrante_6) VALUES ('33','Site Portfólio','3IW1T2','Robert Alexandre','Eliden Milena','Michele Renata','Alan Ferreira','','');

desc cont_voto;
desc lista_voto;
desc grupos;
desc info_grupos;

UPDATE cont_voto
SET cont_votos=quant_votos+1
WHERE cod_curso='1';

select * from cont_voto;
select * from lista_voto;
select * from grupos;
select * from info_grupos;

truncate grupos;
truncate cont_voto;
truncate lista_voto;
truncate info_grupos;

UPDATE info_grupos SET grupo_tema_grupo="Allan Silva Ferreira" where grupos_cod_inscricao='1';