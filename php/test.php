<html>
<body>

<h1>Test</h1>

Welcome <?php echo $_POST["username"]; ?><br>
Email address: <?php echo $_POST["password"]; ?><br>

<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn=mysqli_connect($servername,$username,$password);
mysqli_select_db($con,"test");

if(!$conn)
{
	die("Connection failed: " . mysqli_error($con));
}
echo "Connected successfully";

$sql = "USE test

		INSERT INTO username (username,password)

		VALUES ($_POST["username"],$_POST["password"])";

?>



</body>
</html>

