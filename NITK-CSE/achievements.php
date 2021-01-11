<?php
include "db_connect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>NITK SURATHKAL</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time();?>">
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
                        <a href="people.php" class="x">PEOPLE</a>
                    </div>
                    <div class="EXTRA">
                        <a href="research.php" class="x">RESEARCH</a>
                    </div>
                    <div class="EXTRA">
                        <a href="achievements.php" class="current">ACHIEVEMENTS</a>
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

            <div id="d_childs" style="margin-top:.5em;">
                 <button onclick="z()">INSTITUTIONAL ACHIEVEMENTS</button>
	    	 <button onclick="m()">FACULTY AWARDS</button>
	    	 <button onclick="n()">STUDENT ACHIEVEMENTS</button>
                
	         <div id="d_xy1" style="display:block;">
            		<?php 
            		       $query="select * from d_rank";
            		       $result=mysqli_query($connect,$query);
            		?>
            		<ul  style="width:100%;" cellpadding="5" cellspacing="0">
            			<h4 style="padding:1em;font-weight: bolder;margin-bottom:-0.8em;text-align:center;margin-top:-1em">INSTITUTIONAL ACHIEVEMENTS</h4>
            			<?php while($row=mysqli_fetch_array($result)):; ?>
            			
            			        <li style="padding:1em;"> Ranked 
            				     <?php print_r($row[1]); ?> ALL INDIA in 
            				     <?php print_r($row[2]); ?> By 
            				     <?php print_r($row[3]); ?> </li>
            			
            			<?php endwhile; ?>
            		</ul>
	         </div>
	         <div id="d_xy2" style="display:none;">
            		<?php 
            		       $query="select * from d_faculty";
            		       $result=mysqli_query($connect,$query);
            		?>
            		<table  style="width:100%;border:2px solid black" cellpadding="5" cellspacing="0">
            			<caption style="padding:1em;font-weight: bolder;">FACULTY AWARDS</caption>
            			<tr>
            				<th style="border:1px solid black">S.NO.</th>
            				<th style="border:1px solid black">NAME</th>
            				<th style="border:1px solid black">AWARD</th>
            			</tr>
            			<?php while($row=mysqli_fetch_array($result)):; ?>
            			<tr>
            			        <td style="border:1px solid black"> <?php print_r($row[0]); ?> </td>
            				<td style="border:1px solid black"> <?php print_r($row[1]); ?> </td>
            				<td style="border:1px solid black"> <?php print_r($row[2]); ?> </td>
            			</tr>
            			<?php endwhile; ?>
            		</table>
	         </div>
	         <div id="d_xy3" style="display:none;">
            		<?php 
            		       $query="select * from d_student";
            		       $result=mysqli_query($connect,$query);
            		?>
            		<table  style="width:100%;border:2px solid black" cellpadding="5" cellspacing="0">
            			<caption style="padding:1em;font-weight: bolder;">STUDENT ACHIEVEMENTS</caption>
            			<tr>
            				<th style="border:1px solid black">S.NO.</th>
            				<th style="border:1px solid black">AWARD</th>
            			</tr>
            			<?php while($row=mysqli_fetch_array($result)):; ?>
            			<tr>
            			        <td style="border:1px solid black"> <?php print_r($row[0]); ?> </td>
            				<td style="border:1px solid black"> <?php print_r($row[1]); ?> </td>
            			</tr>
            			<?php endwhile; ?>
            		</table>
	         </div>
	         
	    </div>

        </div>
        
        <script>
        	function z(){
        		document.getElementById("d_xy1").style.display="block";
        		document.getElementById("d_xy2").style.display="none";
        		document.getElementById("d_xy3").style.display="none";
        	}
        	function m(){
        		document.getElementById("d_xy1").style.display="none";
        		document.getElementById("d_xy2").style.display="block";
        		document.getElementById("d_xy3").style.display="none";
        	}
        	function n(){
        		document.getElementById("d_xy1").style.display="none";
        		document.getElementById("d_xy2").style.display="none";
        		document.getElementById("d_xy3").style.display="block";
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
