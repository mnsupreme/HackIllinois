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

$sql = "CREATE TABLE Users(name VARCHAR(30) NOT NULL,password VARCHAR(30) NOT NULL,PRIMARY KEY(name))";

?>



</body>
</html>

