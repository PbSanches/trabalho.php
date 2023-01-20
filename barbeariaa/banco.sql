CREATE TABLE cliente (
    ID INTEGER auto_increment,
    nome varchar (100) not null,
    email varchar (100) not null,
    senha varchar (100) not null,

    PRIMARY KEY (ID)
);
create table profissional (
    ID INTEGER auto_increment,
    nome varchar (100) not null,

    PRIMARY key (ID)
);

create table servico (
    ID INTEGER auto_increment,
    titulo varchar(20),
    descricao varchar(20),
    preço float,

    PRIMARY key (ID)
)

create table atendimento (
    ID INTEGER auto_increment,
    fk_profi INTEGER not null,
    fk_serv INTEGER not null,
    horario date not null,
    preço float not null,

    PRIMARY key (id),
    foreign key (fk_profi) references profissional (ID),
    foreign key (fk_serv) references servico (ID)
);