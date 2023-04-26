CREATE DATABASE movieworld;
USE movieworld;

CREATE TABLE movies (
    ID  varchar(12) NOT NULL,
    title varchar(45) NOT NULL,
    director varchar(45) NOT NULL,
    actors varchar(255) NOT NULL,
    release_year int(11) NOT NULL,
    genere varchar(45) NOT NULL,
    rating float,
    coverimage varchar(12) NOT NULL
);

CREATE TABLE series (
   ID  varchar(12) NOT NULL,
   title varchar(45) NOT NULL,
   creator varchar(45) NOT NULL,
   actors varchar(255) NOT NULL,
   release_year int(11) NOT NULL,
   genere varchar(45) NOT NULL,
   rating float,
   coverimage varchar(12) NOT NULL
);



INSERT INTO movies (id,title, director,actors, release_year,genere, rating,coverimage) VALUES
    ('MVDT001','The Shawshank Redemption', 'Frank Darabont','Morgan Freeman',1994,'Drama', 9.3,'mov1.jpg'),
    ('MVDT002','The Godfather', 'Francis Ford Coppola','Al Pacino', 1972,'Drama', 9.2,'mov2.jpg'),
    ('MVDT003','The Dark Knight', 'Christopher Nolan','Christian Bale', 2008,'Action', 9.0,'mov3.jpg'),
    ('MVDT004','American Psycho', 'Mary Haron','Christian Bale', 2000,'Horror', 7.6,'mov4.jpg'),
    ('MVDT005','Forest Gump', 'Robert Zemeckis','Tom Hanks', 1994,'Drama', 8.8,'mov5.jpg'),
    ('MVDT006','The Hunger Games', 'Gary Ross','Robert De Niro', 2012,'Action', 7.2,'mov6.jpg'),
    ('MVDT007','Taxi Driver', 'Martin Scorsese','Robert De Niro', 1976,'Drama', 8.2,'mov7.jpg'),
    ('MVDT008','Titanic', 'James Cameron','Leonardo DiCaprio', 1997,'Romance', 7.9,'mov8.jpg'),
    ('MVDT009','Red Sparrow', 'Francis Lawrence','Robert De Niro', 2018,'Thriller', 6.6,'mov9.jpg'),
    ('MVDT010','Inception', 'Christopher Nolan','Leonardo DiCaprio', 2010,'Science Fiction', 8.8,'mov10.jpg'),
    ('MVDT011','Spiderman', 'Jon Watts','Tom Holand', 2019,'Action', 7.4,'mov11.jpg'),
    ('MVDT012','Black Adam', 'Jaume Collet-Serra','The Rock', 2022,'Action', 6.3,'mov12.jpg');



INSERT INTO series (id,title,creator,actors, release_year,genere, rating,coverimage) VALUES
    ('TVDT001','Breaking Bad', 'Vince Gilligan','Al Pacino',2008,'Drama',  9.5,'ser1.jpg'),
    ('TVDT002','Game of Thrones', 'David Benioff, D.B. Weiss','Leonardo DiCaprio', 2011,'Drama', 9.3,'ser2.jpg'),
    ('TVDT003','Stranger Things', 'The Duffer Brothers','Millie Bobby Brown', 2016,'Science Fiction', 8.8,'ser3.jpg'),
    ('TVDT004','TVney Heist', 'Alex Pina','Ursula Corbero', 2017,'Thriller', 8.2,'ser4.jpg'),
    ('TVDT005','Mr. Robot', 'Sam Esmail','Rami Malek', 2015,'Drama', 8.5,'ser5.jpg'),
    ('TVDT006','The Boys', 'Seth Rogen','Antony Starr', 2016,'Action', 8.8,'ser6.jpg'),
    ('TVDT007','Hunters', 'David Weil','Al Pacino', 2020,'Crime', 7.2,'ser7.jpg'),
    ('TVDT008','You Dont Know Jack' , 'Barry Levinson','Al Pacino', 2010,'Drama', 7.6,'ser8.jpg'),
    ('TVDT009','The Queens Gambit', 'Scott Frank','Anya Taylor-Joy', 2020,'Drama', 8.6,'ser9.jpg'),
    ('TVDT010','Better Call Saul', 'Vince Gilligan','Bob Odenkirk', 2015,'Drama', 8.9,'ser10.jpg'),
    ('TVDT011','Friends', 'Marta Kauffman','Jennifer Aniston', 1994,'comedy', 8.9,'ser11.jpg');
