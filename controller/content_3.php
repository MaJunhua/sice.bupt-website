<?php
	//header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select id from t_channel where name='学院动态'";      //返回学院动态id
	$dbo->query($sql);
	while($row = $dbo->read())
	{
		$id=$row[0];
	}
	$sql = "select * from t_content where fid=".$id." order by posttime desc";      //返回学院动态下文章，按时间降序
	$dbo->query($sql);
	$i=0;
	while($i<5 & $row = $dbo->read())
	{
		$time=substr($row[4],5,2)."月".substr($row[4],8,2)."日";
		$content_title[$i]=array("title"=>$row[2],"date"=>$time,"id"=>$row[10],"fid"=>$row[0]);
		$i=$i+1;
	}
	exit(json_encode($content_title));
?>