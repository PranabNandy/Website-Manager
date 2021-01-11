<?php


session_start();


    if(!isset($_SESSION['username'])){
       
        //session_destroy();
        header("Location:login.php");
    }
   

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Insert Course</title>
        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    </head>
    <body>
    <div class="d_topmost" style="background-color:rgb(29, 86, 124);height:3.3em;">
            		<div class="d_A" style="font-size:1.5em;font-weight:bold;margin-left:5px;">NATIONAL INSTITUTE OF TECHNOLOGY KARNATAKA, SURATHKAL MANGALORE</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept.</div>
        </div> 
        <div class="main">
            <div class="top">
                <div class="navigation">
                    <div class="EXTRA">
                        <a href="logout.php" class="current">[ LOG OUT ]</a>
                    </div>
                </div>
            </div>
    <h2 style="text-align: center;"><a href="login3.php" > ==== > Go To Dashboard Page  < ==== <a></a></h2>
             <div >    
                <br><br> 
    <?php
    $size=sizeof($_POST);
    /*if($size!=8){
    	 header("Location: insert_course.php?uname=" . $username . "&pw=" . $pass);
    }*/
    $records=$size;
    //echo "<h1> $records </h1><br>";
    for($i=1;$i<=1;$i++){

        $index1="course_name";
        $index2="program_name";
        $index3="course_sem";
        $index4="course_cat";

        $index5="credit";
        $index6="course_content";
        $index7="reference";
        $index8="department";

        $course_name[$i]=$_POST[$index1];
        $program_name[$i]=$_POST[$index2];
        $course_sem[$i]=$_POST[$index3];
        $course_cat[$i]=$_POST[$index4];

        $credit[$i]=$_POST[$index5];
        $course_content[$i]=$_POST[$index6];
        $reference[$i]=$_POST[$index7];
        $department[$i]=$_POST[$index8];
    }

    $mysqli = new mysqli("localhost","root","","nandy");

        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

    for($i=1;$i<=1;$i++){

        $sql = "INSERT INTO course_table Values  ('$course_name[$i]','$program_name[$i]',$course_sem[$i],'$course_cat[$i]','$credit[$i]','$course_content[$i]','$reference[$i]','$department[$i]')";
        
        if ($mysqli->query($sql) === TRUE) {
                echo "<h1>Record Inserted successfully</h1><br>";
                $link_address="insert_course.php";
                echo '<h2><a href="'.$link_address.'">Insert More Records</a></h2>';
               // echo "Insert More Records";
        } else {
            echo "<h1>Records with the given key already Exist! </h1><br>";
            $link_address="insert_course.php";
                 echo '<h2><a href="'.$link_address.'">Please Insert New Records</a></h2>';
        }
    }


    $mysqli -> close();
    ?>
<footer class="d_topmost" style="background-color:rgb(29, 86, 124);height:9em;">
        		<div style="font-size:1.5em;font-weight:bold;margin-left:5px;">CONTACT US</div>
            		<div class="d_A" style="font-size:1em;font-weight:bold;margin-left:5px;">Dr. Alwyn Roshan Pais(HOD)</div>
            		<div class="d_B" style="margin-left:5px;">Computer Science & Engineering Dept</br> P.O. Srinivasnagar, Mangalore-575025</br>Karnataka India.</div>
            		<div style="margin-left:5px;">HOT line: +91-0824-2474053</div>
        </footer>

    </body>
</html>