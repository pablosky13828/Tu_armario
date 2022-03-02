CREATE DATABASE IF NOT EXISTS tuArmario;

USE tuArmario;

/*Categorias*/
DROP TABLE if EXISTS category;
CREATE TABLE IF NOT EXISTS category(
	idCategory INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nameCategory VARCHAR(25)NOT NULL
)ENGINE=INNODB;

	INSERT INTO category(idCategory, nameCategory) VALUES(1,'Camisetas');
    INSERT INTO category(idCategory, nameCategory) VALUES(2,'Sudaderas');
    INSERT INTO category(idCategory, nameCategory) VALUES(3,'Chaquetas');
    INSERT INTO category(idCategory, nameCategory) VALUES(4,'Pantalones');
    INSERT INTO category(idCategory, nameCategory) VALUES(5,'Chandals');


/*Productos*/
DROP TABLE if EXISTS products;
CREATE TABLE if NOT EXISTS products(
	idProduct 	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    carpeta VARCHAR (100) NOT NULL,
	nameProduct VARCHAR(100) NOT NULL,
	categoryID INT NOT NULL,
	talla VARCHAR (1) NOT NULL,
	largo INT NOT NULL,
	ancho INT NOT NULL,
	mangas INT,
	precio FLOAT (4,2) NOT NULL,
    novedades VARCHAR (1) NOT NULL,
	activo VARCHAR (1) NOT NULL
)ENGINE=INNODB;
    
    /*Camisetas*/
   	INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('camiseta_adidas_basket', 	'Adidas Basketball Tee', 		'1', 'S', 1, 1, 1, 	12.10,	0, 1);
	INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('camiseta_hawai',			'Hawai Tee', 					'1', 'M', 1, 1, 1, 	12.10, 	0, 1);
	INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('camiseta_levis_gris', 		'LeviS Gray Tee', 				'1', 'L', 1, 1, 1, 	12.10,  0, 1);
    
    /*Sudaderas*/
	INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('sudadera_fila_navi_blue', 	'Fila Navi Sweatshirt', 		'2', 'S', 1, 1, 1, 	12.10,	0, 1);
	INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('sudadera_nike_blackYellow','Nike Gold Sweatshirt', 		'2', 'M', 1, 1, 1,	35.50, 	1, 1);
	INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('sudadera_reymo_bicolor', 	'Reymo Bicolor Sweatshirt', 	'2', 'L', 1, 1, 1, 	22.40,	0, 1);

	/*Chaquetas*/
	INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('abrigo_columbia_orange', 		'Columbia Orange Jacket', 		'3', 'S', 1, 1, 1, 	29.99, 	0, 1);
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('abrigo_frog_buttoned', 		'Frog Buttoned Jacket', 		'3', 'M', 1, 1, 1, 	13.99, 	0, 1);
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('abrigo_kappa_red_puffer', 	'Kappa Red Puffer Jacket', 		'3', 'L', 1, 1, 1, 	19.80, 	1, 1);
    
    /*Pantalones*/
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('pantalones_jogger_denim', 	'Jogger Denim Jeans', 			'4', 'S', 1, 1, 1, 	39.99, 	0, 1);
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('pantalones_rayJeans_brandit', 'Ray Brandit Jeans', 			'4', 'M', 1, 1, 1, 	27.50, 	1, 1);
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('pantalones_skate_demon', 		'Demon Skate Jeans', 			'4', 'L', 1, 1, 1, 	45.33,	0, 1);    
    
    /*Chandals*/
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('chandal_boomerang_mag', 		'Boomerang Tracksuit', 			'5', 'S', 1, 1, 1, 	27.99, 	1, 1);
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('chandal_kappa_track', 		'Kappa Track Tracksuit', 		'5', 'M', 1, 1, 1, 	19.99, 	0, 1);
    INSERT INTO products(carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, novedades, activo) VALUES('chandal_nike_performance',  	'Nike Performance Tracksuit', 	'5', 'L', 1, 1, 1, 	19.99, 	0, 1);    


/*Usuarios*/
DROP TABLE if EXISTS usuarios;
CREATE TABLE if NOT EXISTS usuarios(
	idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(100) NOT NULL,
	contrasena VARCHAR (50) NOT NULL,
	direccion VARCHAR(200) NOT NULL,
	nivelUsuario VARCHAR(6) NOT NULL
)ENGINE=INNODB;

/*Usuarios Importantes*/
	/*Admin */	INSERT INTO usuarios(email, contrasena, direccion, nivelUsuario) VALUES('admin@gmail.com', 'a1234567.', 'colegio camino real', 'admin');
	/*Client*/	INSERT INTO usuarios(email, contrasena, direccion, nivelUsuario) VALUES('cliente@gmail.com', 'a1234567.', 'colegio camino real', 'client');

