<html>

<body>

<h1>CASE 4 - Error Based SQLi</h1>
<h4>?id parameter is vulnerable</h4>

<?php
	$id=$_GET['id'];
	include("sql_connect.php");

	try {
		$db->query("SELECT status FROM $table where status='$id'"); 
	} catch (PDOException $e) {
		print("Error!" . $e->getMessage());
		die();
	}
?>


</body>


</html>
