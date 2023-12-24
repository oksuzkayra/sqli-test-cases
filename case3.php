<html>

<body>

<h1>CASE 3 - Time Based SQLi</h1>
<h4>?id parameter is vulnerable</h4>

<?php
$id=$_GET['id'];
include("sql_connect.php");

$db->query("SELECT status from $table where id='$id'");
?>


</body>


</html>
