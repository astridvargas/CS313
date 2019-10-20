CREATE DATABASE contacts;

CREATE TABLE userName (

    id SERIAL NOT NULL PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL
);

CREATE TABLE userTelephone (
    id SERIAL NOT NULL PRIMARY KEY,
    user_telephone INTEGER NOT NULL
);

CREATE TABLE userAddress (
    id SERIAL NOT NULL PRIMARY KEY,
    street_address VARCHAR(250) NOT NULL
);

CREATE TABLE contacts (
    id SERIAL NOT NULL PRIMARY KEY,
    userName_id INT NOT NULL REFERENCES userName(id),
    userTelephone_id INT NOT NULL REFERENCES userTelephone(id),
    userAddress_id INT NOT NULL REFERENCES userAddress(id)
);

INSERT INTO userName(user_name)
    VALUES ("Astrid Lujo");

INSERT INTO userTelephone(user_telephone)
    VALUES ("333-333-3333");

INSERT INTO userAddress(street_address)
    VALUES ("111 Fake Street, Rexburg ID 83440");