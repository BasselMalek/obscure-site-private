CREATE DATABASE movies_and_series;
USE movies_and_series;

CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    director VARCHAR(255),
    release_year INT,
    rating FLOAT
);

CREATE TABLE series (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    creator VARCHAR(255),
    release_year INT,
    rating FLOAT
);

CREATE TABLE actors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE movie_actors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    movie_id INT NOT NULL,
    actor_id INT NOT NULL,
    FOREIGN KEY (movie_id) REFERENCES movies(id),
    FOREIGN KEY (actor_id) REFERENCES actors(id)
);

CREATE TABLE series_actors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    series_id INT NOT NULL,
    actor_id INT NOT NULL,
    FOREIGN KEY (series_id) REFERENCES series(id),
    FOREIGN KEY (actor_id) REFERENCES actors(id)
);

CREATE TABLE genres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE movie_genres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    movie_id INT NOT NULL,
    genre_id INT NOT NULL,
    FOREIGN KEY (movie_id) REFERENCES movies(id),
    FOREIGN KEY (genre_id) REFERENCES genres(id)
);

CREATE TABLE series_genres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    series_id INT NOT NULL,
    genre_id INT NOT NULL,
    FOREIGN KEY (series_id) REFERENCES series(id),
    FOREIGN KEY (genre_id) REFERENCES genres(id)
);

INSERT INTO actors (name) VALUES
    ('Christian Bale'),
    ('Tom Hanks'),
    ('Leonardo DiCaprio'),
    ('Emilia Clarke'),
    ('Jennifer Lawrence'),
    ('Robert De Niro'),
    ('Al Pacino');
    ('Bryan Cranston'),
    ('Morgan Freeman'),
    ('Millie Bobby Brown'),
    ('Ursula Corbero'),
    ('Rami Malek'),
    ('Antony Starr'),
    ('Anya Taylor-Joy'),
    ('Bob Odenkirk');

INSERT INTO genres (name) VALUES
    ('Action'),
    ('Comedy'),
    ('Drama'),
    ('Horror'),
    ('Romance'),
    ('Science Fiction'),
    ('Thriller'),
    ('Crime');



INSERT INTO movies (title, director, release_year, rating) VALUES
    ('The Shawshank Redemption', 'Frank Darabont', 1994, 9.3),
    ('The Godfather', 'Francis Ford Coppola', 1972, 9.2),
    ('The Dark Knight', 'Christopher Nolan', 2008, 9.0);
    ('American Psycho', 'Mary Haron', 2000, 7.6),
    ('Forest Gump', 'Robert Zemeckis', 1994, 8.8),
    ('The Hunger Games', 'Gary Ross', 2012, 7.2),
    ('Taxi Driver', 'Martin Scorsese', 1976, 8.2),
    ('Titanic', 'James Cameron', 1997, 7.9),
    ('Red Sparrow', 'Francis Lawrence', 2018, 6.6),
    ('Inception', 'Christopher Nolan', 2010, 8.8);

INSERT INTO movie_actors (movie_id, actor_id) VALUES
    (1, 9),
    (2, 7),
    (3, 1),
    (4, 1),
    (5, 2),
    (6, 5),
    (7, 6),
    (8, 3),
    (9, 5),
    (10, 3);

INSERT INTO movie_genres (movie_id, genre_id) VALUES
    (1, 3),
    (2, 3),
    (3, 1),
    (4, 4),
    (5, 3),
    (6, 1),
    (7, 3),
    (8, 5),
    (9, 7),
    (10, 6);

INSERT INTO series (title, creator, release_year, rating) VALUES
    ('Breaking Bad', 'Vince Gilligan', 2008, 9.5),
    ('Game of Thrones', 'David Benioff, D.B. Weiss', 2011, 9.3),
    ('Stranger Things', 'The Duffer Brothers', 2016, 8.8),
    ('Money Heist', 'Alex Pina', 2017, 8.2),
    ('Mr. Robot', 'Sam Esmail', 2015, 8.5),
    ('The Boys', 'Seth Rogen', 2016, 8.8),
    ('Hunters', 'David Weil', 2020, 7.2),
    ('You Dont Know Jack' , 'Barry Levinson', 2010, 7.6),
    ('The Queens Gambit', 'Scott Frank', 2020, 8.6),
    ('Better Call Saul', 'Vince Gilligan', 2015, 8.9);

INSERT INTO series_actors (series_id, actor_id) VALUES
    (1, 7),
    (2, 3),
    (3, 10),
    (4, 11),
    (5, 12),
    (6, 13),
    (7, 7),
    (8, 7),
    (9, 14),
    (10, 15);

INSERT INTO series_genres (series_id, genre_id) VALUES
    (1, 3),
    (2, 3),
    (3, 6),
    (4, 7),
    (5, 3),
    (6, 1),
    (7, 8),
    (8, 3),
    (9, 3),
    (10, 3);

