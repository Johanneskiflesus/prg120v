<?php /* Oppgave 7 */
/*
/* Programmet mottar 3 tall fra et HTML-skjema
/* Programmet skriver ut hvert av de 3 tallene
/* Programmet sammenligner 2 og 2 av tallene og skriver ut resultatet av sammenligningen
*/
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];
print ("Tall 1 er $tall1 <br/>");
print ("Tall 2 er $tall2 <br/>");
print ("Tall 3 er $tall3 <br/> <br/>"); /* de 3 tallene skrevet ut */
if ($tall1 < $tall2) /* tall 1 er mindre enn tall 2 */
{
print ("Tall 1 er mindre enn Tall 2 <br/>");
}
else if ($tall1 == $tall2) /* tall 1 er lik tall 2 */
{
print ("Tall 1 er lik Tall 2 <br/>");
}
else if ($tall1 > $tall2) /* tall 1 er større enn tall 2 */
{
print ("Tall 1 er st&oslash;rre enn Tall 2 <br/>");
}
if ($tall1 < $tall3) /* tall 1 er mindre enn tall 3 */
{
print ("Tall 1 er mindre enn Tall 3 <br/>");
}
else if ($tall1 == $tall3) /* tall 1 er lik tall 3 */
{
print ("Tall 1 er lik Tall 3 <br/>");
}
else if ($tall1 > $tall3) /* tall 1 er større enn tall 3 */
{
print ("Tall 1 er st&oslash;rre enn Tall 3 <br/>");
}
if ($tall2 < $tall3) /* tall 2 er mindre enn tall 3 */
{
print ("Tall 2 er mindre enn Tall 3 <br/>");
}
else if ($tall2 == $tall3) /* tall 2 er lik tall 3 */
{
print ("Tall 2 er lik Tall 3 <br/>");
}
else if ($tall2 > $tall3) /* tall 2 er større enn tall 3 */
{
print ("Tall 2 er st&oslash;rre enn Tall 3 <br/>");
}
?>
