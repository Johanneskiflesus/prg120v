
<?php
$host = "b-studentsql-1.usn.no";
$username = "255435";
$password = "7e60255435";
$database = "255435";

$db = mysqli_connect($host, $username, $password, $database)
  or die("Feil: ikke kontakt med database-server");

mysqli_set_charset($db, "utf8");
?>
