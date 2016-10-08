CREATE TABLE gdb_platform (
	platformName varchar(45) NOT NULL,
	UNIQUE (platformName)
);

CREATE TABLE gdb_genre (
	genre varchar(45) NOT NULL,
	UNIQUE (genre)
);

CREATE TABLE gdb_company (
	companyName varchar(45) NOT NULL,
	UNIQUE (companyName)
);

CREATE TABLE gdb_game (
	id int NOT NULL AUTO_INCREMENT,
	gameName varchar(45) NOT NULL,
	platformName varchar(45) NOT NULL,
	year year(4) NOT NULL,
	genre varchar(45) NOT NULL,
	companyName varchar(45) NOT NULL,
	UNIQUE (gameName, platformName, year, genre, companyName),
	PRIMARY KEY (id)
);

mysqli_query("INSERT INTO 'gdb_company' VALUES ('Midway'), ('id Software'), ('Rockstar Games'), ('Blizzard Entertainment'), ('Infinity Ward')");
INSERT INTO gdb_company('Midway');
INSERT INTO gdb_company('id Software');
INSERT INTO gdb_company('Rockstar Games');
INSERT INTO gdb_company('Blizzard Entertainment');
INSERT INTO gdb_company('Infinity Ward');

INSERT INTO gdb_genre('Action');
INSERT INTO gdb_genre('First Person Shooter');
INSERT INTO gdb_genre('Action Adventure');
INSERT INTO gdb_genre('Action RPG');

INSERT INTO gdb_platform('Sega Genesis');
INSERT INTO gdb_platform('Microsoft Windows');
INSERT INTO gdb_platform('Xbox 360');

INSERT INTO gdb_game(gameName, platformName, year, genre, companyName)
VALUES('Mortal Kombat', 'Sega Genesis', '1992', 'Action', 'Midway');
INSERT INTO gdb_game(gameName, platformName, year, genre, companyName)
VALUES('Doom', 'Microsoft Windows', '1993', 'First Person Shooter', 'id Software');
INSERT INTO gdb_game(gameName, platformName, year, genre, companyName)
VALUES('GTA V', 'Xbox 360', '2013', 'Action Adventure', 'Rockstar Games');
INSERT INTO gdb_game(gameName, platformName, year, genre, companyName)
VALUES('Diablo III', 'Microsoft Windows', '2012', 'Action RPG', 'Blizzard Entertainment');
INSERT INTO gdb_game(gameName, platformName, year, genre, companyName)
VALUES('Call of Duty 4', 'Microsoft Windows', '2007', 'First Person Shooter', 'Infinity Ward');