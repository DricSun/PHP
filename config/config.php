<?php

$host = 'localhost';
$dbname = 'twitter';
$user = 'root';
$pass = '';


try{
	$db = new PDO('mysql:host='.$host.';dbname=' .$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    var_dump($db);
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}
