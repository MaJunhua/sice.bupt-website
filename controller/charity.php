<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from charity";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$charity[$i]=array("id"=>$row[0],"name"=>$row[1],"title"=>$row[2],"game1"=>$row[3],"game2"=>$row[4],"game3"=>$row[5],"professor"=>$row[6],"userid"=>$row[7]);
		$i=$i+1;
	}
	echo json_encode($charity);
?>