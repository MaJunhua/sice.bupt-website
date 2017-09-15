<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from sciei";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$sciei[$i]=array("id"=>$row[0],"paperName"=>$row[1],"publicationName"=>$row[2],"issues"=>$row[3],"time"=>$row[4],"author"=>$row[5],"identity"=>$row[6],"SCIindex"=>$row[7],"EIindex"=>$row[8],"professor"=>$row[9],"SCI/EI"=>$row[10],"phone"=>$row[11],"userId"=>$row[12]);
		$i=$i+1;
	}
	echo json_encode($sciei);
?>