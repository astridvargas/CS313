CREATE DATABASE contacts;

CREATE TABLE contacts (
    id SERIAL NOT NULL PRIMARY KEY,
    _name VARCHAR(80) NOT NULL,
    _telephone VARCHAR(80) NOT NULL,
    _address VARCHAR(255) NOT NULL
);

-- INSERT INTO contacts (_name, _telephone, _address)
--     VALUES('Astrid Lujo', '333-333-3333', '111 Fake Street, Rexburg ID 83440');

-- INSERT INTO contacts (_name, _telephone, _address)
--     VALUES('Christopher Lujo', '333-333-3331', '111 Fake Street, Rexburg ID 83440');