<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from user_head_image";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$user_head_image[$i]=array("id"=>$row[0],"fid"=>$row[1],"source_image"=>$row[2],"image"=>$row[3]);
		$i=$i+1;
	}
	echo json_encode($user_head_image);
?>