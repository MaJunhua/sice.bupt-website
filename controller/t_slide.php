<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_slide";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_slide[$i]=array("id"=>$row[0],"fid"=>$row[1],"img_url"=>$row[2]);
		$i=$i+1;
	}
	echo json_encode($t_slide);
?>