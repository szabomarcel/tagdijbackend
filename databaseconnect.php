<?php
$connection = new mysqli("localhost", "root", "", "tagdij");
if($connection->connect_error){
    die('Connection falied'. $connection->connect_error);
}
$connection->set_charset("utf8");