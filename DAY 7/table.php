<?php

$connection = mysqli_connect("localhost","pma","db_internship");
 
//query
$q = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));
echo"<table boarder='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>NAME</th>";
echo"<th>GENDER</th>";
while ($row = mysqli_fetch_array($q))
{
    echo"<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td><a href=''>deletet</a></td>";
    echo"</tr>"
}
    echo"</table>";
echo "<a href ='insert.php'>add record</a>";
