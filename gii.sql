CREATE TABLE agenda(
    ID int,
    Nome varchar(30),
    Sobrenome varchar(60),
    Telefone varchar(18)
);
ALTER TABLE  agenda
ADD PRIMARY KEY(ID);

ALTER TABLE agenda
MODIFY ID int (11)
NOT NULL AUTO_INCREMENT;
AUTO_INCREMENT=1;
COMMIT;

INSERT INTO agenda
(Nome,Sobrenome,Telefone)
VALUES
("kauan","silva","(11)975854317");