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
quantidade_estoque int not null ,
preco_compra_un float not null,
n_notaFiscal int not null,
dataCompra date not null,
dataCadastro date not null,
lote varchar(30) not null,
foreign key (id_sabor) references saboresPizza(id_sabor),
primary key(n_notaFiscal, lote)
);

delimiter $$
CREATE TRIGGER estoque_check BEFORE INSERT ON estoquePizza 
     FOR EACH ROW 
     BEGIN 
     IF NEW.quantidade_estoque<0 THEN 
        SET NEW.quantidade_estoque = null;
     END IF; 
     END
$$
delimiter $$
CREATE TRIGGER estoque_update_check BEFORE UPDATE ON estoquePizza 
     FOR EACH ROW 
     BEGIN 
     IF NEW.quantidade_estoque<0 THEN 
        SET NEW.quantidade_estoque = null;
     END IF; 
     END
$$

CREATE TABLE historicoCompra(
	id_historico int primary key auto_increment,
	fk_id_usuario int not null,
    fk_id_sabor int not null,
    quantidade int not null,
    fk_lote_p varchar(30) not null,
    
	foreign key (fk_id_sabor) references saboresPizza(id_sabor),
    foreign key (fk_id_usuario) references usuarios(id_usuario),
    foreign key (fk_id_sabor) references saboresPizza(lote)
);

#controle de estoque
delimiter $$
create procedure retira_pizza (IN idU int, IN idS int, IN quantidade int, IN loteent varchar(30))
	begin
		UPDATE estoquePizza 
		SET quantidade_estoque = quantidade_estoque - quantidade
        WHERE id_sabor = idS AND  lote = loteent;
		INSERT INTO historicoCompra VALUES (default,idU, idS, quantidade, loteent);
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
		SELECT id_usuario, fullname FROM usuarios ORDER BY RAND() LIMIT quantidade;
    end
$$
