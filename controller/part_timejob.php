<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from part_timejob";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$part_timejob[$i]=array("id"=>$row[0],"project"=>$row[1],"title"=>$row[2],"projectName"=>$row[3],"name"=>$row[4],"jobId"=>$row[5],"department"=>$row[6],"userId"=>$row[7]);
		$i=$i+1;
	}
	echo json_encode($part_timejob);
?>