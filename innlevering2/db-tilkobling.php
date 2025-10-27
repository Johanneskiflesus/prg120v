
<?php
/* db-tilkobling.php
   Kobler PHP til MySQL-databasen på Dokploy
*/

$host = "mysql";                 // DB_HOST fra Dokploy
$username = "255435";              // DB_USER fra Dokploy
$password = "7e60255435";             // DB_PASSWORD fra Dokploy
$database = "db_255435";  // DB_DATABASE fra Dokploy

$db = mysqli_connect($host, $username, $password, $database)
  or die("Feil: ikke kontakt med database-server");
?>

