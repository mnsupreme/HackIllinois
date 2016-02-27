<html>
<body>

<h1>Test</h1>

Welcome <?php echo $_POST["username"]; ?><br>
Email address: <?php echo $_POST["password"]; ?><br>

<?php
$servername = "13.75.43.109,13.75.44.92,23.97.74.106,168.63.141.7";
$username = "hungc@bgsu.edu";
$password = ".Elac0212";

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

mysqli_close($conn);
?>

</body>
</html>