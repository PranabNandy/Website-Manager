
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
		<title>Update_Course</title>
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
	$records=$size/4;
	//echo "<h1> $records </h1><br>";
	for($i=1;$i<=$records;$i++){

		$index1="ID$i";
		$index2="All_India$i";
		$index3="In_w$i";
		$index4="By_w$i";

	

		$ID[$i]=$_POST[$index1];
		$All_India[$i]=$_POST[$index2];
		$In_w[$i]=$_POST[$index3];
		$By_w[$i]=$_POST[$index4];

	
	}

	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	for($i=1;$i<=$records;$i++){

	$sql="UPDATE d_rank set All_India='$All_India[$i]',In_w='$In_w[$i]',By_w='$By_w[$i]' WHERE ID=$ID[$i] ";

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

	$sql = "SELECT * FROM d_rank";
	
	$result = $mysqli -> query($sql) 

	?>
	 <div class="login">    
<form id="login" action="update_d_rank.php" method="POST">
	<table id="tb">
		<tr>
			<th>ID</th>
			<th>All_India</th>
			<th>In_w</th>
			<th>By_w</th>

			
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]"; ?> <input type="hidden" value="<?php echo "$row[0]";?>" name="ID<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[1]";?>" name="All_India<?php echo "$i";?>"/>
				</td>
				<td><input type="text" value="<?php echo "$row[2]";?>" name="In_w<?php echo "$i";?>"/>
				</td>
				<td> <input type="text" value="<?php echo "$row[3]";?>" name="By_w<?php echo "$i";?>"/>
				</td>

		
			
		
				
			</tr>
		

    	<?php
    	 $i++;  
  		}
  		?>
  		<tr>
  			<td colspan="5"><input type="submit" value=" --->  Update <--- " /></td>
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
