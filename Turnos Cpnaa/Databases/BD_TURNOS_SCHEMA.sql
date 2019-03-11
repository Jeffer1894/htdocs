CREATE DATABASE IF NOT EXISTS BD_TURNOS_SCHEMA;

USE BD_TURNOS_SCHEMA;

CREATE TABLE User( 

	Id_User INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT, /*UNSIGNED type can be used to permit only nonnegative numbers in a column*/
	Full_Name_User VARCHAR (100) NOT NULL, /* Full Name User*/
	Name_User VARCHAR (30) NOT NULL, /* Name of User e.g:Admin1234*/
	Pass_User VARCHAR (32),
	Role_User ENUM ('Admin','User') NOT NULL,
	Area_User VARCHAR (50) NOT NULL,
	Email_User VARCHAR (30) UNIQUE NOT NULL/* UNIQUE type can be used to the email don´t repeat in this table */
	
);

CREATE TABLE Request (

	FOREIGN KEY (Id_User) REFERENCES User(Id_User) ON DELETE RESTRICT ON UPDATE CASCADE,
	Id_Request INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Description_Request VARCHAR (150) NOT NULL,
	Time_Request VARCHAR(10),
	State_Request ENUM ('Agendado','En Proceso','Finalizado') NOT NULL,
	Id_User INTEGER UNSIGNED NOT NULL

);	

