CREATE DATABASE IF NOT EXISTS db_jogo_quiz;
USE db_jogo_quiz;

CREATE TABLE IF NOT EXISTS administradores (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(16) NOT NULL UNIQUE,
    senha VARCHAR(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS questoes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    enunciado TEXT NOT NULL,
    alternativa_correta CHAR(1) NOT NULL,
    alternativa_a TEXT NOT NULL,
    alternativa_b TEXT NOT NULL,
    alternativa_c TEXT NOT NULL,
    alternativa_d TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS partidas (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pontuacao INT NOT NULL DEFAULT(0),
    finalizada BOOL NOT NULL DEFAULT(false)
);

CREATE TABLE IF NOT EXISTS partidas_questoes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_partida INT NOT NULL,
    id_questao INT NOT NULL,
    resposta_escolhida CHAR(1)
);