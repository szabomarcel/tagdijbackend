<?php
$putadat = fopen("php://input", "r");
$raw_data = '';
while ($chunk = fread($putadat, 1024))
    $raw_data.= $chunk;
fclose($putadat);
$adatJSON = json_decode($raw_data);
$azon = $adatJSON -> azon;
$nev = $adatJSON -> nev;
$szulev = $adatJSON -> szulev;
$irszam = $adatJSON -> irszam;
$orsz = $adatJSON -> orsz;
/*azon=2002;
$nev="Géza";	
$szulev =2005;
$irszam=4030;	
$orsz="H";*/
// bejövő adatok rendelkezésünkre állnak, kiírjuk az adatokat
require_once './databaseconnect.php';
$sql = "UPDATE ugyfel SET `nev`=?,`szulev`=?,`irszam`=?,`orsz`=? WHERE azon=?";
$stml = $connection->prepare($sql);
$stml->bind_param("siisi", $nev, $szulev, $irszam, $orsz, $azon);
if($stml->execute()){
    http_response_code(201);
    echo 'Sikeresen lett modósítva.';
}else{
    http_response_code(404);
    echo 'Nem sikerült a modósítás.';
}
