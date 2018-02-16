<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>onzegroep</title>
</head>
<body>
<form>
    <button type="button" onClick="history.go(0)" VALUE="Refresh">random</button> <br>
</form>
<?php
$studentennummer = array("0301139" => "0301139","0300946" => "0300946","0286087" => "0286087","0301018" => "0301018","0301303" => "0301303","0259182" => "0259182","0299483" => "0299483");
$voornaam = array("0301139" => "Dylan","0300946" => "Sven","0286087" => "Elroy","0301018" => "Bjorn","0301303" => "Stan","0259182" => "Coen","0299483" => "Collin");
$achternaam = array("0301139" => "Bakker","0300946" => "Ter Beeke","0286087" => "Benjamins","0301018" => "Boerkamp","0301303" => "Veegink","0259182" => "Van Dillen","0299483" => "Ter Steege");
$woonplaats = array("0301139" => "Enschede","0300946" => "Enschede","0286087" => "Rijsen","0301018" => "Oldenzaal","0301303" => "Hengelo","0259182" => "Hengelo","0299483" => "Enschede");
$Leeftijd = array("0301139" => "17","0300946" => "16","0286087" => "17","0301018" => "16","0301303" => "16","0259182" => "21","0299483" => "17");

$randIndex = array_rand($studentennummer);
echo "Voornaam = $voornaam[$randIndex]";
echo "<br>";
echo "Achternaam = $achternaam[$randIndex]";
echo "<br>";
echo "Leeftijd = $Leeftijd[$randIndex]";
echo "<br>";
echo "Woonplaats = $woonplaats[$randIndex]";
echo "<br>";
echo "Studentnummer = $studentennummer[$randIndex]";

?>
</body>
</html>
