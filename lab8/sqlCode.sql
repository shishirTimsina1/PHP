--sql codes for lab 8 cs334 creating and populating customer and salesperson tables

create table CUSTOMER(
    customerId int(8) not null AUTO_INCREMENT,
    lastName varchar(30) not null,
    firstName varchar(30) not null,
    stAddy1 varchar(100) not null,
    stAddy2 varchar(100),
    city varchar(50) not null,
    stateAbbr varchar(2) not null,
    postalCode int(5) not null,
    country varchar(50),
    email varchar(100) not null,
    homePhone varchar(18),
    facebookURL varchar(200),
    cellPhone varchar(18),
    userID varchar(10) not null,
    userPassword varchar(12) not null,
    salesPersonID int(8) not null,
    PRIMARY KEY id(customerId)
);


create table SALESPERSON(
    salesPersonID int(8) not null AUTO_INCREMENT,
    lastName varchar(30) not null,
    firstName varchar(30) not null,
    stAddy1 varchar(100) not null,
    stAddy2 varchar(100),
    city varchar(50) not null,
    stateAbbr varchar(2) not null,
    postalCode int(5) not null,
    country varchar(50),
    email varchar(100) not null,
    homePhone varchar(18),
    facebookURL varchar(200),
    cellPhone varchar(18),
    PRIMARY KEY (salesPersonID)
);

ALTER table CUSTOMER
    add FOREIGN KEY (salesPersonID) references SALESPERSON(salesPersonID);



--insert Statements

insert into cs334.customer values(1, 'John', 'Smith','123 Big rd',NULL,'Pittsburgh','PA','15227',NULL,'jsmith@email.com','412-759-2244',NULL,NULL,'jSmithy','pass','1');
insert into cs334.customer values(2, 'Smith', 'Jake','123 Small rd',NULL,'Pittsburgh','PA','15227',NULL,'jakey@email.com','412-333-4444',NULL,NULL,'jakey','pass','1');
insert into cs334.customer values(3, 'Scott', 'Jia','321 Rd',NULL,'Pittsburgh','PA','15227',NULL,'jScott@email.com','412-333-5555',NULL,NULL,'jiaBOI','pass','1');
insert into cs334.customer values(4, 'Kelly', 'Charlie','321 Rd',NULL,'Philadelphia','PA','15227',NULL,'cheeseEater@email.com','412-333-6666',NULL,NULL,'ghouls','pass',2);
insert into cs334.customer values(5, 'McDonald', 'Ronald','696 Rd',NULL,'Philadelphia','PA','15227',NULL,'muscleman@email.com','412-666-5555',NULL,NULL,'paddys','pass',2);
insert into cs334.customer values(6, 'Reynolds', 'Dennis','696 Rd',NULL,'Philadelphia','PA','15227',NULL,'ladiesman@email.com','412-666-6969',NULL,NULL,'paddys','pass',2);
insert into cs334.customer values(7, 'Reynolds', 'Deeandra','78 Rd',NULL,'Philadelphia','PA','15227',NULL,'birdGirls@email.com','412-666-5555',NULL,NULL,'paddys','pass',4);
insert into cs334.customer values(8, 'Reynolds', 'Frank','321 Rd',NULL,'Philadelphia','PA','15227',NULL,'thewarthog@email.com','412-123-1234',NULL,NULL,'clams','pass',3);
insert into cs334.customer values(9, 'Cricket', 'Rickety','Homeless',NULL,'Philadelphia','PA','15227',NULL,'pastor@jesus.com','412-123-5855',NULL,NULL,'dee','pass',3);
insert into cs334.customer values(10, 'The', 'Waitress','9 Rd',NULL,'Philadelphia','PA','15227',NULL,'waitress@email.com','412-666-5555',NULL,NULL,'dennis','pass',3);

insert into cs334.salesperson values(1, 'Dave', 'Seller', '123 Rd', NULL,'Pittsburgh','PA','15227',NULL, 'dSeller@email.com','412-123-4567',NULL,NULL);
insert into cs334.salesperson values(2, 'Soen', 'Ben', '123 Rd', NULL,'Pittsburgh','PA','15227',NULL, 'dSeller@email.com','412-123-4567',NULL,NULL);
insert into cs334.salesperson values(3, 'Lowry', 'Liam', '13 Rd', NULL,'Pittsburgh','PA','15227',NULL, 'mLowry@email.com','412-144-4556',NULL,NULL);
insert into cs334.salesperson values(4, 'Li', 'Chen', '12 Rd', NULL,'Pittsburgh','PA','15227',NULL, 'cLi@email.com','412-563-4567',NULL,NULL);



--sql Queries
select * from cs334.customer as x 
    where x.lastName = 'Reynolds';

select * from cs334.salesperson as x
    where x.stAddy1 = '123 Rd';

select cs334.salesperson.lastName as SalesFirstName, cs334.salesperson.firstName as SalesLastName, cs334.customer.lastName as CustomerLastName, cs334.customer.firstName as CustomerFirstName
from cs334.salesperson JOIN cs334.customer ON cs334.salesperson.salesPersonID = cs334.customer.salesPersonID;
