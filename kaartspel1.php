<html>
<head>
    <title>Kaartspel1</title>
</head>
<body>
<?php
$streep =  '_';
$kleuren = array ("ruiten", "harten", "klaveren", "schoppen");
$waarden = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "boer", "heer", "vrouw");
$randomkleur = array_rand($kleuren);
$randomwaarde = array_rand($waarden);
$totaal = $kleuren[$randomkleur].$streep.$waarden[$randomwaarde];

?>
<form>
    <button type="button" onClick="history.go(0)" VALUE="Refresh">Dobbelen!</button> <br>
</form>
<img src="img/<?= $totaal; ?>.svg" alt="kaart">
</body>
</html>