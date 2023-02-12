/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  30/01/2023 13:35:11                      */
/*==============================================================*/

CREATE TABLE CLIENTS (
    CODECLI INT NOT NULL,
    PRENOMCLI VARCHAR(30), 
    NOMCLI VARCHAR(30), 
    RUECLI VARCHAR(30), 
    CPCLI INT, 
    VILLECLI VARCHAR(30),
    PRIMARY KEY (CODECLI)
);

CREATE TABLE FILMS(
    CODEFILM INT NOT NULL,
    NOMFILM VARCHAR(50),
    PRIMARY KEY (CODEFILM)
);

CREATE TABLE LOCATIONS(
    CODECLI INT NOT NULL, 
    CODEFILM INT NOT NULL, 
    DATEDEBUT VARCHAR(30), 
    DUREE INT,
    PRIMARY KEY (CODECLI,CODEFILM),
    FOREIGN KEY (CODECLI) REFERENCES CLIENTS(CODECLI),
    FOREIGN KEY (CODEFILM) REFERENCES FILMS(CODEFILM)
);

