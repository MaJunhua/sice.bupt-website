<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from monograph";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$monograph[$i]=array("id"=>$row[0],"monographName"=>$row[1],"author"=>$row[2],"sort"=>$row[3],"word"=>$row[4],"yourWord"=>$row[5],"category"=>$row[6],"unit"=>$row[7],"place"=>$row[8],"ISBN"=>$row[9],"time"=>$row[10],"classification"=>$row[11],"professor"=>$row[12],"userId"=>$row[13]);
		$i=$i+1;
	}
	echo json_encode($monograph);
?>