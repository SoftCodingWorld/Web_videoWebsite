CREATE TABLE USERS (
	ID INT NOT NULL AUTO_INCREMENT,
	Login VARCHAR( 20 ) NOT NULL,
	Password VARCHAR ( 20 ) NOT NULL,
	Email VARCHAR ( 45 ) NOT NULL,
	CONSTRAINT PK_USERS PRIMARY KEY (ID)
);