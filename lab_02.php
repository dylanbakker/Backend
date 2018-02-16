<!DOCTYPE html>
<html>
<?php
$naam = "Karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";


echo "<table border='1'>
<caption>
<strong>Rapport</strong>
</caption>
<thead>
<tr><th>Naam</th><th>Nederlands</th><th>Engels
</th><th>Rekenen</th><th>Programmeren</th><th>Databases
</th><th>Gemiddeld</th></tr>
</thead>
<tbody>
<tr>
<td>$naam</td>
<td>$nederlands</td>
<td>$engels</td>
<td>$rekenen</td>
<td>$programmeren</td>
<td>$databases</td>
<td>8.08</td>
</tr>

<tr>
<td>Sophie</td>
<td>8.9</td>
<td>8.7</td>
<td>9.7</td>
<td>9.5</td>
<td>9.2</td>
<td>9.12</td>
</tr>
</tbody>

<tfoot>

<tr>
<td colspan='6'>Groep gemmideld</td>
<td>8.6</td>
</tr>
</tfoot>
</table>";


?>
</html>
