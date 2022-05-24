CREATE TABLE User (
                         id INT PRIMARY KEY,
                         login VARCHAR(50),
                         password VARCHAR(50),
                         name VARCHAR (50),
                         surname VARCHAR (50),
                         patronymic VARCHAR (50),
                         role VARCHAR (50)
);

CREATE TABLE Poll (
                         id INT PRIMARY KEY,
                         name VARCHAR (50),
                         description VARCHAR (50),
                         type INT,
                         startTime INT,
                         endTime INT

);

CREATE TABLE Question (
                      id INT PRIMARY KEY,
                      name VARCHAR(160),
                      optional VARCHAR(50),
                      idPoll INT
);
CREATE TABLE Answer (
                          id INT PRIMARY KEY,
                          answer VARCHAR(100),
                          idPoll INT
);
CREATE TABLE UserPoll (
                          idUser INT,
                          idPoll INT
);

CREATE TABLE Result (
                          idUser INT,
                          idAnswer INT,
                          openAnswer VARCHAR(100)
);


INSERT INTO User
(login, password, name, surname,patronymic,role)
VALUES
    ('abobus', 'qwerty', 'London', 'Isthe', 'Capital', '1');


INSERT INTO Answer
(id, answer,idPoll)
VALUES
    (1,'kto sprashival',1);

INSERT INTO Question
(id, name,optional,idPoll)
VALUES
    (1,'Chto slychilos s podvodnoi lodkoi','ytonyla?',1);

INSERT INTO Result
(idUser, idAnswer)
VALUES
    (1,1);