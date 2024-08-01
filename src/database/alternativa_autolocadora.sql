CREATE DATABASE IF NOT EXISTS alternativa_autolocadora;

USE alternativa_autolocadora;

CREATE TABLE IF NOT EXISTS reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    local_retirada VARCHAR(255),
    modelo_carro VARCHAR(255),
    checkin_data DATE,
    checkin_hora TIME,
    checkout_data DATE,
    checkout_hora TIME
);

CREATE TABLE IF NOT EXISTS fale_conosco (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    telefone VARCHAR(25),
    mensagem TEXT
);