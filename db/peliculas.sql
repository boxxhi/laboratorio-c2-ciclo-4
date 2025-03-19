CREATE DATABASE IF NOT EXISTS laboratorio1;

USE laboratorio1;

CREATE TABLE peliculas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo text,
    sinopsis text,
    image text
);

INSERT INTO peliculas (titulo, sinopsis, image) VALUES
    ('El Padrino', 'La historia de la familia mafiosa Corleone, liderada por Vito Corleone, y su transición de poder a su hijo Michael.', '/images/el_padrino.jpg'),
    ('Titanic', 'Un romance épico entre Jack y Rose a bordo del fatídico transatlántico que se hunde tras chocar con un iceberg.', '/images/titanic.jpg'),
    ('Inception', 'Un ladrón especializado en infiltrarse en los sueños debe realizar un último trabajo que desafía la realidad.', '/images/inception.jpg'),
    ('La La Land', 'Un pianista y una actriz luchan por equilibrar sus sueños y su relación en Los Ángeles.', '/images/la_la_land.jpg'),
    ('Matrix', 'Un hacker descubre que la realidad es una simulación y se une a la resistencia contra las máquinas.', '/images/matrix.jpg');