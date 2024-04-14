<?php

$dom = new DOMDocument();
$dom->load("slip7.xml");

$movies = $dom->getElementsByTagName("Movie");

echo "<table border=1>";
echo "<tr> <th> Movies Title </th> <th> Actor Name </th> </tr>";

foreach ($movies as $movie) {
    $title = $movie->getElementsByTagName('MovieTitle')[0]->textContent;
    $actor = $movie->getElementsByTagName('ActorName')[0]->textContent;

    echo "<tr> <td>$title</td> <td>$actor</td> </tr>";
}

echo "</table>";

?>
