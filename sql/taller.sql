DROP DATABASE IF EXISTS taller;
CREATE DATABASE taller;
USE taller;

SET @puntos = 5000;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY ,
    contrasenia VARCHAR(25) NOT NULL,
    nombre VARCHAR(25),
    ap1 VARCHAR(25),
    ap2 VARCHAR(25),
    telefono VARCHAR(15),
    email VARCHAR(50),
    fecha_alta DATE
);

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    descripcion VARCHAR(250),
    precio INT,
    stock INT
);

CREATE TABLE ventas (
    id_venta INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    total INT NOT NULL,
    fecha_venta DATE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

CREATE TABLE detalleVenta (
    id_venta INT AUTO_INCREMENT,
    id_producto INT,
    cantidad INT,
    PRIMARY KEY (id_venta, id_producto),
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

INSERT INTO usuarios (id_usuario, contrasenia, nombre, ap1, ap2, telefono, email, fecha_alta)
VALUES
(1, '1234','Juan', 'Cuello', 'Gutierrez', '654565456', 'juan@gmail.com', NOW()),
(2, '5678','Isaac', 'Asensio', '', '612612612', 'isaac@gmail.com', NOW()),
(3, '0000','Sergio', 'Pablos', '', '654565456', 'ergio@gmail.com', NOW());

INSERT INTO productos (nombre, descripcion, precio, stock)
VALUES
('Pegatinas', 'Set de pegatinas de la empresa.', 2, 4000),
('Llavero', 'Llavero con el logo de Radikal Motorworks.', 3, 6000),
('Tow', 'Correa de sujeción utilizable en caso de necesitar remolcamiento.', 10, 1000),
('Poster', 'Póster del logo de la empresa.', 5, 2500),
('Vinilo liquido', 'Bote de 250ml de vinilo líquido negro para pintar partes del coche.', 12, 1500),
('Libreta', 'Libreta con el logo de la empresa, y 200 hojas en blanco.', 3, 500),
('Asesoramiento', 'Asesoramiento para poder convertir tu coche en una máquina de competición.', 40, 100),
('Aceite', 'Cambio de aceite y filtros.', 55, 100),
('Aire', 'Cambio de filtro del aire.', 35, 100),
('Aire ac', 'Carga del aire acondicionado.', 69, 100),
('Repro', 'Reprogramación de centralita y caja de cambios (si procede).', 300, 100),
('Downpipe', 'Mejora del sistema de expulsión de gases del motor.', 250, 4000);

INSERT INTO ventas(id_usuario,total,fecha_venta) VALUES (1,23,NOW());
INSERT INTO ventas(id_usuario,total,fecha_venta) VALUES (2,150,NOW());
INSERT INTO ventas(id_usuario,total,fecha_venta) VALUES (3,2,NOW());

INSERT INTO detalleVenta(id_venta,id_producto,cantidad) VALUES(1,1,10);
INSERT INTO detalleVenta(id_venta,id_producto,cantidad) VALUES(1,2,1);
INSERT INTO detalleVenta(id_venta,id_producto,cantidad) VALUES(2,3,5);
INSERT INTO detalleVenta(id_venta,id_producto,cantidad) VALUES(3,1,1);