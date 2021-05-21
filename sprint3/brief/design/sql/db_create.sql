CREATE DATABASE dreamRent;
USE dreamRent;
CREATE TABLE admins (
    adminId integer NOT NULL,
    email varchar(255) NOT NULL,
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (adminid)
);


CREATE TABLE rentals (
    rentalId integer NOT NULL,
    customerId integer NOT NULL,
    dateOut  DATE NOT NULL,
    dateReturned  DATE NOT NULL,
    vehcileId  integer NOT NULL,
    vehicleCategoryId integer NOT NULL,
    paymentMethod  varchar(255) NOT NULL,
    totalPaid integer NOT NULL
);


CREATE TABLE vehicle (
    vehicleId integer NOT NULL,
    vehicleCategoryId integer NOT NULL,
    vehiclePic varchar(255) NOT NULL,
    vehicleModel varchar(25) NOT NULL,
    vehicleOilType varchar(255) NOT NULL,
    vehicleName varchar(255) NOT NULL,
    PRIMARY KEY (vehicleid)
);


CREATE TABLE vehicle_category (
    vehicleCategoryId integer NOT NULL,
    vehicleCategory varchar(255) NOT NULL,
    rentalRate  integer NOT NULL,
    PRIMARY KEY (vehiclecategoryid)
);




CREATE TABLE customers (
    customerId integer NOT NULL,
    email varchar(255) NOT NULL,
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

