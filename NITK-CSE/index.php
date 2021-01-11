<?php
    require_once('db_connect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>NITK SURATHKAL</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="d_topmost" style="background-color:rgb(29, 86, 124);height:3.3em;">
            		<div class="d_A" style="font-size:1.5em;font-weight:bold;margin-left:5px;">NATIONAL INSTITUTE OF TECHNOLOGY KARNATAKA, SURATHKAL MANGALORE</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept.</div>
        </div>
        <div class="main">
            <div class="top">
                <div class="navigation">
                    <div class="ABOUT">
                        <a href="index.php" class="current">HOME</a>
                    </div>
                    <div class="EDUCATION">
                        <a href="program.php" class="x">PROGRAMME</a>
                    </div>   
                    <div class="SKILLS">
                        <a href="course.php" class="x">COURSES</a>
                    </div>
                    <div class="PROJECT">
                        <a href="people.php" class="x">PEOPLE</a>
                    </div>
                    <div class="EXTRA">
                        <a href="research.php" class="x">RESEARCH</a>
                    </div>
                    <div class="EXTRA">
                        <a href="achievements.php" class="x">ACHIEVEMENTS</a>
                    </div>
                    <div class="EXTRA">
                        <a href="placement.php" class="x">PLACEMENTS</a>
                    </div>
                    <div class="EXTRA">
                        <a href="events.php" class="x">EVENTS</a>
                    </div>
                    <div class="EXTRA">
                        <a href="login.php" class="x">LOG IN</a>
                    </div>
                </div>
            </div>            
        </div>
        <div style="padding-left: 50px; padding-right:10px;">
        <h2 class="v_heading">About the department</h2>
        <br>
        </div>
        <div style="width: 100%;">
            <div style="width: 50%;float: left;"> 
                <img src="images/v_im1.jpg" width="600" height="380" style="padding-left: 25px;">
            </div>
            <div style="margin-left: 55%; width :40%; text-align: justify;"> 
                <?php
                $query="select desp from home_table where section='about';";
                $result=mysqli_query($connect,$query);
                $row = mysqli_fetch_array($result);
                echo $row[0];
                ?>
            </div>
        </div>
        <div style="padding-left: 50px; padding-right:10px; padding-top:10px; clear:left">
        <h2 class="v_heading">Vision</h2>
        <?php
                $query="select desp from home_table where section='vision';";
                $result=mysqli_query($connect,$query);
                $row = mysqli_fetch_array($result);
                echo $row[0];
                ?>
        </div>
        <div style="padding-left: 50px; padding-right:50px; padding-top:10px; padding-bottom:30px; clear:left">
        <h2 class="v_heading">Mission</h2>
        <?php
                $query="select desp from home_table where section='mission';";
                $result=mysqli_query($connect,$query);
                $row = mysqli_fetch_array($result);
                echo $row[0];
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
