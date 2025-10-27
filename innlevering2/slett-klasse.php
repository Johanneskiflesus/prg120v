
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
    $sql = "DELETE FROM klasse WHERE klassekode='$klassekode';";
    mysqli_query($db, $sql);
    print("Følgende klasse er nå slettet: $klassekode");
  }
}
?>