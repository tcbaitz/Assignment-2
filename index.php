<html>
 <head>
  <title>PHP Test</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 </head>
 <body>
 <?php 
//console log function
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
//start form

echo "<form action=\"insertGame.php\" method=\"post\" id=\"gameInsertForm\">";

//text box to add game name
echo "Game Name: <input type=\"text\" name=\"gameName\"></br>";

//get platform names and display in drop down
$getPlatforms = "SELECT * FROM gdb_platform";
$platformResults = mysqli_query($dbConnection, $getPlatforms);
echo "Platform: <select name='platformName'>";
while ($platformRow = mysqli_fetch_array($platformResults)) {
    echo "<option value='" . $platformRow['platformName'] ."'>" . $platformRow['platformName'] ."</option>";
}
echo "</select></br>";

//display year options in drop down 
echo "Year: <select name='year'>";
echo "<option value=\"2017\">2017</option>
	<option value=\"2016\">2016</option>
	<option value=\"2015\">2015</option>
	<option value=\"2014\">2014</option>
	<option value=\"2013\">2013</option>
	<option value=\"2012\">2012</option>
	<option value=\"2011\">2011</option>
	<option value=\"2010\">2010</option>
	<option value=\"2009\">2009</option>
	<option value=\"2008\">2008</option>
	<option value=\"2007\">2007</option>
	<option value=\"2006\">2006</option>
	<option value=\"2005\">2005</option>
	<option value=\"2004\">2004</option>
	<option value=\"2003\">2003</option>
	<option value=\"2002\">2002</option>
	<option value=\"2001\">2001</option>
	<option value=\"2000\">2000</option>
	<option value=\"1999\">1999</option>
	<option value=\"1998\">1998</option>
	<option value=\"1997\">1997</option>
	<option value=\"1996\">1996</option>
	<option value=\"1995\">1995</option>
	<option value=\"1994\">1994</option>
	<option value=\"1993\">1993</option>
	<option value=\"1992\">1992</option>
	<option value=\"1991\">1991</option>
	<option value=\"1990\">1990</option>
	<option value=\"1989\">1989</option>
	<option value=\"1988\">1988</option>
	<option value=\"1987\">1987</option>
	<option value=\"1986\">1986</option>
	<option value=\"1985\">1985</option>
	<option value=\"1984\">1984</option>
	<option value=\"1983\">1983</option>";
echo "</select></br>";

//get genre names and display in drop down
$getGenres = "SELECT * FROM gdb_genre";
$genreResults = mysqli_query($dbConnection, $getGenres);
echo "Genre: <select name='genre'>";
while ($genreRow = mysqli_fetch_array($genreResults)) {
    echo "<option value='" . $genreRow['genre'] ."'>" . $genreRow['genre'] ."</option>";
}
echo "</select></br>";

//get company names and display in drop down
$getCompanies = "SELECT * FROM gdb_company";
$companyResults = mysqli_query($dbConnection, $getCompanies);
echo "Company Name<select name='companyName'>";
while ($companyRow = mysqli_fetch_array($companyResults)) {
    echo "<option value='" . $companyRow['companyName'] ."'>" . $companyRow['companyName'] ."</option>";
}
echo "</select></br>";
echo "<button id=\"gameInsertButton\">Insert</button>";
echo "<p id=\"gameInsertResult\"></p>";
echo "</form></br>";


//create new forms
//company
echo "<form action=\"insertCompany.php\" method=\"post\" id=\"companyInsertForm\">";
echo "Company Name: <input type=\"text\" name=\"newCompanyName\">";
echo "<button id=\"companyInsertButton\">Insert</button>";
echo "<p id=\"companyInsertResult\"></p>";
echo "</form></br>";

//genre
echo "<form action=\"insertGenre.php\" method=\"post\" id=\"genreInsertForm\">";
echo "Genre: <input type=\"text\" name=\"newGenre\">";
echo "<button id=\"genreInsertButton\">Insert</button>";
echo "<p id=\"genreInsertResult\"></p>";
echo "</form></br>";

//platform name
echo "<form action=\"insertPlatform.php\" method=\"post\" id=\"platformInsertForm\">";
echo "Platform: <input type=\"text\" name=\"newPlatformName\">";
echo "<button id=\"platformInsertButton\">Insert</button>";
echo "<p id=\"platformInsertResult\"></p>";
echo "</form></br>";

//stop coding here
//close the database connection
mysqli_close($dbConnection);
?>

<script src='insert.js'></script>
</body>
</html>