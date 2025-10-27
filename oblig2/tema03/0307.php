
<?php /* Oppgave 7 */
/*
/* Programmet mottar et navn fra et HTML-skjema
/* Programmet skriver ut fornavn og etternavn hver for seg
*/
$navn=$_POST["navn"];
$oppdeltNavn=explode(" ",$navn);
$fornavn=$oppdeltNavn[0];
$etternavn=$oppdeltNavn[1];
print("Fornavnet er $fornavn <br/>");
print("Etternavnet er $etternavn <br/>"); /* fornavn og etternavn skrevet ut hver for seg */
?>
