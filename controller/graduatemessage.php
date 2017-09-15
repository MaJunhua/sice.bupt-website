<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from graduatemessage";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$graduatemessage[$i]=array("id"=>$row[0],"name"=>$row[1],"content"=>$row[2],"mcheck"=>$row[3],"posttime"=>$row[4]);
		$i=$i+1;
	}
	echo json_encode($graduatemessage);
?>