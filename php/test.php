<html>
<body>

<h1>Test</h1>

Welcome <?php echo $_POST["username"]; ?><br>
Email address: <?php echo $_POST["password"]; ?><br>

<?php
Server: carpl123.database.windows.net,1433 \r\nSQL Database: myDB\r\nUser Name: hungc\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:carpl123.database.windows.net,1433; Database = myDB\", \"hungc\", \"{your_password_here}\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"hungc@carpl123\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"myDB\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);\r\n$serverName = \"tcp:carpl123.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);

$sql = "CREATE TABLE Users(name VARCHAR(30) NOT NULL,password VARCHAR(30) NOT NULL,PRIMARY KEY(name))";

?>



</body>
</html>

