<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from meeting";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$meeting[$i]=array("id"=>$row[0],"paperName"=>$row[1],"meetingName"=>$row[2],"author"=>$row[3],"identity"=>$row[4],"place"=>$row[5],"time"=>$row[6],"isEI"=>$row[7],"professor"=>$row[8],"userId"=>$row[9]);
		$i=$i+1;
	}
	echo json_encode($meeting);
?>