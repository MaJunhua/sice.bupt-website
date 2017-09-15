<?php
	error_reporting(0);
	header("Content-Type: text/html; charset=utf-8");
	$id = $_GET["id"];
	include '../include/db_connector_S6.php';
	$sql = "select * from t_channel where fid=".$id." order by `order` asc"; //返回一级栏目，按升序排列
	$dbo -> query($sql);
	$i = 0;
	while($row = $dbo -> read()){
		$list['data'][$i]=array("name"=>$row[3], "id"=>$row[0]);
		$i++;
	}
	$list['fid'] = $id;
	exit(json_encode($list));
?>