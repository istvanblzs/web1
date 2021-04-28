USE `felhasznalok`;

CREATE TABLE uzenetek (
id int(11) AUTO_INCREMENT,
    name varchar(255),
	mail varchar(255),
	komment varchar(255),
    uploaded_on datetime,
    PRIMARY KEY (id)
)

