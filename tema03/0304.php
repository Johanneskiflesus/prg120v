
<?php /* Oppgave 4 */
/*
/* Programmet beregner og skriver ut summen av tallene fra 1 til 10
*/
$sum=0; /* summen gitt startverdien 0 */
for ($tall=1;$tall<=10;$tall++)
{
$sum=$sum + $tall; /* summen økt med neste tall */
}
print("Summen av tallene fra 1 til 10 er $sum <br/>"); /* resultatet av beregningen skrevet ut */
?>
