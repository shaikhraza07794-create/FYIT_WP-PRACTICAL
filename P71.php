<?php
//Indexed Array
$technologies = array(
    "Artifical Intelligence",
    "Cloud Computing",
    "Internet of Things",
    "Blockchain",
    "Cybersecurity"
);

echo"<h2>Technology Categories</h2>";

foreach ($technologies as $technology){
    echo $technology . "<br>";
}

echo"<br>Total Categories:" . count($technologies);
?>