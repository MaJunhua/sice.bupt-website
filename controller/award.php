<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from award";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$award[$i]=array("id"=>$row[0],"awardName"=>$row[1],"awardLevel"=>$row[2],"name"=>$row[3],"jobId"=>$row[4],"time"=>$row[5],"property"=>$row[6],"remark"=>$row[7],"professor"=>$row[8],"userId"=>$row[9]);
		$i=$i+1;
	}
	echo json_encode($award);
?>