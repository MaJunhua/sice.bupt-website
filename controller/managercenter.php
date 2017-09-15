<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from managercenter";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$managercenter[$i]=array("id"=>$row[0],"name"=>$row[1],"name_english"=>$row[2],"u"=>$row[3]);
		$i=$i+1;
	}
	echo json_encode($managercenter);
?>