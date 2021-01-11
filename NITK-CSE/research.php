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
                        <a href="research.php" class="current">RESEARCH</a>
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
	   
	    
	    <div id="d_childs" style="margin-top:.5em;">
	    	 <button onclick="z()">RESEARCH AREA</button>
	    	 <button onclick="m()">PROGRAMME AND BENEFICIARY</button>
	    	 <button onclick="n()">DEPARTMENT WISE PUBLICATIONS</button>
	    	 <button onclick="o()">PUBLICATIONS</button>
                 <div id="d_xy1" style="display:block;">
            		<?php 
            		       $query="select * from d_area";
            		       $result=mysqli_query($connect,$query);
            		?>
            		<table  style="width:50%;border:2px solid black" cellpadding="5" cellspacing="0">
            			<caption style="padding:1em;font-weight: bolder;">RESEARCH AREAS</caption>
            			<tr>
            				<th style="border:1px solid black">Code</th>
            				<th style="border:1px solid black">Research Area</th>
            			</tr>
            			<?php while($row=mysqli_fetch_array($result)):; ?>
            			<tr>
            			        <td style="border:1px solid black"> <?php print_r($row[0]); ?> </td>
            				<td style="border:1px solid black"> <?php print_r($row[1]); ?> </td>
            			</tr>
            			<?php endwhile; ?>
            		</table>
	         </div>
	         <div id="d_xy2" style="display:none;">
            		<?php 
            		       $query="select * from d_programmes";
            		       $result=mysqli_query($connect,$query);
            		?>
            		<table  style="width:50%;border:2px solid black" cellpadding="5" cellspacing="0">
            			<caption style="padding:1em;font-weight: bolder;">PROGRAMME AND BENEFICIARY</caption>
            			<tr>
            				<th style="border:1px solid black">Year</th>
            				<th style="border:1px solid black">Number of Programmes</th>
            				<th style="border:1px solid black">Number of Beneficiary</th>
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
            		       $query="select * from d_publication_areas";
            		       $result=mysqli_query($connect,$query);
            		?>
            		<table  style="width:50%;border:2px solid black" cellpadding="5" cellspacing="0">
            			<caption style="padding:1em;font-weight: bolder;">DEPARTMENT WISE PUBLICATIONS</caption>
            			<tr>
            				<th style="border:1px solid black">Area</th>
            				<th style="border:1px solid black">Number of Publication</th>
            			</tr>
            			<?php while($row=mysqli_fetch_array($result)):; ?>
            			<tr>
            			        <td style="border:1px solid black"> <?php print_r($row[0]); ?> </td>
            				<td style="border:1px solid black"> <?php print_r($row[1]); ?> </td>
            			</tr>
            			<?php endwhile; ?>
            		</table>
	         </div>
	         <div id="d_xy4" style="display:none;">
            			<?php 
            		       $query="select * from d_publication_year";
            		       $result=mysqli_query($connect,$query);
            		?>
            		<table  style="width:40%;border:2px solid black" cellpadding="5" cellspacing="0">
            			<caption style="padding:1em;font-weight: bolder;">PUBLICATIONS</caption>
            			<tr>
            				<th style="border:1px solid black">Year of Publications</th>
            				<th style="border:1px solid black">Number of Publication</th>
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
        		document.getElementById("d_xy4").style.display="none";
        	}
        	function m(){
        		document.getElementById("d_xy1").style.display="none";
        		document.getElementById("d_xy2").style.display="block";
        		document.getElementById("d_xy3").style.display="none";
        		document.getElementById("d_xy4").style.display="none";
        	}
        	function n(){
        		document.getElementById("d_xy1").style.display="none";
        		document.getElementById("d_xy2").style.display="none";
        		document.getElementById("d_xy3").style.display="block";
        		document.getElementById("d_xy4").style.display="none";
        	}
        	function o(){
        		document.getElementById("d_xy1").style.display="none";
        		document.getElementById("d_xy2").style.display="none";
        		document.getElementById("d_xy3").style.display="none";
        		document.getElementById("d_xy4").style.display="block";
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
