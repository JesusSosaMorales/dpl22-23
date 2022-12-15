<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

defined('__CONFIG__') || require_once ('config.php');

function abrirConex(){
    $host = __HOST;
    $db = __DB;
    $user = __USER;
    $pass = __PASS;
    return pg_connect("host=$host dbname=$db user=$user password=$pass");
}


function selectVisited(){
    $conexion = abrirConex();
    $ciudades = pg_exec($conexion, "SELECT * FROM places WHERE visited=true");

    pg_close($conexion);
    return $ciudades;

}

function selectNoVisited(){
    $conexion = abrirConex();
    $ciudades = pg_exec($conexion, "SELECT * FROM places WHERE visited=false");
    pg_close($conexion);
    return $ciudades;
}




?>