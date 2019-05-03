<?php
include("db.php");
//Manually mention headings of the excel columns
$contents .= "id,";
$contents .= "name,";
$contents .= "date,";
$contents .= "designation,";
$contents .= "fn or an,";
$contents .="\n";

//Mysql query to get records from datanbase
$date=$_POST['date'];
$sql = mysql_query("select * from assign where date='$date'");
while($row = mysql_fetch_array($sql))
{
    $contents.=$row['id'].",";
    $contents.=$row['name'].",";
	$contents.=$row['date'].",";
	$contents.=$row['designation'].",";
    $contents.=$row['fnoran']."\n";
}
$contents = strip_tags($contents); 

//header to make force download the file
header("Content-Disposition: attachment; filename=datewise.csv");
print $contents;
?>