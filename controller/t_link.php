<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_link";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_link[$i]=array("posttime"=>$row[0],"poster"=>$row[1],"name"=>$row[2],"img_url"=>$row[3],"url"=>$row[4],"id"=>$row[5]);
		$i=$i+1;
	}
	echo json_encode($t_link);
?>