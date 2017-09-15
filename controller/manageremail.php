<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from manageremail";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$manageremail[$i]=array("id"=>$row[0],"server"=>$row[1],"serverport"=>$row[2],"usermail"=>$row[3],"userpass"=>$row[4]);
		$i=$i+1;
	}
	echo json_encode($manageremail);
?>