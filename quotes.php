<!doctype html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>quotes</title>
</head>
<body>
<?php
echo <<<tekst
<strong>Single quotes:</strong> Variables and most escape sequences will not be interpreted. but most things almost completely "as if".
<br><br><strong>Double quotes:</strong> will display a host of escaped characters, and the variables in the strings will be evaluated. 
<br>Also an important point here is that you can use curly braces to isolate the name of the variable you want evaluated.
tekst;

?>

</body>
</html>