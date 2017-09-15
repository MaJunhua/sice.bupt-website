<?php
	error_reporting(0);
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from t_channel where fid=0 order by `order` asc"; //返回一级栏目，按升序排列
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$channel_1[$i]=$row[3];
		$channel_id1[$i]=$row[0];                    //存储一级栏目对应的id
		$i=$i+1;
	}
	$k=0;
	while($k<=$i)
	{
		$sql = "select * from t_channel where fid=".$channel_id1[$k]." order by `order` asc"; //返回二级栏目，按升序排列
		$dbo->query($sql);
		$j=0;
		while($row = $dbo->read())
		{
			$channel_2[$k][$j]=array("channel"=>$row[3],"id"=>$row[0],"fid"=>$row[1]);
			$j=$j+1;
		}
		$k=$k+1;
	}
	$k=0;
	while($k<=$i)                                                      //将一二级标题组合
	{
		$channel[$channel_1[$k]]=$channel_2[$k];
		$k=$k+1;
	}
    //print_r($channel)
	exit(json_encode($channel));
?>