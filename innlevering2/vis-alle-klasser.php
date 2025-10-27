
<?php
include("db-tilkobling.php");
$sql = "SELECT * FROM klasse ORDER BY klassekode;";
$resultat = mysqli_query($db, $sql);

print("<h3>Registrerte klasser</h3>");
print("<table border=1>");
print("<tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th></tr>");

while ($rad = mysqli_fetch_array($resultat)) {
  print("<tr><td>$rad[klassekode]</td><td>$rad[klassenavn]</td><td>$rad[studiumkode]</td></tr>");
}

print("</table>");
?>
