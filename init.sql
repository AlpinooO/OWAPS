CREATE TABLE IF NOT EXISTS user (
    id serial PRIMARY KEY,
    nom varchar(25)  not null,
    email varchar(25)  not null,
    password varchar(100)  not null,
)

CREATE TABLE IF NOT EXISTS contact(
    id serial PRIMARY KEY,
    email varchar(100) not null,
    nom varchar(25) not null,
    message varchar(255) not null,
)