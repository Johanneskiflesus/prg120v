
<?php
/* db-tilkobling.php
   Kobler PHP til MySQL-databasen på Dokploy
*/

$host = "mysql";                 // DB_HOST fra Dokploy
$username = "root";              // DB_USER fra Dokploy
$password = "12345";             // DB_PASSWORD fra Dokploy
$database = "studentadministrasjon";  // DB_DATABASE fra Dokploy

$db = mysqli_connect($host, $username, $password, $database)
  or die("Feil: ikke kontakt med database-server");
?>

