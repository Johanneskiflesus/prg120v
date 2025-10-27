 
 <h3>Registrer student</h3>
<form method="post" action="">
  Brukernavn <input type="text" name="brukernavn" required> <br/>
  Fornavn <input type="text" name="fornavn" required> <br/>
  Etternavn <input type="text" name="etternavn" required> <br/>
  Klassekode
  <select name="klassekode" required>
    <?php
    print("<option value=''>Velg klasse</option>");
    include("dynamiske-funksjoner.php");
    listeboksKlassekode();
    ?>
  </select>
  <br/>
  <input type="submit" name="registrerStudentKnapp" value="Registrer student">
  <input type="reset" value="Nullstill">
</form>

<?php
if (isset($_POST["registrerStudentKnapp"])) {
  $brukernavn = $_POST["brukernavn"];
  $fornavn = $_POST["fornavn"];
  $etternavn = $_POST["etternavn"];
  $klassekode = $_POST["klassekode"];

  if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
    print("Alle felt må fylles ut");
  } else {
    include("db-tilkobling.php");
    $sql = "SELECT * FROM student WHERE brukernavn='$brukernavn';";
    $resultat = mysqli_query($db, $sql);
    if (mysqli_num_rows($resultat) != 0) {
      print("Studenten er registrert fra før");
    } else {
      $sql = "INSERT INTO student (brukernavn, fornavn, etternavn, klassekode)
              VALUES('$brukernavn', '$fornavn', '$etternavn', '$klassekode');";
      mysqli_query($db, $sql);
      print("Følgende student er nå registrert: $brukernavn $fornavn $etternavn ($klassekode)");
    }
  }
}
?>