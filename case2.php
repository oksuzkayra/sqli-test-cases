<html>

<body>

<h1>CASE 2 - Union Based SQLi</h1>
<h4>?id parameter is vulnerable</h4>

<?php
$id=$_GET['id'];
echo "Your query is: ".$id;
include("sql_connect.php");

foreach($db->query("SELECT content from $table where item_id='$id'") as $row){
	echo "<br><br><h3>".$row['content']."</h3>";
}
?>


</body>


</html>
