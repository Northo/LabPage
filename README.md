# Dokumentasjon for side for fysikklab

Siden er delt opp i fire hovedfiler:
 - index.php
 - forberedelse.phtml
 - lab.phtml
 - rapport.phtml

Hver fil begynner med en linje på formen
```php
<?php $activePage = "index.php"; ?>
```
Denne brukes av navigasjonsbaren for å vite hvilken fane siden hører til. 

Resten av innholdet i filene kommer mellom en linje som inkluderer `head.phtml` og `footer.phtml`.

## Sirkler med ressurser
Sirklene med ressurser får man opp ved å legge til en kodesnutt på følgende form:
```php
<?php
$resources = array(
    "Mal" => ["Rapporten skal følge denne malen", "assets/mal.pdf"],
    "Sjekkliste" => ["Sjekkliste for godkjent rapport", "assets/Sjekkliste.pdf"]
);
include('resources.php');
?>
```

## Footer
Footeren står i `footer.phtml`.
Der kan f.eks. kontaktperson endres.
