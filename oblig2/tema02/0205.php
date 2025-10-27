
<?php /* Oppgave 5 */
/*
/* Programmet mottar fra et HTML-skjema 3 tall der det siste tallet angir en regneoperasjon
/* Regneoperasjon angis med en tallkode (1=addisjon, 2=subtraksjon, 3=multiplikasjon, 4=divisjon)
/* Programmet beregner og skrive ut resultatet av den angitte regneoperasjonen på de to første tallene
*/
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];
if ($tall3 == 1) /* regneoperasjon 1=addisjon er valgt */
{
$resultat=$tall1 + $tall2; /* addisjon utført */
print ("Tall 1 er $tall1 <br/>");
print ("Tall 2 er $tall2 <br/> <br/>");
print ("Regneoperasjonen er Addisjon <br/>");
print ("Resultatet av regneoperasjonen er $resultat <br/>"); /* resultater skrevet ut */
}
else if ($tall3 == 2) /* regneoperasjon 2=subtraksjon er valgt */
{
$resultat=$tall1 - $tall2; /* subtraksjon utført */
print ("Tall 1 er $tall1 <br/>");
print ("Tall 2 er $tall2 <br/> <br/>");
print ("Regneoperasjonen er Subtraksjon <br/>");
print ("Resultatet av regneoperasjonen er $resultat <br/>"); /* resultater skrevet ut */
}
else if ($tall3 == 3) /* regneoperasjon 3=multiplikasjon er valgt */
{
$resultat=$tall1 * $tall2; /* multiplikasjon utført */
print ("Tall 1 er $tall1 <br/>");
print ("Tall 2 er $tall2 <br/> <br/>");
print ("Regneoperasjonen er Multiplikasjon <br/>");
print ("Resultatet av regneoperasjonen er $resultat <br/>"); /* resultater skrevet ut */
}
else if ($tall3 == 4) /* regneoperasjon 4=divisjon er valgt */
{
$resultat=$tall1 / $tall2; /* divisjon utført */
print ("Tall 1 er $tall1 <br/>");
print ("Tall 2 er $tall2 <br/> <br/>");
print ("Regneoperasjonen er Divisjon <br/>");
print ("Resultatet av regneoperasjonen er $resultat <br/>"); /* resultater skrevet ut */
}
else
{
print ("Det er ikke angitt en gyldig regneoperasjon <br/>");
}
?>
