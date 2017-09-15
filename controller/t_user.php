<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_user";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_user[$i]=array("id"=>$row[0],"u"=>$row[1],"p"=>$row[2],"level"=>$row[3],"name"=>$row[4],"info"=>$row[5],"tele"=>$row[6],"other"=>$row[7],"lastlog"=>$row[8],"email"=>$row[9]);
		$i=$i+1;
	}
	echo json_encode($t_user);
?>