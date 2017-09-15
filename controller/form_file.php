<?php
	header("Content-Type: text/html; charset=utf-8");
	include '../include/db_connector_S6.php';
	$sql = "select * from form_file";
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$form_file[$i]=array("id"=>$row[0],"file_url"=>$row[1],"title"=>$row[2],"tableNum"=>$row[3],"formId"=>$row[4]);
		$i=$i+1;
	}
	echo json_encode($form_file);
?>