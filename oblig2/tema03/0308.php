
<?php /* Oppgave 8 */
/*
/* Programmet mottar 5 tall fra et HTML-skjema
/* Programmet legger inn de 5 tallene i et array
/* Programmet skriver ut de 5 tallene i samme rekkefølge som de ble mottatt
/* Programmet skriver deretter ut tallene i motsatt rekkefølge
*/
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];
$tall4=$_POST ["tall4"];
$tall5=$_POST ["tall5"];
$tallArray=array($tall1,$tall2,$tall3,$tall4,$tall5); /* de 5 tallene lagt inn i et array */
for ($tall=0;$tall<=4;$tall++)
{
print("$tallArray[$tall] "); /* de 5 tallene skrevet ut */
}
print("<br/>");
for ($tall=4;$tall>=0;$tall--)
{
print("$tallArray[$tall] "); /* de 5 tallene skrevet ut i motsatt rekkefølge */
}
?>
