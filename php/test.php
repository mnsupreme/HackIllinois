<html>
<body>

<h1>Test</h1>

Welcome <?php echo $_POST["username"]; ?><br>
Email address: <?php echo $_POST["password"]; ?><br>

<?php
$servername = "carpl123.database.windows.net";
$username = "hungc";
$password = "Elac0212";

$conn=new mysqil($servername,$username,$password);

if($conn -> connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE TABLE Users(name VARCHAR(30) NOT NULL,password VARCHAR(30) NOT NULL,PRIMARY KEY(name))";

?>



</body>
</html>

