<?php
include "db_connect.php";
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
            <div class="top">
                <div class="navigation">

                    <div class="ABOUT">
                        <a href="index.php" class="x">HOME</a>
                    </div>

                    <div class="EDUCATION">
                        <a href="program.php" class="x">PROGRAMME</a>
                    </div>  

                    <div class="SKILLS">
                        <a href="course.php" class="x">COURSES</a>
                    </div>

                    <div class="PROJECT">
                        <a href="people.php" class="current">PEOPLE</a>
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

            <div style="font-weight: bold;margin-top:2em;margin-left:40%"> LIST OF THE PROFESSORS </div>
        </div>
        <div id="flipper" class="flipper">
        <a href="professor.php" id="about" >PROFESSOR</a><br>
                <a href="adhoc.php" id="achievement" >ADHOC</a><br>
                <a href="staff.php" id="projects" >STAFF</a><br>
                <a href="projectstaff.php" id="education" >PROJECT STAFF</a>
              </div>


        
              <div  style=" width:40%; margin-left:300px;">
              <div style="font-weight: bold;margin-top:-2em;margin-left:-10%"> Project Staff</div>
<?php
$query="select	* from h_faculty where 	h_category='Project Staff' ; ";
$result=mysqli_query($connect,$query);
$teacher= "<ul>";
while($row1=mysqli_fetch_array($result))
{
$teacher=$teacher."<li style='list-style:none;'> <a style='text-decoration: none;margin-left:-19% ;font-weight: bold' href='faculty_details.php?sub=".$row1[0]."'>".$row1[1]."</a></li>";

}
$teacher=$teacher."</ul>";
echo $teacher;
?>
</div>

<div style="width:30% ; margin-left:700px">
<div style="font-weight: bold;margin-top:2em;margin-left:-10%">  Research Scholars</div>
<?php
$query="select	* from h_faculty where 	h_category='Research Scholars' ";
$result=mysqli_query($connect,$query);
$teacher= "<ul>";
while($row1=mysqli_fetch_array($result))
{
$teacher=$teacher."<li style='list-style:none;'><a style='text-decoration: none;margin-left:-19% ;font-weight: bold' href='faculty_details.php?sub=".$row1[0]."'>".$row1[1]."</a></li>";

}
$teacher=$teacher."</ul>";
echo $teacher;
?>
</div>
</div> 

<footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
        </footer>
    </body>
</html>

