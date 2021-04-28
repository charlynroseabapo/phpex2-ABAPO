<?php

include 'Class.php';

$obj = new Triangle;
$max = $obj->triangleRange($_POST['fnum'], $_POST['snum']);
echo "<h1>The maximum range of the triangle's left side is: $max </h1>";


$obj = new Binary;
$count = $obj->onesInBinary($_POST['bnum']);
echo "<h1>The ones (1) in a binary: $count </h1>";


$obj = new Join;
$path = $obj->wordsJoin($_POST['fpart'], $_POST['spart']);
echo "<h1>The joined path: $path </h1>";

$obj = new Square;
$sastry = $obj->perfectSquare($_POST['square']);
echo "<h1>The result of the validation: $sastry </h1>";

?>