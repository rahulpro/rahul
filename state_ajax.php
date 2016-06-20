<?php
$country_id=$_GET['s_id'];
$connection=  mysql_connect("localhost","root","");
$db=  mysql_select_db("rahuldb");
$query=  mysql_query("select * from wp_state where country_id=$country_id");
while ($row_state=  mysql_fetch_array($query))
{
    echo "<pre>";
    echo "<option id='".$row_state['state_id']."' value='".$row_state['state_id']."'>".$row_state['state_name']."</oprion>";
   
}
?>
