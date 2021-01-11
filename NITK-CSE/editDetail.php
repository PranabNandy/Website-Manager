<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="styleNew.css?v=<?php echo time();?>">
</head>
<body>
<div class="d_topmost" style="background-color:rgb(29, 86, 124);height:3.3em;">
            		<div class="d_A" style="font-size:1.5em;font-weight:bold;margin-left:5px;">NATIONAL INSTITUTE OF TECHNOLOGY KARNATAKA, SURATHKAL MANGALORE</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept.</div>
                    
        </div>
        <div class="top">
                <div class="navigation">
                <div class="EXTRA">
                        <a href="logout.php" class="current">[ LOG OUT ]</a>
                    </div>
                </div>

            </div>
<?php
require_once('db_connect.php');
session_start();
if(isset($_SESSION['username']))
{
    $query="select h_name, h_email, h_date, h_image, qualification from h_faculty where faculty_id='".$_SESSION['user_id']."'";
    $result=mysqli_query($connect,$query);
    if($result=mysqli_fetch_assoc($result))
    {
?>
<div class="formstyle">
    <form action="update_f_details.php" method="post">
        <label>Name :</label> <input type="text" name="name" value="<?php echo $result['h_name']; ?>"><br>
        <label>Email :</label> <input type="text" name="email" value="<?php echo $result['h_email']; ?>"><br>
        <label>Experiance :</label> <input type="text" name="exp" value="<?php echo $result['h_date']; ?>"><br>
        <label>Qualification :</label> <input type="text" name="qual" value="<?php echo $result['qualification']; ?>"><br>
        <input style="color:red; font-weight:bold; width:40%; align-self: center; padding:4px;margin-bottom:-10px;" type="submit" name="submit" value="Update">
    </form>
</div>
<?php
    }
?>
    <div>
       
    </div>
<?php
}
else
    {
        header("location: login.php");
    }
?>
 <footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;margin-top:2em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
        </footer> 
</body>
</html>