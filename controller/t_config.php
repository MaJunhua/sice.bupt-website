<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_config";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_config[$i]=array("id"=>$row[0],"k"=>$row[1],"v"=>$row[2]);
		$i=$i+1;
	}
	echo json_encode($t_config);
?>