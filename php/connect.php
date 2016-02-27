<html>
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


?>
</html>