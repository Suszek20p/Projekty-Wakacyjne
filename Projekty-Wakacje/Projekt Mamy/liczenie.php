<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<?php

$wyplata = trim($_POST["wyplata"]);
$inne = trim($_POST["inne"]);

$naPlus = $wyplata + $inne;

echo "Na Plus = ".$naPlus.'<br>';

$rachunki = trim($_POST["rachunki"]);
$zajecia = trim($_POST["zajecia"]);

$naMinus = $rachunki + $zajecia;

echo "Na Minus = ".$naMinus.'<br>';

$bilans = $naPlus - $naMinus;

echo "Bilans = ".$bilans;

?>