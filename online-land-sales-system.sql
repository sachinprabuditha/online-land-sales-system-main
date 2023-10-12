-- create tables and add user data
CREATE TABLE admin(
	adminID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	a_fname varchar(30) NOT NULL,
	a_lname varchar(30) NOT NULL,
	a_username varchar(30) NOT NULL,
	a_imgLoc varchar(300),
	role varchar(10) NOT NULL,
	a_password varchar(256) NOT NULL,
	a_email varchar(25) NOT NULL
);

INSERT INTO admin
	(a_fname, a_lname, a_username, a_imgLoc, role, a_password, a_email)
VALUES
	('Pramod', 'Lakmal', 'admin', 'adminImage1.jpg', 'admin', SHA2('admin', 256), 'pramod@gmail.com');

CREATE TABLE buyer(
    buyerID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	b_fname varchar(30) NOT NULL,
	b_lname varchar(30) NOT NULL,
   	b_dob date,
	b_username varchar(30) NOT NULL,
	b_imgLoc varchar(300),
	role varchar(10) NOT NULL,
    b_password varchar(256) NOT NULL,
	b_email varchar(30) NOT NULL
);

CREATE TABLE seller(
    sellerID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,   
	s_username varchar(30) NOT NULL,
	s_imgLoc varchar(300),
	s_fname varchar(30) NOT NULL,
	s_lname varchar(30) NOT NULL,
	role varchar(10) NOT NULL,
	s_password varchar(256) NOT NULL,
	s_mobile INT,
	s_address varchar(30),
	s_email varchar(30) NOT NULL	  
);

CREATE TABLE contactus(
	conUsID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	name varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	mobile varchar(20) NOT NULL,
	message varchar(300) NOT NULL
);

CREATE TABLE land(
	landID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	l_title varchar(60) NOT NULL,
	l_location varchar(30) NOT NULL,
	l_price varchar(20) NOT NULL,
	l_imgLoc varchar(20) NOT NULL,
	sellerID INT NOT NULL,
	isSold INT NOT NULL,
	click_count INT NOT NULL,
	l_description varchar(300)
);

INSERT INTO land
	(l_title, l_location, l_price, l_imgLoc, sellerID, isSold, click_count, l_description)
VALUES
	('LAKE VISTAS', 'BATHALAGODA', '232K', '1', 1, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('KAPIRI ISLAND', 'HIKKADUWA', '542K', '2', 2, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('ROSEN BURG', 'NUWARA ELIYA', '339K', '3', 3, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('OLIVE CITY', 'KARAPITIYA', '752K', '4', 4, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('CITY POINT', 'MALABE', '245K', '5', 5, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('SPICE GROVE', 'KEGALLE', '189K', '6', 1, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('GREEN FIELD', 'BALANGODA', '453K', '7', 2, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('THE REGENT', 'PINNADUWA', '248K', '8', 3, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('HIGHWAY RESIDENCE', 'KADUWELA', '308K', '9', 4, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('VIEW POINT', 'IMADUWA', '421K', '10', 5, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('LEAF PARK', 'DAMBULLA', '679K', '11', 1, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('WELLINGTON PARK', 'KOSGAMA', '520K', '12', 2, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('URBAN PARK', 'MEEPE', '427K', '13', 3, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('TOWN VIEW', 'MALABE', '278K', '14', 4, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('THE TERRACE', 'KADUWELA', '648K', '15', 5, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('SERENE HILLS', 'MALABE', '337K', '16', 1, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('EDEN SQUARE', 'KADUWELA', '245K', '17', 2, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('STANFORD AVENUE', 'ATHURUGIRIYA', '442K', '18', 3, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('WALAUWA', 'MIRIGAMA', '169K', '19', 4, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.'),
	('KINGSBURY PARK', 'KAHATHUDUWA', '98K', '20', 5, 0, 0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, animi. Ea perspiciatis itaque illum autem architecto esse laboriosam soluta velit quod, voluptas laudantium quidem illo nesciunt asperiores mollitia beatae ipsum.')
;

CREATE TABLE soldlands(
    landID INT NOT NULL,   
	buyerID INT NOT NULL	  
);