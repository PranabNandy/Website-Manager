
<?php


session_start();


    if(!isset($_SESSION['username'])){
       
        //session_destroy();
        header("Location:login.php");
    }
   

?>


<!DOCTYPE html>
<html>
<head>
		<title>Update_Home Table</title>
</head>
<link rel="stylesheet" href="./view.css?v=<?php echo time();?>" />
<body>
        <div class="d_topmost" style="background-color:rgb(29, 86, 124);height:3.3em;">
            		<div class="d_A" style="font-size:1.5em;font-weight:bold;margin-left:5px;">NATIONAL INSTITUTE OF TECHNOLOGY KARNATAKA, SURATHKAL MANGALORE</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept.</div>
        </div>
	<div class="main">
            <div class="top">
                <div class="navigation">
                    <div class="EXTRA">
                        <a href="logout.php" class="current">[ LOG OUT ]</a>
                    </div>
                </div>
            </div>
<h2 style="text-align: center;"><a href="login3.php" > ==== > Go To Dashboard Page  < ==== <a></a></h2>
	<?php
	$size=sizeof($_POST);
	$records=$size/2;
	//echo "<h1> $records </h1><br>";
	for($i=1;$i<=$records;$i++){

		$index1="section$i";
		$index2="desp$i";
		

		$section[$i]=$_POST[$index1];
		$desp[$i]=$_POST[$index2];
	
	}

	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	for($i=1;$i<=$records;$i++){

		$sql = "UPDATE home_table set  desp='$desp[$i]' WHERE section='$section[$i]' ";

		if ($mysqli->query($sql) === TRUE) {
  				//echo "<h1>Record updated successfully</h1><br>";
		} else {
  			echo "Error updating record: " . $mysqli->error;
		}
	}


	$mysqli -> close();
	?>



	<?php
	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	$sql = "SELECT * FROM home_table";
	
	$result = $mysqli -> query($sql) 

	?>
	 <div class="login">    
<form id="login" action="update_home_table.php" method="POST">
	<table id="tb">
		<tr>
			<th>section</th>
			<th>desp</th>
			
			
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]"; ?> <input type="hidden" value="<?php echo "$row[0]";?>" name="section<?php echo "$i";?>"/>
				</td>
				<td><input type="text" size="50" value="<?php echo "$row[1]";?>" name="desp<?php echo "$i";?>"/>
				</td>
				
			
		
				
			</tr>
		

    	<?php
    	 $i++;  
  		}
  		?>
  		<tr>
  			<td colspan="2"><input type="submit" value=" --->  Update <--- " /></td>
  		</tr>

  	</table>
  </form>
</div>
  	<?php
  	$result -> free_result();
	$mysqli -> close();
	?>
	<footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
        </footer>
</body>

</html>
