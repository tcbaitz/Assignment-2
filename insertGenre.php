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
$newGenre = mysqli_real_escape_string($dbConnection, $_POST[newGenre]);
phpConsole("$newGenre");

$newGenreInsert = "INSERT INTO gdb_genre (genre) VALUES ('$newGenre')";
if(mysqli_query($dbConnection, $newGenreInsert)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $newGenreInsert. " . mysqli_error($dbConnection);
}

//stop coding here

mysqli_close($dbConnection);
?> 