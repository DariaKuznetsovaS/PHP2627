DROP DATABASE IF EXISTS gestion_bodegas;
CREATE DATABASE IF NOT EXISTS gestion_bodegas CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE gestion_bodegas;

CREATE TABLE bodega (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(150) NOT NULL,
    email VARCHAR(100),
    telefono VARCHAR(20),
    contacto VARCHAR(100),
    fundacion INT,
    descripcion VARCHAR(500),
    restaurante TINYINT(1) NOT NULL DEFAULT 0,
    hotel TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    PRIMARY KEY (id)
);

CREATE TABLE vino (
    id INT NOT NULL AUTO_INCREMENT,
    bodega_id INT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(500),
    anio INT,
    alcohol DECIMAL(4,1),
    tipo VARCHAR(20) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    PRIMARY KEY (id),
    -- Al borrar una bodega se borran también sus vinos
    FOREIGN KEY (bodega_id) REFERENCES bodega(id) ON DELETE CASCADE
);

INSERT INTO bodega (nombre, direccion, email, telefono, contacto, fundacion, descripcion, restaurante, hotel)
    VALUES ('Eguren Ugarte', 'Páganos (Álava)', 'eguren@ugarte.com', '945600763', 'Mikel Eguren', 1870, 'Bodega familiar con viñedos propios en Páganos.', 1, 1);

INSERT INTO bodega (nombre, direccion, email, telefono, contacto, fundacion, descripcion, restaurante, hotel)
    VALUES ('Marqués de Riscal', 'Elciego', 'marques@riscal.com', '945222333', 'Ana Pérez', 1858, 'Una de las bodegas más antiguas de Rioja.', 1, 1);

INSERT INTO bodega (nombre, direccion, email, telefono, contacto, fundacion, descripcion, restaurante, hotel)
    VALUES ('Baigorri', 'Samaniego', 'baigorri@gmail.com', '943112255', 'Iñaki Baigorri', 2002, 'Bodega de arquitectura vanguardista.', 1, 0);

INSERT INTO bodega (nombre, direccion, email, telefono, contacto, fundacion, descripcion, restaurante, hotel)
    VALUES ('Valdemar', 'Oyón', 'valdemar@mail.com', '945222333', 'Jesús Martínez', 1889, 'Bodega familiar de quinta generación.', 0, 0);

INSERT INTO bodega (nombre, direccion, email, telefono, contacto, fundacion, descripcion, restaurante, hotel)
    VALUES ('Luis Cañas', 'Villabuena de Álava', 'info@luiscanas.com', '945112233', 'Juan Luis Cañas', 1928, 'Bodega familiar en la Rioja Alavesa.', 0, 0);

INSERT INTO vino (bodega_id, nombre, descripcion, anio, alcohol, tipo)
    VALUES (1, 'Finca Torrea', 'Un vino elaborado en las fincas Torrea. Asegura máxima calidad.', 2012, 14.0, 'Tinto');

INSERT INTO vino (bodega_id, nombre, descripcion, anio, alcohol, tipo)
    VALUES (1, 'Eguren Gran Reserva', 'Gran reserva de la casa.', 2010, 13.5, 'Blanco');

INSERT INTO vino (bodega_id, nombre, descripcion, anio, alcohol, tipo)
    VALUES (1, 'Eguren 50 Aniversario', 'Edición especial 50 aniversario.', 2020, 12.5, 'Rosado');

INSERT INTO vino (bodega_id, nombre, descripcion, anio, alcohol, tipo)
    VALUES (2, 'Marqués de Riscal Reserva', 'Reserva clásico de la casa.', 2018, 14.0, 'Tinto');
