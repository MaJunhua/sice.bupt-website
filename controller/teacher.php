<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from teacher";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$teacher[$i]=array("id"=>$row[0],"name"=>$row[1],"jobId"=>$row[2],"centerId"=>$row[3]);
		$i=$i+1;
	}
	echo json_encode($teacher);
?>