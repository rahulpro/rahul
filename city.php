<?php
$state_id=$_GET['c_id'];
$connection=  mysql_connect("localhost","root","");
$db=mysql_select_db("rahuldb");
$query=mysql_query("select * from tbl_city where state_id=$state_id");
$row_city=  mysql_fetch_array($query);
print_r($row_city);
while ($row_city=  mysql_fetch_array($query))
{
    echo "<pre>";
    echo "<option id='".$row_city['city_id']."' value='".$row_city['city_id']."'>".$row_city['city_name']."</oprion>";
}
?>
