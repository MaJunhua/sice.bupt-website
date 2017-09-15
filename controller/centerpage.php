<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from centerpage";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$centerpage[$i]=array("id"=>$row[0],"fid"=>$row[1],"content"=>$row[2],"language"=>$row[3],"f_check"=>$row[4]);
		$i=$i+1;
	}
	echo json_encode($centerpage);
?>