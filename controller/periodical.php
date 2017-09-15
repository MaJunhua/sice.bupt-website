<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from periodical";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$periodical[$i]=array("id"=>$row[0],"paperName"=>$row[1],"publicationName"=>$row[2],"author"=>$row[3],"identity"=>$row[4],"issues"=>$row[5],"time"=>$row[6],"isEI"=>$row[7],"isInternational"=>$row[8],"professor"=>$row[9],"userId"=>$row[10]);
		$i=$i+1;
	}
	echo json_encode($periodical);
?>