<?php
    //echo $_GET["id"];
	$id=$_GET["id"];
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_content where fid=".$id." order by posttime desc";      //返回对应二级栏目id的文章列表
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$list[$i]=array("id"=>$row[10],"title"=>$row[2],"time"=>$row[4]);
		$i=$i+1;
	}
	//print_r($content);
	exit(json_encode($list));
?>