
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
		<title>Update_Programmes</title>
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
	$records=$size/3;
	//echo "<h1> $records </h1><br>";
	for($i=1;$i<=$records;$i++){

		$index1="year$i";
		$index2="no_programmes$i";
		$index3="no_of_beneficiary$i";
		

	

		$year[$i]=$_POST[$index1];
		$no_programmes[$i]=$_POST[$index2];
		$no_of_beneficiary[$i]=$_POST[$index3];
		

	
	}

	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	for($i=1;$i<=$records;$i++){

	$sql="UPDATE d_programmes set no_programmes=$no_programmes[$i],no_of_beneficiary=$no_of_beneficiary[$i] WHERE year='$year[$i]' ";

		if ($mysqli->query($sql) === TRUE) {
  			//	echo "<h1>Record updated successfully</h1><br>";
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

	$sql = "SELECT * FROM d_programmes";
	
	$result = $mysqli -> query($sql) 

	?>
	 <div class="login">    
<form id="login" action="update_d_programmes.php" method="POST">
	<table id="tb">
		<tr>
			<th>year</th>
			<th>no_programmes</th>
			<th>no_of_beneficiary</th>
			

			
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]"; ?> <input type="hidden" value="<?php echo "$row[0]";?>" name="year<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[1]";?>" name="no_programmes<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[2]";?>" name="no_of_beneficiary<?php echo "$i";?>"/>
				</td>
			

		
			
		
				
			</tr>
		

    	<?php
    	 $i++;  
  		}
  		?>
  		<tr>
  			<td colspan="3"><input type="submit" value=" --->  Update <--- " /></td>
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
