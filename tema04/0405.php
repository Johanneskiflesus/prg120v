
<?php /* Oppgave 5 */
/*
/* Programmet mottar klassekode fra et HTML-skjema
/* Programmet sjekker om klassekode er korrekt fylt ut ved bruk av en egendefinert fuksjon
*/
function validerKlassekode($klassekode)
{
/*
/* Hensikt
/* Funksjonen sjekker om klassekode er korrekt er fylt ut
/* Parametre
/* klassekode = klassekoden som skal sjekkes
/* Funksjonsverdi/Returverdi
/* Funksjonen returnerer true hvis klassekode er korrekt er fylt ut
/* Funksjonen returnerer false ellers
*/
$lovligKlassekode=true;
if (!$klassekode) /* klassekode er ikke fylt ut */
{
$lovligKlassekode=false;
}
else if (strlen($klassekode)!=3) /* klassekode best�r ikke av 3 tegn */
{
$lovligKlassekode=false;
}
else
{
$tegn1=$klassekode[0]; /* f�rste tegn i klassekoden */
$tegn2=$klassekode[1]; /* andre tegn i klassekoden */
$tegn3=$klassekode[2]; /* tredje tegn i klassekoden */
if (!ctype_alpha($tegn1)) /* tegn1 er ikke bokstav */
{
$lovligKlassekode=false;
}
if (!ctype_alpha($tegn2)) /* tegn2 er ikke bokstav */
{
$lovligKlassekode=false;
}
if (!ctype_digit($tegn3)) /* tegn3 er ikke et siffer */
{
$lovligKlassekode=false;
}
}
return $lovligKlassekode;
} /* Slutt p� funksjonen validerKlassekode($klassekode) */
$klassekode=$_POST ["klassekode"];
$lovligKlassekode=validerKlassekode($klassekode); /* valideringsfunksjon utf�rt */
if ($lovligKlassekode) /* klassekode er korrekt fylt ut */
{
print("Klassekode er korrekt fylt ut <br />");
}
else /* klassekode er ikke korrekt fylt ut */
{
print("Klassekode er ikke korrekt fylt ut <br />");
}
?>

