
<?php /* Oppgave 4 */
/*
/* Programmet mottar postnr fra et HTML-skjema
/* Programmet sjekker om postnr er korrekt fylt ut ved bruk av en egendefinert fuksjon
*/
function validerPostnr($postnr)
{
/*
/* Hensikt
/* Funksjonen sjekker om postnr er korrekt er fylt ut
/* Parametre
/* postnr = postnr som skal sjekkes
/* Funksjonsverdi/Returverdi
/* Funksjonen returnerer true hvis postnr er korrekt er fylt ut
/* Funksjonen returnerer false ellers
*/
$lovligPostnr=true;
if (!$postnr) /* postnr er ikke fylt ut */
{
$lovligPostnr=false;
}
else if (strlen($postnr)!=4) /* postnr best�r ikke av 4 tegn */
{
$lovligPostnr=false;
}
else if (!ctype_digit($postnr)) /* minst ett av tegnene er ikke et siffer */
{
$lovligPostnr=false;
}
return $lovligPostnr;
} /* Slutt p� funksjonen validerPostnr($postnr) */
$postnr=$_POST ["postnr"];
$lovligPostnr=validerPostnr($postnr); /* valideringsfunksjon utf�rt */
if ($lovligPostnr) /* postnr er korrekt fylt ut */
{
print("Postnr er korrekt fylt ut <br />");
}
else /* postnr er ikke korrekt fylt ut */
{
print("Postnr er ikke korrekt fylt ut <br />");
}
?>
