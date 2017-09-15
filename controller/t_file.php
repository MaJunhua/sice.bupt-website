<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_content";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_file[$i]=array("fid"=>$row[0],"username"=>$row[1],"uptime"=>$row[2],"title"=>$row[3],"content"=>$row[4],"url"=>$row[5],"id"=>$row[6]);
		$i=$i+1;
	}
	echo json_encode($t_file);
?>