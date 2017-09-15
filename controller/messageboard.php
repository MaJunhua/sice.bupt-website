<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from messageboard";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$messageboard[$i]=array("id"=>$row[0],"name"=>$row[1],"content"=>$row[2],"posttime"=>$row[3],"telephone"=>$row[4],"email"=>$row[5]);
		$i=$i+1;
	}
	echo json_encode($messageboard);
?>