<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_userlog";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_userlog[$i]=array("id"=>$row[0],"fid"=>$row[1],"username"=>$row[2],"oper_time"=>$row[3],"oper_type"=>$row[4],"info"=>$row[5]);
		$i=$i+1;
	}
	echo json_encode($t_userlog);
?>