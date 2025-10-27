
<?php /* Oppgave 6 */
/*
/* Programmet mottar fra et HTML-skjema et tall (positivt heltall)
/* Programmet skriver ut tallene fra 1 til det angitte tallet
*/
$angittTall=$_POST ["angittTall"];
if ($angittTall <= 0) /* angit tall er ikke et positivt heltall */
{
print("Tallet $angittTall er ikke et positivt heltall <br/>");
}
else
{
for ($tall=1;$tall<=$angittTall;$tall++) /* repetisjon fra 1 til det angitte tallet */
{
print("$tall <br/>"); /* tallet skrevet ut */
}
}
?>
