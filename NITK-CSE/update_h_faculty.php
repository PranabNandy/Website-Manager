
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
		<title>Update_Faculty</title>
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
	$records=$size/5;
	//echo "<h1> $records </h1><br>";
	for($i=1;$i<=$records;$i++){

		$index1="faculty_id$i";
		$index2="h_name$i";
		$index3="h_email$i";
		$index4="h_date$i";

		//$index5="h_image$i";
		$index6="qualification$i";
		

		$faculty_id[$i]=$_POST[$index1];
		$h_name[$i]=$_POST[$index2];
		$h_email[$i]=$_POST[$index3];
		$h_date[$i]=$_POST[$index4];

		//$h_image[$i]=$_POST[$index5];
		$qualification[$i]=$_POST[$index6];
	;
	}

	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	for($i=1;$i<=$records;$i++){

		$sql = "UPDATE h_faculty set  h_name='$h_name[$i]',h_email='$h_email[$i]',h_date='$h_date[$i]',qualification='$qualification[$i]' WHERE faculty_id=$faculty_id[$i] ";

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

	$sql = "SELECT * FROM h_faculty";
	
	$result = $mysqli -> query($sql) 

	?>
	 <div class="login">    
<form id="login" action="update_h_faculty.php" method="POST">
	<table id="tb">
		<tr>
			<th>faculty_id</th>
			<th>h_name</th>
			<th>h_email</th>
			<th>h_date</th>

			<th>h_image</th>
			<th>qualification</th>
			
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]"; ?> <input type="hidden" value="<?php echo "$row[0]";?>" name="faculty_id<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[1]";?>" name="h_name<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[2]";?>" name="h_email<?php echo "$i";?>"/>
				</td>
				<td> <input type="text" value="<?php echo "$row[3]";?>" name="h_date<?php echo "$i";?>"/>
				</td>
				<td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row[4] ).'"/>'; ?></td>
				
				
				<td><input type="text" value="<?php echo "$row[5]";?>" name="qualification<?php echo "$i";?>"/>
				</td>
				
			
		
				
			</tr>
		

    	<?php
    	 $i++;  
  		}
  		?>
  		<tr>
  			<td colspan="8"><input type="submit" value=" --->  Update <--- " /></td>
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
