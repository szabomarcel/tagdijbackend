<?php 
switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        require_once 'ugyfel/getugyfel.php';
        break;
    case 'POST':
        require_once 'ugyfel/postugyfel.php';
        break;
    case 'DELETE':
        require_once 'ugyfel/deleteugyfel.php';
        break;
    case 'PUT':
        require_once 'ugyfel/putugyfel.php';
        break;
    default:
        break;
}