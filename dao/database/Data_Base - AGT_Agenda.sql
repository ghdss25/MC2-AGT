CREATE DATABASE agt_agenda; 
USE agt_agenda;

CREATE TABLE usuario(

    id INT AUTO_INCREMENT PRIMARY KEY, 
    usu_login VARCHAR(120), 
    usu_senha VARCHAR(32), 
    
);

CREATE TABLE atividade(

    id INT AUTO_INCREMENT PRIMARY KEY, 
    ativi_status VARCHAR(50),
    ativi_nome VARCHAR (100),
    ativi_descricao VARCHAR (400), 
    ativi_inicio VARCHAR (500), 
    ativi_termino VARCHAR (500),
    id_usuario INT
);

ALTER TABLE atividade ADD CONSTRAINT id_usuario FOREIGN KEY (id_usuario) REFERENCES usuario (id) ON UPDATE CASCADE ON DELETE CASCADE; 

INSERT INTO atividade(ativi_status, ativi_nome, ativi_descricao, ativi_inicio, ativi_termino, id_usuario) VALUES('Pendente', 'Programação', 'Sistema Agat', '02/05/2022', '03/05/2022', 1);