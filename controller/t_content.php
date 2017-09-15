<?php
	header("Content-Type: text/json; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_content";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_content[$i]=array();
		$i=$i+1;
	}
	echo json_encode($t_content);
?>