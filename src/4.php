  <?php
$database = "myDatabase";
$username = "myUsername";
$password = "myPassword";
$server = "myServer";
$dbhandle = mysqli_connect($server, $username, $password) or die("Unable to connect to MySQL");
mysqli_select_db($dbhandle, $database) or die("Could not select database");
// Retrieve data from Database
$result = mysqli_query($dbhandle, "SELECT * FROM tableName WHERE id='1'");
while ($row = mysqli_fetch_array($result)) {
echo "$row[firstname] $row[lastname]";
}
mysqli_close($dbhandle);
?>