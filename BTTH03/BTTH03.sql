CREATE DATABASE LIBRARIAN;
USE librarian;
CREATE TABLE authors(
	authorId INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	authorName VARCHAR(255)	 
);
CREATE TABLE  books(
	bookID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	bookName VARCHAR (255),
	publicationYear INT(5),
	authorId INT UNSIGNED ,
	FOREIGN KEY (authorId) REFERENCES  authors(authorId));
	
	
insert into authors (authorId, authorName) values (1, 'Juan Gualberto Gomez International Airport');
insert into authors (authorId, authorName) values (2, 'Motswari Airport');
insert into authors (authorId, authorName) values (3, 'Rouen Airport');
insert into authors (authorId, authorName) values (4, 'Moomba Airport');
insert into authors (authorId, authorName) values (5, 'Licenciado Gustavo Díaz Ordaz International Airport');
insert into authors (authorId, authorName) values (6, 'Latina Air Base');
insert into authors (authorId, authorName) values (7, 'Lamen Bay Airport');
insert into authors (authorId, authorName) values (8, 'Fergus Falls Municipal Airport - Einar Mickelson Field');
insert into authors (authorId, authorName) values (9, 'Kirkenes Airport (Høybuktmoen)');
insert into authors (authorId, authorName) values (10, 'Igor I Sikorsky Memorial Airport');
insert into authors (authorId, authorName) values (11, 'Ensenada International Airport');
insert into authors (authorId, authorName) values (12, 'Shafter Airport - Minter Field');
insert into authors (authorId, authorName) values (13, 'Wudalianchi Dedu Airport');
insert into authors (authorId, authorName) values (14, 'Havre City County Airport');
insert into authors (authorId, authorName) values (15, 'Shaikh Zaid Airport');
insert into authors (authorId, authorName) values (16, 'Macaé Airport');
insert into authors (authorId, authorName) values (17, 'Milford Sound Airport');
insert into authors (authorId, authorName) values (18, 'Punta Colorada Airport');
insert into authors (authorId, authorName) values (19, 'Wevelgem Airport');
insert into authors (authorId, authorName) values (20, 'Reao Airport');


insert into books (bookId, bookName, publicationYear, authorId) values (1, 'Exterior Signage', 1999, 1);
insert into books (bookId, bookName, publicationYear, authorId) values (2, 'Termite Control', 1996, 2);
insert into books (bookId, bookName, publicationYear, authorId) values (3, 'Electrical', 2001, 3);
insert into books (bookId, bookName, publicationYear, authorId) values (4, 'HVAC', 1999, 4);
insert into books (bookId, bookName, publicationYear, authorId) values (5, 'Structural & Misc Steel Erection', 1986, 5);
insert into books (bookId, bookName, publicationYear, authorId) values (6, 'Structural & Misc Steel Erection', 1995, 6);
insert into books (bookId, bookName, publicationYear, authorId) values (7, 'Wall Protection', 2011, 7);
insert into books (bookId, bookName, publicationYear, authorId) values (8, 'Fire Sprinkler System', 1998, 8);
insert into books (bookId, bookName, publicationYear, authorId) values (9, 'Electrical', 2004, 9);
insert into books (bookId, bookName, publicationYear, authorId) values (10, 'Hard Tile & Stone', 1996, 10);
insert into books (bookId, bookName, publicationYear, authorId) values (11, 'RF Shielding', 2007, 11);
insert into books (bookId, bookName, publicationYear, authorId) values (12, 'Fire Protection', 2002, 12);
insert into books (bookId, bookName, publicationYear, authorId) values (13, 'Temp Fencing, Decorative Fencing and Gates', 2001, 13);
insert into books (bookId, bookName, publicationYear, authorId) values (14, 'Granite Surfaces', 1992, 14);
insert into books (bookId, bookName, publicationYear, authorId) values (15, 'Soft Flooring and Base', 2003, 15);
insert into books (bookId, bookName, publicationYear, authorId) values (16, 'Retaining Wall and Brick Pavers', 2012, 16);
insert into books (bookId, bookName, publicationYear, authorId) values (17, 'Marlite Panels (FED)', 2005, 17);
insert into books (bookId, bookName, publicationYear, authorId) values (18, 'Landscaping & Irrigation', 1998, 18);
insert into books (bookId, bookName, publicationYear, authorId) values (19, 'Termite Control', 2005, 19);
insert into books (bookId, bookName, publicationYear, authorId) values (20, 'Electrical and Fire Alarm', 2004, 20);