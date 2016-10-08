<?php
$tblPlatform = "CREATE TABLE IF NOT EXISTS gdb_platform (
platformName varchar(45) NOT NULL,
UNIQUE (platformName)
)";
if (mysqli_query($dbConnection, $tblPlatform)) {
    phpConsole("Platform table created successfully");
} else {
    phpConsole("Error creating platform table");
}

$tblGenre = "CREATE TABLE IF NOT EXISTS gdb_genre (
	genre varchar(45) NOT NULL,
	UNIQUE (genre)
)";
if (mysqli_query($dbConnection, $tblGenre)) {
    phpConsole("Genre table created successfully");
} else {
    phpConsole("Error creating genre table");
}

$tblCompany = "CREATE TABLE IF NOT EXISTS gdb_company (
	companyName varchar(45) NOT NULL,
	UNIQUE (companyName)
)";
if (mysqli_query($dbConnection, $tblCompany)) {
    phpConsole("Company table created successfully");
} else {
    phpConsole("Error creating company table");
}

$tblGame = "CREATE TABLE IF NOT EXISTS gdb_game (
	id int NOT NULL AUTO_INCREMENT,
	gameName varchar(45) NOT NULL,
	platformName varchar(45) NOT NULL,
	year year(4) NOT NULL,
	genre varchar(45) NOT NULL,
	companyName varchar(45) NOT NULL,
	UNIQUE (gameName, platformName, year, genre, companyName),
	PRIMARY KEY (id)
)";
if (mysqli_query($dbConnection, $tblGame)) {
    phpConsole("Game table created successfully");
} else {
    phpConsole("Error creating game table");
}

$companyInserts = "INSERT INTO gdb_company (companyName) VALUES ('Midway'), ('id Software'), ('Rockstar Games'), ('Blizzard Entertainment'), ('Infinity Ward')";
if (mysqli_query($dbConnection, $companyInserts)) {
	phpConsole("The company values were inserted");
} else {
	phpConsole("Error inserting the company values");
}

$genreInserts = "INSERT INTO gdb_genre (genre) VALUES ('Action'), ('First Person Shooter'), ('Action Adventure'), ('Action RPG')";
if (mysqli_query($dbConnection, $genreInserts)) {
	phpConsole("The genre values were inserted");
} else {
	phpConsole("Error inserting the genre values");
}

$platformInserts ="INSERT INTO gdb_platform (platformName) VALUES ('Sega Genesis'), ('Microsoft Windows'), ('Xbox 360')";
if (mysqli_query($dbConnection, $platformInserts)) {
	phpConsole("The platform values were inserted");
} else {
	phpConsole("Error inserting the platform values");
}
?>