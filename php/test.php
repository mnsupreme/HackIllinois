<html>
<body>

<h1>Test</h1>

Welcome <?php echo $_POST["username"]; ?><br>
Email address: <?php echo $_POST["password"]; ?><br>

<?php
$conn = mysqli_connect(tcp:carpl123.database.windows.net,hungc,Elac0212)
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

