USE restaurant;
CREATE TABLE admin (
    id integer NOT NULL,
    password   varchar(255) NOT NULL,
    username   varchar(255) NOT NULL,
    email   varchar(255) NOT NULL,
    firstname   varchar(255) NOT NULL,
    lastname   varchar(255)  NULL,
    PRIMARY KEY (id)
);


CREATE TABLE products (
    id integer NOT NULL,
    userid integer NOT NULL,
    name   varchar(255) NOT NULL,
    price integer NOT NULL,
    category   varchar(255) NOT NULL,
    PRIMARY KEY (id)
);



CREATE TABLE categories (
    id integer NOT NULL,
    name   varchar(255) NOT NULL,
    PRIMARY KEY (id)
);




CREATE TABLE users (
    id integer NOT NULL,
    firstname  varchar(255) NOT NULL,
    lastname  varchar(255) NOT NULL,
    email  varchar(255) NOT NULL,
    password  varchar(255) NOT NULL,
    address  varchar(255) NOT NULL,
    phone  varchar(255) NOT NULL,
    orderid integer NOT NULL,
    PRIMARY KEY (id)
);




CREATE TABLE orders (
    id integer NOT NULL,
    items   varchar(255) NOT NULL,
    totalamount integer NOT NULL,
    discountrate integer NOT NULL,
    userid   varchar(255) NOT NULL,
    productid integer NOT NULL,
    PRIMARY KEY (id)
);

