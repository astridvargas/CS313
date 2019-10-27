CREATE DATABASE contacts;

CREATE TABLE _name {

    id SERIAL NOT NULL PRIMARY KEY,
    users_name VARCHAR(100) NOT NULL
};

CREATE TABLE _telephone {
    id SERIAL NOT NULL PRIMARY KEY,
    user_telephone INTEGER NOT NULL
};

CREATE TABLE _address {
    id SERIAL NOT NULL PRIMARY KEY,
    street_address VARCHAR(250) NOT NULL
};

CREATE TABLE contacts {
    id SERIAL NOT NULL PRIMARY KEY,
    name_id INT NOT NULL REFERENCES public.name(id),
    telephone_id INT NOT NULL REFERENCES telephone.name(id),
    address_id INT NOT NULL REFERENCES address.name(id)
}

INSERT INTO _name(users_name)
    VALUES ("Astrid Lujo");

INSERT INTO _telephone(user_telephone)
    VALUES ("333-333-3333");

INSERT INTO _address(street_address)
    VALUES ("111 Fake Street, Rexburg ID 83440");