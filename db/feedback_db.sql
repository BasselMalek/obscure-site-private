CREATE DATABASE feedback_db;
USE feedback_db;

CREATE TABLE feedback(
    id  int(11) NOT NULL AUTO_INCREMENT,
    name varchar(45) NOT NULL,
    email varchar(255) NOT NULL,
    message varchar(4000) NOT NULL
);

INSERT INTO feedback(name,email,message) VALUES(
    'test', 'test@test.com', 'wish you have a wonderful day!'
);
