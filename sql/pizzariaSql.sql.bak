create database pizzariaDB;
use pizzariaDB;

CREATE TABLE usuarios (
id_usuario int primary key auto_increment,
fullname varchar(50) not null,
email varchar(50) not null,
created date not null,
cpf varchar(11) not null unique,
userpassword varchar(20) not null,
acesslvl int(1) not null default 0
);

CREATE TABLE saboresPizza (
id_sabor int primary key auto_increment,
sabor varchar(50) not null,
preco float not null
);

CREATE TABLE estoquePizza(
id_sabor int not null,
quantidade_estoque int not null,
preco_compra_un float not null,
n_notaFiscal int not null,
dataCompra date not null,
dataCadastro date not null,
lote varchar(30) not null,
foreign key (id_sabor) references saboresPizza(id_sabor),
primary key(n_notaFiscal, lote)
);

CREATE TABLE historicoCompra(
	id_historico int primary key auto_increment,
	id_usuario int not null,
    id_sabor int not null,
    quantidade int not null,
    foreign key (id_usuario) references usuarios(id_usuario),
    foreign key (id_sabor) references saboresPizza(id_sabor)
);

#controle de estoque
delimiter $$
create procedure retira_pizza (IN idU int, IN idS int, IN quantidade int)
	begin
		UPDATE estoquePizza 
		SET quantidade_estoque = quantidade_estoque - quantidade
        WHERE id_sabor = idS;
		INSERT INTO historicoCompra VALUES (default,idU, idS, quantidade);
        SELECT * FROM estoquePizza;
    end
$$

delimiter $$
create procedure adiciona_pizza (IN idS int, 
IN quantidade int, IN notaFiscal int, 
IN valorUnitario float, IN dataCompra date)
    begin
		DECLARE dataAtual date;
		DECLARE lote nvarchar(30);
        
        SELECT current_date() into dataAtual;
		
        SELECT concat( year(dataAtual), month(dataAtual), day(dataAtual))INTO lote;
        
        INSERT INTO estoquePizza VALUES (idS, quantidade,
        valorUnitario,notaFiscal, dataCompra, dataAtual, lote);

        SELECT * FROM estoquePizza;
   
   end
$$

delimiter $$
create procedure sorteio(IN quantidade int)
	begin
		declare id_sorteado int;
		SELECT id, nome FROM usuarios ORDER BY RAND() LIMIT quantidade;
    end
$$

