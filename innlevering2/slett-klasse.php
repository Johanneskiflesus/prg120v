
<script src="funksjoner.js"></script>
<h3>Slett klasse</h3>
<form method="post" onSubmit="return bekreft()">
  Klasse
  <select name="klassekode">
    <?php
    print("<option value=''>Velg klasse</option>");
    include("dynamiske-funksjoner.php");
    listeboksKlassekode();
    ?>
  </select>
  <br/>
  <input type="submit" name="slettKlasseKnapp" value="Slett klasse">
</form>

<?php
if (isset($_POST["slettKlasseKnapp"])) {
  $klassekode = $_POST["klassekode"];
  if (!$klassekode) {
    print("Du må velge en klasse");
  } else {
    include("db-tilkobling.php");
    
    // Sjekk om klassen har studenter
    $sjekk = "SELECT * FROM student WHERE klassekode='$klassekode';";
    $resultat = mysqli_query($db, $sjekk);
    
    if (mysqli_num_rows($resultat) > 0) {
      print("<p style='color:red;'>Kan ikke slette klassen fordi det finnes studenter registrert i den.</p>");
    } else {
      $sql = "DELETE FROM klasse WHERE klassekode='$klassekode';";
      if (mysqli_query($db, $sql)) {
        print("<p style='color:green;'>Følgende klasse er nå slettet: $klassekode</p>");
      } else {
        print("<p style='color:red;'>Noe gikk galt under sletting av klassen.</p>");
      }
    }
  }
}
?>
