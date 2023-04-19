CREATE DATABASE movieworld;
USE movieworld;

CREATE TABLE movies (
    m_id  varchar(12) NOT NULL,
   m_title varchar(45) NOT NULL,
   m_director varchar(45) NOT NULL,
   m_actors varchar(255) NOT NULL,
   m_release_year int(11) NOT NULL,
   m_genere varchar(45) NOT NULL,
   m_rating float,
   m_coverimage varchar(12) NOT NULL
);

CREATE TABLE series (
    s_id  varchar(12) NOT NULL,
   s_title varchar(45) NOT NULL,
   s_creator varchar(45) NOT NULL,
   s_actors varchar(255) NOT NULL,
   s_release_year int(11) NOT NULL,
   s_genere varchar(45) NOT NULL,
   s_rating float,
   s_coverimage varchar(12) NOT NULL
);



INSERT INTO movies (m_id,m_title, m_director,m_actors, m_release_year,m_genere, m_rating,m_coverimage) VALUES
    ('MoDT001','The Shawshank Redemption', 'Frank Darabont','Morgan Freeman',1994,'Drama', 9.3,'mov1.jpg'),
    ('MoDT002','The Godfather', 'Francis Ford Coppola','Al Pacino', 1972,'Drama', 9.2,'mov2.jpg'),
    ('MoDT003','The Dark Knight', 'Christopher Nolan','Christian Bale', 2008,'Action', 9.0,'mov3.jpg'),
    ('MoDT004','American Psycho', 'Mary Haron','Christian Bale', 2000,'Horror', 7.6,'mov4.jpg'),
    ('MoDT005','Forest Gump', 'Robert Zemeckis','Tom Hanks', 1994,'Drama', 8.8,'mov5.jpg'),
    ('MoDT006','The Hunger Games', 'Gary Ross','Robert De Niro', 2012,'Action', 7.2,'mov6.jpg'),
    ('MoDT007','Taxi Driver', 'Martin Scorsese','Robert De Niro', 1976,'Drama', 8.2,'mov7.jpg'),
    ('MoDT008','Titanic', 'James Cameron','Leonardo DiCaprio', 1997,'Romance', 7.9,'mov8.jpg'),
    ('MoDT009','Red Sparrow', 'Francis Lawrence','Robert De Niro', 2018,'Thriller', 6.6,'mov9.jpg'),
    ('MoDT010','Inception', 'Christopher Nolan','Leonardo DiCaprio', 2010,'Science Fiction', 8.8,'mov10.jpg'),
    ('MoDT011','Spiderman', 'Jon Watts','Tom Holand', 2019,'Action', 7.4,'mov11.jpg'),
    ('MoDT012','Black Adam', 'Jaume Collet-Serra','The Rock', 2022,'Action', 6.3,'mov12.jpg');



INSERT INTO series (s_id,s_title,s_creator,s_actors, s_release_year,s_genere, s_rating,s_coverimage) VALUES
    ('MoDT013','Breaking Bad', 'Vince Gilligan','Al Pacino',2008,'Drama',  9.5,'ser1.jpg'),
    ('MoDT014','Game of Thrones', 'David Benioff, D.B. Weiss','Leonardo DiCaprio', 2011,'Drama', 9.3,'ser2.jpg'),
    ('MoDT015','Stranger Things', 'The Duffer Brothers','Millie Bobby Brown', 2016,'Science Fiction', 8.8,'ser3.jpg'),
    ('MoDT016','Money Heist', 'Alex Pina','Ursula Corbero', 2017,'Thriller', 8.2,'ser4.jpg'),
    ('MoDT017','Mr. Robot', 'Sam Esmail','Rami Malek', 2015,'Drama', 8.5,'ser5.jpg'),
    ('MoDT018','The Boys', 'Seth Rogen','Antony Starr', 2016,'Action', 8.8,'ser6.jpg'),
    ('MoDT019','Hunters', 'David Weil','Al Pacino', 2020,'Crime', 7.2,'ser7.jpg'),
    ('MoDT020','You Dont Know Jack' , 'Barry Levinson','Al Pacino', 2010,'Drama', 7.6,'ser8.jpg'),
    ('MoDT021','The Queens Gambit', 'Scott Frank','Anya Taylor-Joy', 2020,'Drama', 8.6,'ser9.jpg'),
    ('MoDT022','Better Call Saul', 'Vince Gilligan','Bob Odenkirk', 2015,'Drama', 8.9,'ser10.jpg'),
    ('MoDT023','Friends', 'Marta Kauffman','Jennifer Aniston', 1994,'comedy', 8.9,'ser11.jpg');
