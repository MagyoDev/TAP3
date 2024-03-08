<?php

// include_once 'Clientes.php';
// include_once 'ClienteEspecial.php';

// $cliente = new Clientes();
// echo $cliente->getEmail();

$request = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER["REQUEST_URI"];
switch($request){
    case "GET":
        echo "foi feito um get";
        break;
    case "POST":
        echo "foi feito um post";
        break;
    case "PUT":
        echo "foi feito um PUT";
        break;
    case "DELETE":
        echo "foi feito um DELETE";
        break;
    default: 
        echo "verbo desconhecido";
        break;
}
?>