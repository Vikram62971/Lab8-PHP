<?php
$firstName = "john";
$lastName = "smith";

echo "<h1>My name is " . $firstName . " " . $lastName . "</h1>";
echo "<h1>My name is " . ucfirst($firstName) . " " . $lastName . "</h1>";
echo "<h1>My name is " . ucwords($firstName . " " . $lastName) . "</h1>";
echo "<h1>My name is " . strtoupper($firstName . " " . $lastName) . "</h1>";
?>
