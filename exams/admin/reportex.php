<?php
include("db.php");
/*Manually mention headings of the excel columns
$contents .= "id,";
$contents .= "Name,";
$contents .= "designation";
$contents .= "dept_id";
$contents .= "branchcode";
$contents .="\n";*/

//Mysql query to get records from datanbase
$sql = mysql_query('select * from assign');
$columns_total = mysql_num_fields($sql);
//get particular column data
for ($i = 0; $i < $columns_total; $i++) 
{
    $heading = mysql_field_name($sql, $i);
    $contents .= '"'.$heading.'",';
}
$contents .="\n";

// Get Records from the table
while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$contents.='"'.$row["$i"].'",';
}
$contents.="\n";
}

// remove html and php tags etc.
$contents = strip_tags($contents); 

//header to make force download the file
header("Content-Disposition: attachment; filename=assigned.csv");
print $contents;
?>