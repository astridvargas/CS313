CREATE DATABASE contacts;

CREATE TABLE public.name {

    id SERIAL NOT NULL PRIMARY KEY,
    users_name VARCHAR(100) NOT NULL
};

CREATE TABLE public.telephone {
    id SERIAL NOT NULL PRIMARY KEY,
    user_telephone INTEGER NOT NULL
};

CREATE TABLE public.address {
    id SERIAL NOT NULL PRIMARY KEY,
    street_address VARCHAR(250) NOT NULL
};

CREATE TABLE contacts {
    id SERIAL NOT NULL PRIMARY KEY,
    name_id INT NOT NULL REFERENCES public.name(id),
    telephone_id INT NOT NULL REFERENCES telephone.name(id),
    address_id INT NOT NULL REFERENCES address.name(id)
}