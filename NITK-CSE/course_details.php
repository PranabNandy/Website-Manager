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
                        <a href="index.php" class="x">HOME</a>
                    </div>
                    <div class="EDUCATION">
                        <a href="program.php" class="x">PROGRAMME</a>
                    </div>   
                    <div class="SKILLS">
                        <a href="course.php" class="current">COURSES</a>
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
        <?php
            if(@$_GET['sub']==true)
            {
                $query="select * from course_table where course_name='".$_GET['sub']."';";
                $result=mysqli_query($connect,$query);
                while($row1 = mysqli_fetch_array($result))
                {
        ?>
        <h3 class="v_heading">Course Name : </h3><?php echo $row1['course_name'] ?>
        <br>
        <h3 class="v_heading">Program : </h3><?php echo $row1['program_name'] ?>
        <br>
        <h3 class="v_heading">Semester : </h3><?php echo $row1['course_sem'] ?>
        <br>
        <h3 class="v_heading">Category : </h3><?php echo $row1['course_cat'] ?>
        <br>
        <h3 class="v_heading">Credit : </h3><?php echo $row1['credit'] ?>
        <br>
        <h3 class="v_heading">Content : </h3><?php echo $row1['course_content'] ?>
        <br>
        <h3 class="v_heading">Reference : </h3><?php echo $row1['reference'] ?>
        <br>
        <h3 class="v_heading">Department : </h3><?php echo $row1['department'] ?>
        <?php
                }
            }
            else
            {
                header("location:course.php");
            }
        ?> 
        <footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
        </footer>
    </body>
</html>
