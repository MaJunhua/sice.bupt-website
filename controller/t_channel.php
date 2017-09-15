<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_channel";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_channel[$i]=array("id"=>$row[0],"fid"=>$row[1],"type"=>$row[2],"name"=>$row[3],"order"=>$row[4]);
		$i=$i+1;
	}
	//$arr=array('name'=>"tom",'num'=>"2012",'age'=>"20",'school'=>"bupt");  
    //$result=json_encode($arr); 
	exit(json_encode($t_channel));
?>