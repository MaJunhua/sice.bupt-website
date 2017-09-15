<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from patent";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$patent[$i]=array("id"=>$row[0],"number"=>$row[1],"patentName"=>$row[2],"thePeople"=>$row[3],"inventor"=>$row[4],"time"=>$row[5],"professor"=>$row[6],"userId"=>$row[7]);
		$i=$i+1;
	}
	echo json_encode($patent);
?>