<?php
	date_default_timezone_set('PRC');
	include 'db_mysql_S6.php';
	global $dbo;

	$dbo = new XBMySql();

	$serverip = "localhost";
	$serverPort = "3306";
	$username = "root";
	$password = "133256";
	$database = "xbcms";

	//建立连接
	/*$serverip="127.0.0.1";
	$serverPort="3306";
	$username="root";
	$password="52hesha520?";
	$database="buptsice1";*/
	$dbo->connect($database, $username, $password, FALSE, $serverip , $serverPort);
	$dbo->query('set names utf8');
?>