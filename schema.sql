
CREATE TABLE product (

id int(11) NOT NULL,

producto varchar(40) NOT NULL,

descripcion varchar(40)NOT NULL,

existencia varchar(40) NOT NULL,

precio_compra double NOT NULL,

precio_venta double NOT NULL,

visible int(11) NOT NULL

);


CREATE TABLE productos (

id int(11) NOT NULL,

producto varchar(30) NOT NULL,

descripcion varchar(40) NOT NULL,

existencia int(11) NOT NULL,

precio_compra double NOT NULL,

precio_venta double NOT NULL,

visible varchar(2) NOT NULL
);


INSERT INTO productos VALUES
 ("1", "Lata", "Chiles", "30", "15", "17", "1");
INSERT INTO productos VALUES
 ("2", "Pepsi", "800 ml", "20", "10", "12", "1");
INSERT INTO productos VALUES
 ("3", "Sabritas", "Limon", "15", "9", "12", "1");
