<?php
/*$azon = $_POST ["azon"];
$nev = $_POST ["nev"];
$szulev = $_POST ["szulev"];
$irszam = $_POST ["irszam"];
$orszag = $_POST ["orsz"];*/
$azon=2002;
$nev="Géza";	
$szulev =2005;
$irszam=4030;	
$orsz="H";
require_once './databaseconnect.php';
$sql = "UPDATE `ugyfel` SET `azon`='?',`nev`='?',`szulev`='?',`irszam`='?',`orsz`='?' WHERE 1";
$stmt->$conn->prepare($sql);
$stml->bind_param("isiis", $azon, $nev, $szulev, $irszam, $orsz);
if($stmt->execute()){
    http_response_code(201);
    echo 'Sikeresen lett modósítva.';
}else{
    http_response_code(404);
    echo 'Nem sikerült a modósítás.';
}
