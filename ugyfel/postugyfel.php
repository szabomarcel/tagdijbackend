<?php
//$azon = $_POST ["azon"];
$nev = $_POST ["nev"];
$szulev = $_POST ["szulev"];
$irszam = $_POST ["irszam"];
$orszag = $_POST ["orsz"];
/*$azon=2002;
$nev="Géza";	
$szulev =2005;
$irszam=4030;	
$orsz="H";*/
require_once './databaseconnect.php';
$sql = "INSERT INTO ugyfel (azon, nev, szulev, irszam, orsz) VALUES (NULL, ?, ?, ?, ?)";
$stml = $connection->prepare($sql);
$stml->bind_param("siis", $nev, $szulev, $irszam, $orsz);
if($stml->execute()){
    http_response_code(201);
    echo 'Sikeresen hozzáadva.';
}else{
    http_response_code(404);
    echo 'Nem sikerült hozzáadni.';
}