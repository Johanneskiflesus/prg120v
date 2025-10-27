
<?php
include("db-tilkobling.php");
$sql = "SELECT * FROM student ORDER BY brukernavn;";
$resultat = mysqli_query($db, $sql);

print("<h3>Registrerte studenter</h3>");
print("<table border=1>");
print("<tr><th>Brukernavn</th><th>Fornavn</th><th>Etternavn</th><th>Klassekode</th></tr>");

while ($rad = mysqli_fetch_array($resultat)) {
  print("<tr><td>$rad[brukernavn]</td><td>$rad[fornavn]</td><td>$rad[etternavn]</td><td>$rad[klassekode]</td></tr>");
}

print("</table>");
?>

