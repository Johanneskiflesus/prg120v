
<h3>Registrer klasse</h3>
<form method="post" action="">
  Klassekode <input type="text" name="klassekode" required> <br/>
  Klassenavn <input type="text" name="klassenavn" required> <br/>
  Studiumkode <input type="text" name="studiumkode" required> <br/>
  <input type="submit" name="registrerKlasseKnapp" value="Registrer klasse">
  <input type="reset" value="Nullstill">
</form>

<?php
if (isset($_POST["registrerKlasseKnapp"])) {
  $klassekode = $_POST["klassekode"];
  $klassenavn = $_POST["klassenavn"];
  $studiumkode = $_POST["studiumkode"];

  if (!$klassekode || !$klassenavn || !$studiumkode) {
    print("Alle felt må fylles ut");
  } else {
    include("db-tilkobling.php");
    $sql = "SELECT * FROM klasse WHERE klassekode='$klassekode';";
    $resultat = mysqli_query($db, $sql);
    if (mysqli_num_rows($resultat) != 0) {
      print("Klassen er registrert fra før");
    } else {
      $sql = "INSERT INTO klasse (klassekode, klassenavn, studiumkode)
              VALUES('$klassekode', '$klassenavn', '$studiumkode');";
      mysqli_query($db, $sql);
      print("Følgende klasse er nå registrert: $klassekode $klassenavn ($studiumkode)");
    }
  }
}
?>