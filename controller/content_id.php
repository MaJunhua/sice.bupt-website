<?php
    //echo $_GET["id"];
	$id=$_GET["id"];
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_content where id=".$id." order by posttime desc";      //返回对应文章id的内容
	$dbo->query($sql);
	while($row = $dbo->read())
	{
		$content=array("content"=>$row[1]);
	}
	//print_r($content);
	exit(json_encode($content));
?>