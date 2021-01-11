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
                        <a href="program.php" class="current">PROGRAMME</a>
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
        <?php 
            $query="select * from program_table where program_name='BTech';";
            $result=mysqli_query($connect,$query);
            while($row1 = mysqli_fetch_array($result))
            {
                 $btech=$row1['program_desp']."<h3 class='v_heading'>Programme Educational Objectives (PEOs)</h3>".$row1['program_objective']."<h3 class='v_heading'>Programme Outcomes(POs)</h3>".$row1['program_outcome'];
            }
        ?>        
        
        <?php 
            $query="select * from program_table where program_name='MTech';";
            $result=mysqli_query($connect,$query);
            $mtech="<ul>";
            while($row1 = mysqli_fetch_array($result))
            {
                $mtech=$row1['program_desp']."<h3 class='v_heading'>Programme Educational Objectives (PEOs)</h3>".$row1['program_objective']."<h3 class='v_heading'>Programme Outcomes(POs)</h3>".$row1['program_outcome'];
            }
        ?>
        
        <button onclick="myFunction1()" style="color:red;margin-top:.5em;">UNDERGRADUATE</button>
        <button onclick="myFunction2()" style="color:red;">POSTGRADUATE</button>
        <div style="width: 100%;" id="reddiv">
            <h3 class="v_heading">B.Tech</h3>
            <?php echo $btech ?>
        </div>
        <div style="display:none; width: 100%;" id="yellowdiv">
            <h3 class="v_heading">M.Tech</h3>
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
