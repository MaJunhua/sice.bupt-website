<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_channeltype";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_channeltype[$i]=array("id"=>$row[0],"typename"=>$row[1]);
		$i=$i+1;
	}
	echo json_encode($t_channeltype);
?>