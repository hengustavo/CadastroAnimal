
Drop database if exists Carocinha;

Create  database if not exists Carocinha;

use Carocinha;

CREATE TABLE Cidade
(
    id      INT AUTO_INCREMENT,
    nome    VARCHAR(100),
    estado  VARCHAR(2),
    PRIMARY KEY(id)
);

-- Cria tabela Pessoa
CREATE TABLE Pessoa
(
    id  INT AUTO_INCREMENT,
    nome    VARCHAR(100),
    email   VARCHAR(100),
    endereço VARCHAR(100),
    bairo VARCHAR(100),
    id_cidade   INT,
    cep CHAR(10),
    PRIMARY KEY(id),
    CONSTRAINT Fk_pessoacidade FOREIGN KEY (id_cidade) REFERENCES Cidade(id)
);


CREATE TABLE Animal
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(50),
    especie VARCHAR(100),
    raça VARCHAR(100),
    data_nascimento DATE,
    idade INT,
    castrado TINYINT,
    id_pessoa INT,
    PRIMARY KEY(id),
    CONSTRAINT Fk_PessoaAnimal FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id)   
);