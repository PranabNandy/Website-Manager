
<?php
session_start();
    if(!isset($_SESSION['username'])){
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
		<title>Update_Course</title>
</head>
<link rel="stylesheet" href="view.css?v=<?php echo time();?>" />
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
	$records=$size/8;
	//echo "<h1> $records </h1><br>";
	for($i=1;$i<=$records;$i++){

		$index1="course_name$i";
		$index2="program_name$i";
		$index3="course_sem$i";
		$index4="course_cat$i";

		$index5="credit$i";
		$index6="course_content$i";
		$index7="reference$i";
		$index8="department$i";

		$course_name[$i]=$_POST[$index1];
		$program_name[$i]=$_POST[$index2];
		$course_sem[$i]=$_POST[$index3];
		$course_cat[$i]=$_POST[$index4];

		$credit[$i]=$_POST[$index5];
		$course_content[$i]=$_POST[$index6];
		$reference[$i]=$_POST[$index7];
		$department[$i]=$_POST[$index8];
	}

	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	for($i=1;$i<=$records;$i++){

		$sql = "UPDATE course_table set  program_name='$program_name[$i]',course_sem=$course_sem[$i],course_cat='$course_cat[$i]',credit='$credit[$i]',course_content='$course_content[$i]', reference='$reference[$i]',department='$department[$i]' WHERE course_name='$course_name[$i]' ";

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

	$sql = "SELECT * FROM course_table";
	
	$result = $mysqli -> query($sql) 

	?>
	 <div class="">    
<form action="update_course.php" method="POST">
	<table width="100%" id="tb">
		<tr>
			<th>course_name</th>
			<th>program_name</th>
			<th>course_sem</th>
			<th>course_cat</th>

			<th>credit</th>
			<th>course_content</th>
			<th>reference</th>
			<th>department</th>
			
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]"; ?> <input type="hidden" value="<?php echo "$row[0]";?>" name="course_name<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[1]";?>" name="program_name<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[2]";?>" name="course_sem<?php echo "$i";?>"/>
				</td>
				<td> <input type="text" value="<?php echo "$row[3]";?>" name="course_cat<?php echo "$i";?>"/>
				</td>

				<td> <input type="text" value="<?php echo "$row[4]";?>" name="credit<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[5]";?>" name="course_content<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[6]";?>" name="reference<?php echo "$i";?>"/>
				</td>
				<td> <input type="text" value="<?php echo "$row[7]";?>" name="department<?php echo "$i";?>"/>
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
