<?php


session_start();

session_destroy();

//header("location:form.php");
header("Location:login.php");

?>




<!DOCTYPE html>
<html>
<head>
		<title>PHP Demo</title>
</head>
<body>
	<?php

	

	$user='root';
	$pass='';
	$db='nandy';
	$con=new mysqli('localhost',$user,$pass,$db);

	if(!$con){
		echo "<h1>connection failed</h1>";
	}
	else {

		echo "<h1>Conncected </h1>";
		


	}

	//mysqli_close($con);
	$con->close();
	
	?>
</body>

</html>

