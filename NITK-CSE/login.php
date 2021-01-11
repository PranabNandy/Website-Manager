<!DOCTYPE html>    
<html>    
<head>    
    <title>Login</title>    
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
                        <a href="achievements.php" class="x">ACHIEVEMENTS</a>
                    </div>
                    <div class="EXTRA">
                        <a href="placement.php" class="x">PLACEMENTS</a>
                    </div>
                    <div class="EXTRA">
                        <a href="events.php" class="x">EVENTS</a>
                    </div>
                    <div class="EXTRA">
                        <a href="login.php" class="current">LOG IN</a>
                    </div>
                </div>
            </div>

    <h2>Login Page</h2>

    <?php
    if(isset($_GET['uname']))
    {
    echo "<h2>Invalid Username and Password</h2>";
    }
    session_start();
    if(isset($_SESSION['username']))
    {
        $_SESSION['activesession']='true';
        header("location:login3.php");
    }
  ?>
    <div class="login">    
    <form id="login" method="POST" action="login2.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" class="Uname" name="username" >    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" class="Pass" name="pass" >    
        <br><br>    
        <input type="submit" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
    </form>     

</div>  
<footer class="d_topmost" style="margin-top:2em;background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
</footer>  
</body>    
</html>