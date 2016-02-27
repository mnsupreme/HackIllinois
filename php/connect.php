<html>
<?php
$servername = "ftp://waws-prod-hk1-015.ftp.azurewebsites.windows.net";
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