
<?php /* Oppgave 5 */
/*
/* Programmet beregner og skriver ut summen og gjennomsnittet av tallene fra 1 til 10
*/
$sum=0; /* summen gitt startverdien 0 */
for ($tall=1;$tall<=10;$tall++)
{
$sum=$sum + $tall; /* summen økt med neste tall */
}
$gjennomsnitt=$sum/10; /* gjennomsnittet beregnet */
print("Summen av tallene fra 1 til 10 er $sum <br/>");
print("Gjennomsnittet av tallene fra 1 til 10 er $gjennomsnitt <br/>");
?>
