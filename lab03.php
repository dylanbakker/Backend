
<?php

$playlist = array (
    array("genre:" => "hiphop","auteur" => "John Williams", "titel" => "My Girl"),
    array("genre:" => "Jazz","auteur" => "John Coltrane", "titel" => "New York"),
    array("genre:" => "hiphop","auteur" => "Shakira", "titel" => "Obsession")

);
array_push($playlist, array("genre:" => "Latin","auteur" => "Caetano Veloso", "titel" => "Cafe Atlantico"));
function printTracks($item, $key){
    $track = implode("|", $item);
    echo "<br> Track $key: $track";
}
array_walk($playlist, "printTracks");
    global $playlist;


?>