<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_level";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_level[$i]=array("id"=>$row[0],"level"=>$row[1],"name"=>$row[2]);
		$i=$i+1;
	}
	echo json_encode($t_level);
?>