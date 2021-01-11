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
        <title>Insert Workshops</title>
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
    $records=$size;
    /*if($size!=2){
         header("Location: insert_d_publication_year.php?uname=" . $username . "&pw=" . $pass);
    }*/
    //echo "<h1> $records </h1><br>";
    for($i=1;$i<=1;$i++){

        $index1="year";
        $index2="no_of_publication";
   


        $year[$i]=$_POST[$index1];
        $no_of_publication[$i]=$_POST[$index2];
  
    }

    $mysqli = new mysqli("localhost","root","","nandy");

        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

    for($i=1;$i<=1;$i++){
        //echo "$section[$i] $desp[$i]";
        $sql = "INSERT INTO d_publication_year Values('$year[$i]',$no_of_publication[$i])";
        echo "";
        if ($mysqli->query($sql) === TRUE) {
                echo "<h1>Record Inserted successfully</h1><br>";
                $link_address="insert_d_publication_year.php";
                echo '<h2><a href="'.$link_address.'">Insert More Records</a></h2>';
               // echo "Insert More Records";
        } else {
            echo "<h1>Records with the given key already Exist! </h1><br>";
            $link_address="insert_d_publication_year.php";
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