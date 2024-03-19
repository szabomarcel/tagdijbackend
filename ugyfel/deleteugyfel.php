<?php
// Összes ügyfél adatai JSON
$sql = '';
if(count($keresSzoveg) > 1){
    if(is_int(intval($keresSzoveg[1]))){
        $sql = "DELETE FROM ugyfel WHERE azon=" . $keresSzoveg[1];
    }else{
        http_response_code(404);
        echo 'Nem létező ügyfél.';
    }
}
require_once './databaseconnect.php';

if($result = $connection->query($sql)){
    http_response_code(201);
    echo "Sikeres törlés.";
}else{
    http_response_code(404);
    echo 'Sikertelen törlés.';
}

/*$azon = $_POST ["azon"];
$nev = $_POST ["nev"];
$szulev = $_POST ["szulev"];
$irszam = $_POST ["irszam"];
$orszag = $_POST ["orsz"];
/*$azon=2002;
$nev="Géza";	
$szulev =2005;
$irszam=4030;	
$orsz="H";*/
/*require_once './databaseconnect.php';
$sql = "DELETE FROM ugyfel WHERE `azon`='?'";
$stml->$connection->prepare($sql);
$stml->bind_param("siis", $nev, $szulev, $irszam, $orsz);
if($stml->execute()){
    http_response_code(201);
    echo 'Sikeresen lett törölve.';
}else{
    http_response_code(404);
    echo 'Nem sikerült törölni még.';
}*/