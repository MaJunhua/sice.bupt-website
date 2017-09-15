<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../../include/db_connector_S6.php';
	$sql = "select * from t_channel where fid=0 order by `order` asc"; //返回一级栏目，按升序排列
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_channel[$i]=$row[3];
		$i=$i+1;
	}
	exit(json_encode($t_channel));
?>