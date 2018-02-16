<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>compare</title>
</head>
<body>

<?php
$getal1 = rand(1, 1000);
$getal2 = rand(1, 1000);
echo "$getal1 < $getal2 = ", $getal1 < $getal2 ? 'true' : 'false',"<br>";
echo "$getal1 > $getal2 = ", $getal1 > $getal2 ? 'true' : 'false',"<br>";
echo "$getal1 == $getal2 = ", $getal1 == $getal2 ? 'true' : 'false',"<br>";
echo "$getal1 === $getal2 = ", $getal1 === $getal2 ? 'true' : 'false',"<br>";
echo "$getal1 >= $getal2 = ", $getal1 >= $getal2 ? 'true' : 'false',"<br>";
echo "$getal1 <= $getal2 = ", $getal1 <= $getal2 ? 'true' : 'false',"<br>";
echo "$getal1 != $getal2 = ", $getal1 != $getal2 ? 'true' : 'false';
?>
</body>
</html>
