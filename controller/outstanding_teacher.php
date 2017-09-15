<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * outstanding_teacher";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$outstanding_teacher[$i]=array("id"=>$row[0],"jobId"=>$row[1],"name"=>$row[2],"title"=>$row[3],"research"=>$row[4]);
		$i=$i+1;
	}
	echo json_encode($outstanding_teacher);
?>