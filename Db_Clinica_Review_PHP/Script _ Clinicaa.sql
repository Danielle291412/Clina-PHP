create database db_clinicaa;

use db_clinicaa;

create table tb_paciente(
	id_paciente int auto_increment primary key,
    nm_paciente varchar(45),
    idade int,
    dt_nascimento date
    );
    

drop database db_clinica;