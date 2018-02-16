<!DOCTYPE html>
<html>
<head><style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 5px;
        }
    </style></head>
<body>

<?php
$eredivisie = array
(
    array("logo","Club","Plaats in ranglijst","Stad","Wedstrijden gespeeld","Gewonnen","Gelijk","Verloren"),
    array('<img src="img/twente.png" width="28">','<img src="img/heracles-logo.png" width="24">'),
    array("Fc Twente","Heracles"),
    array("16e","12e"),
    array("Enschede","Almelo"),
    array("22","22"),
    array("4","6"),
    array("4","6"),
    array("14","10")
);


echo "<table>";
echo "<tr>";
echo "<th>".$eredivisie [0][0]."</th>";
echo "<th>".$eredivisie [0][1]."</th>";
echo "<th>".$eredivisie [0][2]."</th>";
echo "<th>".$eredivisie [0][3]."</th>";
echo "<th>".$eredivisie [0][4]."</th>";
echo "<th>".$eredivisie [0][5]."</th>";
echo "<th>".$eredivisie [0][6]."</th>";
echo "<th>".$eredivisie [0][7]."</th>";
echo "</tr>";
echo "<tr>";
echo "<td>".$eredivisie [1][0]."</td>";
echo "<td>".$eredivisie [2][0]."</td>";
echo "<td>".$eredivisie [3][0]."</td>";
echo "<td>".$eredivisie [4][0]."</td>";
echo "<td>".$eredivisie [5][0]."</td>";
echo "<td>".$eredivisie [6][0]."</td>";
echo "<td>".$eredivisie [7][0]."</td>";
echo "<td>".$eredivisie [8][0]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$eredivisie [1][1]."</td>";
echo "<td>".$eredivisie [2][1]."</td>";
echo "<td>".$eredivisie [3][1]."</td>";
echo "<td>".$eredivisie [4][1]."</td>";
echo "<td>".$eredivisie [5][1]."</td>";
echo "<td>".$eredivisie [6][1]."</td>";
echo "<td>".$eredivisie [7][1]."</td>";
echo "<td>".$eredivisie [8][1]."</td>";
echo "</tr>";

?>
</body>
</html>

