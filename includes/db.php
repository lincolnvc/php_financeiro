<?php

error_reporting(0);
ini_set('display_errors', '0');

// Connection Database

$dbuser="USUARIOCPANEL_USUARIOBANCO";		 		//USUARIO MYSQL
$dbpassword="SENHA"; 			//SENHA DO USUARIO
$dbname="USUARIOCPANEL_BANCO"; 	//NOME DO BANCO DE DADOS
$dbhost="localhost";		//SERVIDOR MYSQL, GERALMENTE E LOCALHOST, MAS PODE MUDAR DEPENDENDO DA HOSPEDAGEM

//Connect
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if (mysqli_connect_errno()) {
	printf("MySQLi connection failed: ", mysqli_connect_error());
	exit();
}

// Change character set to utf8
if (!$mysqli->set_charset('utf8')) {
	printf('Error loading character set utf8: %s\n', $mysqli->error);
}

?>
