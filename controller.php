<?php

/**********
 * Base de dados
**********/

/* Ativar report de erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

#Ligação à Base de Dados
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'portfolio';
$db_charset = 'utf8';

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

if($mysqli->connect_error)
{
    die("Connection failed: ".$mysqli->connect_error);
}

//session_start(); #Início da Sessão de PHP /#

?>