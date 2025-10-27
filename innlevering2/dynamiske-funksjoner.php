
<?php
function listeboksKlassekode() {
  include("db-tilkobling.php");
  $sql = "SELECT klassekode, klassenavn FROM klasse ORDER BY klassekode;";
  $resultat = mysqli_query($db, $sql);
  
  if (!$resultat) {
    die("Feil ved henting av klasser: " . mysqli_error($db));
  }

  while ($rad = mysqli_fetch_array($resultat)) {
    $klassekode = htmlspecialchars($rad["klassekode"]);
    $klassenavn = htmlspecialchars($rad["klassenavn"]);
    print("<option value='$klassekode'>$klassekode - $klassenavn</option>");
  }
}

function listeboksStudent() {
  include("db-tilkobling.php");
  $sql = "SELECT brukernavn, fornavn, etternavn FROM student ORDER BY brukernavn;";
  $resultat = mysqli_query($db, $sql);

  if (!$resultat) {
    die("Feil ved henting av studenter: " . mysqli_error($db));
  }

  while ($rad = mysqli_fetch_array($resultat)) {
    $brukernavn = htmlspecialchars($rad["brukernavn"]);
    $fornavn = htmlspecialchars($rad["fornavn"]);
    $etternavn = htmlspecialchars($rad["etternavn"]);
    print("<option value='$brukernavn'>$brukernavn - $fornavn $etternavn</option>");
  }
}
?>

