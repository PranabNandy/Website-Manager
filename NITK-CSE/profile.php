<?php
include "db_connect.php";
session_start();
if(!isset($_SESSION['user_id']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>NITK SURATHKAL</title>
        <link rel="stylesheet" href="style2.css?v=<?php echo time();?>">
    </head>
    <body>
    <div class="d_topmost" style="background-color:rgb(29, 86, 124);height:3.3em;">
            		<div class="d_A" style="font-size:1.5em;font-weight:bold;margin-left:5px;">NATIONAL INSTITUTE OF TECHNOLOGY KARNATAKA, SURATHKAL MANGALORE</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept.</div>
        </div>
        <div class="main">
            <div class="top" style="margin-bottom: 3em;">
                <div class="navigation">
                <div class="EXTRA">
                        <a href="logout.php" class="current">[ LOG OUT ]</a>
                    </div>
                </div>

            </div>
            <div style="margin-top: -1em;">
            <?php echo '<a style="text-decoration: none; border:1px solid #ada8a8; padding:0.5em; color:red; font-weight:bold; border-radius:4px;" href="editDetail.php">Edit Profile</a>';?></div>
              <div style="width: 100%;" >
              <div style="width:50%;margin-left:10%; text-align:center">

              <?php


$query="select *from h_faculty where faculty_id='".$_SESSION['user_id']."';";
$result=mysqli_query($connect,$query);
     while($row1=mysqli_fetch_array($result))
     {
?>
<h3> Name :</h3> <?php echo $row1['h_name']?>
<br>
<h3> Email :</h3> <?php echo $row1['h_email']?>
<br>
<h3> Date of joining :</h3> <?php echo $row1['h_date']?>
<br>

    <h3>Qualification:</h3><?php echo $row1['qualification']?>
<?php
}
?>




              </div>

              <div style="width: 50%; margin-left:50% ; ">
              <?php

$query="select *from h_faculty where faculty_id='".$_SESSION['user_id']."';";
$result=mysqli_query($connect,$query);
     while($row1=mysqli_fetch_array($result))
     {
?>
<h3> </h3> <?php echo'
    <tr>
         <td>
            <img src="data:image/jpg;base64 ,'.base64_encode($row1['h_image']).'" style="margin-top:-20em;margin-left:10em;width:250px;float:left;height:300px;border: 1.3pt solid;"/>
        </td>
    </tr>
';?>
<?php
}
?>
              </div>
              </div>

              <footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;margin-top:5em">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
        </footer>
    </body>
</html>