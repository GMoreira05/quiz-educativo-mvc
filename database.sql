CREATE DATABASE IF NOT EXISTS db_jogo_quiz;
USE db_jogo_quiz;

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
    id_usuario INT NOT NULL,
    pontuacao INT NOT NULL DEFAULT(0),
    finalizada BOOL NOT NULL DEFAULT(false),
    data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS partidas_questoes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_partida INT NOT NULL,
    id_questao INT NOT NULL,
    resposta_escolhida CHAR(1)
);

CREATE TABLE IF NOT EXISTS usuarios (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(64) NOT NULL,
    email VARCHAR(128) NOT NULL UNIQUE,
    senha VARCHAR(32) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT(0)
);