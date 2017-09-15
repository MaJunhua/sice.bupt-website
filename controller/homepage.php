<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from homepage";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$homepage[$i]=array("id"=>$row[0],"u"=>$row[1],"name"=>$row[2],"sex"=>$row[3],"rank"=>$row[4],"research"=>$row[5],"tele"=>$row[6],"email"=>$row[7],"content"=>$row[8],"language"=>$row[9],"f_check"=>$row[10]);
		$i=$i+1;
	}
	echo json_encode($homepage);
?>