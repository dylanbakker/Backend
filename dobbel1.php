<!DOCTYPE html>
<html>
<body>
<form>
    <button type="button" onClick="history.go(0)" VALUE="Refresh">Dobbelen!</button> <br>
</form>
<?php
$worp = array ("0", "1", "2", "3", "4");
$worp[0]= random_int(1,6);
$worp[1]= random_int(1,6);
$worp[2]= random_int(1,6);
$worp[3]= random_int(1,6);
$worp[4]= random_int(1,6);
$Totaal = $worp[0] + $worp[1] + $worp[2] + $worp[3] + $worp[4];

echo "Dobbelsteen 1 = $worp[0]";
echo "<br>";
echo "Dobbelsteen 2 = $worp[1]";
echo "<br>";
echo "Dobbelsteen 3 = $worp[2]";
echo "<br>";
echo "Dobbelsteen 4 = $worp[3]";
echo "<br>";
echo "Dobbelsteen 5 = $worp[4]";
echo "<br>";
echo "Totaal = $Totaal";
echo "<br>";
echo '<img src="img/Dice_.gif" width="175px" height="175px"><br/>';

?>
</body>
</html>