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

$sql = "CREATE DATABASE myDB";
if(mysqil_query($conn,$sql))
{
	echo "Database created successfully";
}
else
{
	echo "Error creating database: " . mysqli_error($conn);
}
echo $_POST["username"];
mysqli_close($conn);
?>

</body>
</html>