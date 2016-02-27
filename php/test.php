<html>
<body>

<h1>Test</h1>

Welcome <?php echo $_POST["username"]; ?><br>
Email address: <?php echo $_POST["password"]; ?><br>

<?php
 Server: carpl123.database.windows.net,1433 \r\nSQL Database: myDB\r\nUser Name: hungc\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:carpl123.database.windows.net,1433; 
 	Database = myDB\", \"hungc\", \"Elac0212\");\r\n   
 	 $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   
 	 	print( \"Error connecting to SQL Server.\" );\r\n   
 	 	die(print_r($e));\r\n}\r\n\r
 	 	SQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"hungc@carpl123\", \"pwd\" => \"Elac0212\", \"Database\" => \"myDB\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);\r\n
 	 	$serverName = \"tcp:carpl123.database.windows.net,1433\";\r\n
 	 	$conn = sqlsrv_connect($serverName, $connectionInfo);
if(!$conn)
{
	die("Fail" .mysqli_connect_error());
}
else
{
	system.out.println("success");
}

mysqli_close($conn);
?>

</body>
</html>