<!DOCTYPE html>
<!-- 
    Fogadja az url kéréseket és megválaszolja azokat 
    GET http://localhost/tagdijbackend/index.php?ugyfel -> Összes ügyfél megjelenítése
    GET http://localhost/tagdijbackend/index.php?ugyfel/{id} -> Adott id alapján jelenik meg az ügyfél
    POST http://localhost/tagdijbackend/index.php?ugyfel -> Létrehoz egy ügyfelet
    PUT http://localhost/tagdijbackend/index.php?ugyfel/{id} -> 
    DELETE http://localhost/tagdijbackend/index.php?ugyfel/{id} -> Ügyfél törlése
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagdij backend</title>
</head>
<body>
    <pre>
        <?php 
            /*var_dump($_SERVER["REQUEST_METHOD"]);
            var_dump($_SERVER["QUERY_STRING"]);*/
            $keresSzoveg = explode("/", $_SERVER["QUERY_STRING"]);
            var_dump($keresSzoveg);
            if($keresSzoveg[0] === "ugyfel"){
                require_once 'ugyfel/index.php';
            }else{
                http_response_code(404);
                echo "Nincs ilyet API";
            }
        ?>
    </pre>  
</body>
</html>