<html>
	<body>
		<h1>CASE 1 - Blind / Boolean Based SQLi</h1>
		<h4>?id parameter is vulnerable</h4>
	</body>
		
<?php
	$id = $_GET['id'];
	include("sql_connect.php");
			
	$result = $db->query("SELECT content FROM $table where item_id='$id'"); 
	if($result->fetch()[0]) echo "There is content";
	else echo "No content";	
?>


</html>
