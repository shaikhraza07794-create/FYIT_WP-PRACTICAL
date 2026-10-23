<?php
// Associative Array 
$technologies = array(
    "Technology Name " => "Artificial Intelligent",
    "Category" => "Software Technology",
    "Year Introduced" => "2023",
    "Application Area" => "Healthcare",
    "Developer" => "OpenAI",
    "Programming Language" => "Python",
    "Website" => "ww.openai.com"
);

echo "<h2>Technology Information</h2>";

foreach ($technologies as $key => $value){
    echo "<b>$key : </b> $value <br>";
}
?>