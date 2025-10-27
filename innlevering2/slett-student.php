
<script src="funksjoner.js"></script>
<h3>Slett student</h3>
<form method="post" onSubmit="return bekreft()">
  Student
  <select name="brukernavn">
    <?php
    print("<option value=''>Velg student</option>");
    include("dynamiske-funksjoner.php");
    listeboksStudent();
    ?>
  </select>
  <br/>
  <input type="submit" name="slettStudentKnapp" value="Slett student">
</form>

<?php
if (isset($_POST["slettStudentKnapp"])) {
  $brukernavn = $_POST["brukernavn"];
  if (!$brukernavn) {
    print("Du må velge en student");
  } else {
    include("db-tilkobling.php");
    $sql = "DELETE FROM student WHERE brukernavn='$brukernavn';";
    mysqli_query($db, $sql);
    print("Følgende student er nå slettet: $brukernavn");
  }
}
?>
