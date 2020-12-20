
CREATE TABLE store
(
	ID int not null auto_increment,
	CITY varchar(500) not null,
	PRIMARY KEY (ID)
);

INSERT INTO store (ID, CITY)
VALUES (1, 'Калининград'),
       (2, 'Черняховск'),
       (3, 'Советск');

CREATE TABLE book_store
(
	BOOK_ID int not null,
	STORE_ID int not null,
	PRICE DECIMAL(10, 2),
	QUANTITY int not null default 0,
	PRIMARY KEY (STORE_ID, BOOK_ID),
	FOREIGN KEY FK_BOOK_STORE_BOOK (BOOK_ID) references book(ID)
		ON UPDATE CASCADE
		ON DELETE RESTRICT,
	FOREIGN KEY FK_BOOK_STORE_STORE (STORE_ID) references store(ID)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);
CREATE TABLE store_book
(
	STORE_ID int not null default 0,
	BOOK_ID int not null,
	PRIMARY KEY (STORE_ID, BOOK_ID),
	FOREIGN KEY FK_STORE_BOOK_STORE (STORE_ID) references store(ID)
		ON UPDATE CASCADE
		ON DELETE RESTRICT,
	FOREIGN KEY FK_STORE_BOOK_BOOK (BOOK_ID) references book(ID)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);
INSERT INTO store_book (STORE_ID, BOOK_ID)
VALUES (1, 1),
       (1, 2),
       (1, 3),
       (1, 4),
       (1, 5),

       (2, 1),
       (2, 2),
       (2, 3),
       (2, 4),
       (2, 5),

       (3, 1),
       (3, 2),
       (3, 3),
       (3, 4),
       (3, 5);

INSERT INTO book_store (BOOK_ID, STORE_ID, PRICE, QUANTITY)
	(SELECT ID, 1, PRICE, QUANTITY FROM book);

ALTER TABLE book DROP COLUMN QUANTITY;
ALTER TABLE book DROP COLUMN PRICE;