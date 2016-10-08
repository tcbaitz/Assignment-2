<?php 
//console
function phpConsole( $data ) {
    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
    echo $output;
}

//variables for connecting to database
$servername = "localhost";
$username = "dbmassignments";
$password = "rukmefampu71";
$dbname = "my_dbmassignments";
// Create connection
$dbConnection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$dbConnection) {
    die(phpConsole("Connection failed" . mysqli_connect_error()));
}
phpConsole("Connected successfully");

//code here
$gameName = mysqli_real_escape_string($dbConnection, $_POST[gameName]);
$platformName = mysqli_real_escape_string($dbConnection, $_POST[platformName]);
$year = mysqli_real_escape_string($dbConnection, $_POST[year]);
$genre = mysqli_real_escape_string($dbConnection, $_POST[genre]);
$companyName = mysqli_real_escape_string($dbConnection, $_POST[companyName]);
phpConsole("$gameName");
phpConsole("$platformName");
phpConsole("$year");
phpConsole("$genre");
phpConsole("$companyName");

$gameInsert = "INSERT INTO gdb_game (gameName, platformName, year, genre, companyName) VALUES ('$gameName', '$platformName', '$year', '$genre', '$companyName')";
if(mysqli_query($dbConnection, $gameInsert)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $gameInsert. " . mysqli_error($dbConnection);
}

//stop coding here

mysqli_close($dbConnection);
?> 