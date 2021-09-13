CREATE TABLE candidatos (
    id int not null primary key AUTO INCREMENT,
	'user_id' int null,
    created datetime not null default current_timestamp,
    nome varchar(100) not null,
    idade int not null,
    github varchar(100) not null,
    cep char(10) null,
    logradouro varchar(100) not null,
    numero varchar(30),
    complemento varchar(50),
    bairro varchar(50) not null,
    cidade varchar(30) not null,
    estado char(2) not null,
    'status' boolean not null default 1
);
