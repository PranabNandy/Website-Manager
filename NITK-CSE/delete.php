
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
		<title>Delete</title>
</head>
<link rel="stylesheet" href="./style.css?v=<?php echo time();?>" />
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
	<a href="delete_course.php" >Delete Course<a></a></br>
	<a href="delete_program.php" >Delete Program<a></a></br>
	<a href="delete_home_table.php" >Delete Home Table<a></a></br>
	<a href="delete_d_workshops.php" >Delete Workshops<a></a></br>
    <a href="delete_d_student.php" >Delete Student Award<a></a></br>
    
    <a href="delete_d_rank.php" >Delete Different Rank<a></a></br>
    
    <a href="delete_d_area.php" >Delete Course Code<a></a></br>
    

    <a href="delete_d_publication_year.php" >Delete Publication<a></a></br>
    <a href="delete_h_faculty.php" >Delete Faculty<a></a></br>
    <a href="delete_d_publication_areas.php" >Delete Publication Areas<a></a></br>
      <a href="delete_d_conference.php" >Delete Conference<a></a></br>
      <a href="delete_d_programmes.php" >Delete Programmes<a></a></br>

      <footer class="d_topmost" style="margin-top:2em;background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
</footer> 
</body>

</html>
