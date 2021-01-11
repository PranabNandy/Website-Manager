<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Welcome Page</title>    
    <link rel="stylesheet" type="text/css" href="css/style1.css?v=<?php echo time();?>">    
</head>    
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
   
            <?php
            if(isset($_SESSION['activesession']) && isset($_SESSION['username'])){
                echo "<h3>You already Logged in </h3> ";
            }
             echo "<h2>Welcome Admin </h2> ";
             $link_address="update.php";
             echo '<h2><a href="'.$link_address.'">Update</a>  </h2> ';
             $link_address2="insert.php";
             echo '<h2><a href="'.$link_address2.'">Insert</a>  </h2>';
             $link_address3="delete.php";
             echo '<h2> <a href="'.$link_address3.'">Delete</a> </h2>';
    
    ?> 
</div>  
<footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
</footer>  
</body>    
</html>