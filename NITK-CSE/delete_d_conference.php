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
		<title>Delete Conference</title>
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
	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}
	$size=sizeof($_POST);
	$i=0;
	$j=1;
	while($i<$size){
		$index="b".$j;
		if(isset($_POST[$index])){
			$arr[$i]=$_POST[$index];
			$i++;
		}
		$j++;

	}
	//$sql = "DELETE FROM nandyTest WHERE id='DHEERAJ' ";
	for($i=0;$i<$size;$i++){
		$sql = "DELETE FROM d_conference WHERE ID=$arr[$i] ";
		if ($mysqli->query($sql) === TRUE) {
  			//echo "Record deleted successfully<br>";
		} else {
  			echo "Error deleting record: " . $mysqli->error;
		}
	}
	
	//if ($result = $mysqli -> query($sql)) {
		
		
  		/*while ($row = $result -> fetch_row()) {
    		//printf ("%s (%s)\n", $row[0], $row[1]);
    		echo "<h3>$row[0] ------- $row[1] -------  $row[2] </h3>";
  		}*/
  		
  		
  //	$result -> free_result();
	//}
	

	$mysqli -> close();
	?>
	<?php
	$mysqli = new mysqli("localhost","root","","nandy");

		if ($mysqli -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  			exit();
		}

	$sql = "SELECT * FROM d_conference";
	
	$result = $mysqli -> query($sql) 

	?>
<form action="delete_d_conference.php" method="POST">
	<table id="tb">
		<tr>
			<th>ID</th>
			<th>Description</th>
			<th>Select to Delete</th>
		</tr>
		<?php
		$i=1;
  		while ($row = $result -> fetch_row()) {
  		?>
    		

			<tr>
				<td><?php echo "$row[0]";  ?></td>
			
			
				<td><?php echo "$row[1]";  ?></td>
			

				<td><input type="checkbox" value="<?php echo "$row[0]";  ?>"name="b<?php echo "$i";?>"/></td>
			</tr>
		

    	<?php
    	 $i++;  
  		}
  		?>
  		<tr>
  			<td colspan="3"><input type="submit" value=" --->  Delete <--- " /></td>
  		</tr>

  	</table>
  </form>
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
