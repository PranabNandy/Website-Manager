<?php
    require_once('db_connect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>NITK SURATHKAL</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
        a:visited{
            color:blue;
        }
        </style>
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
            $query="select course_name from course_table where program_name='BTech';";
            $result=mysqli_query($connect,$query);
            $btech="<ul>";
            while($row1 = mysqli_fetch_array($result))
            {
                $btech=$btech."<li><a style='text-decoration: none;' href='course_details.php?sub=".$row1[0]."'>".$row1[0]."</a></li>";
            }
            $btech=$btech."</ul>";
        ?>        
        
        <?php 
            $query="select course_name from course_table where program_name='MTech';";
            $result=mysqli_query($connect,$query);
            $mtech="<ul>";
            while($row1 = mysqli_fetch_array($result))
            {
                $mtech=$mtech."<li><a style='text-decoration: none;' href='course_details.php?sub=".$row1[0]."'>".$row1[0]."</a></li>";
            }
            $mtech=$mtech."</ul>";
        ?>
        
        <button onclick="myFunction1()" style="color:red;margin-top:.5em;">BTECH</button>
        <button onclick="myFunction2()" style="color:red;">MTECH</button>
        <div style="width: 100%;" id="reddiv">
            <h2 class="v_heading">B.Tech</h2>
            <?php echo $btech ?>
        </div>
        <div style="display:none; width: 100%;" id="yellowdiv">
            <h2 class="v_heading">M.Tech</h2>
            <?php echo $mtech ?>
        </div>
        <script>
            function myFunction1() 
            {
                var x = document.getElementById("reddiv");
                x.style.display = "block";
                var y = document.getElementById("yellowdiv");
                y.style.display = "none";
            }
            function myFunction2() 
            {
                var x = document.getElementById("reddiv");
                x.style.display = "none";
                var y = document.getElementById("yellowdiv");
                y.style.display = "block";
            }
        </script>
        <footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
        </footer>
    </body>
</html>
