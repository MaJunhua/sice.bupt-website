<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from wage_info";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$wage_info[$i]=array("id"=>$row[0],"date"=>$row[1],"commitUserId"=>$row[2]);
		$i=$i+1;
	}
	echo json_encode($wage_info);
?>