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
        <title>Insert Program 2</title>
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
               <?php
    $size=sizeof($_POST);
    $records=$size;
    /*if($size!=5){
         header("Location: insert_program.php?uname=" . $username . "&pw=" . $pass);
    }*/
    //echo "<h1> $records </h1><br>";
    for($i=1;$i<=1;$i++){

        $index1="program_id";
        $index2="program_name";
        $index3="program_desp";
        $index4="program_outcome";

        $index5="program_objective";
       

        $program_id[$i]=$_POST[$index1];
        $program_name[$i]=$_POST[$index2];
        $program_desp[$i]=$_POST[$index3];
        $program_outcome[$i]=$_POST[$index4];

        $program_objective[$i]=$_POST[$index5];
     
    }

    $mysqli = new mysqli("localhost","root","","nandy");

        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

    for($i=1;$i<=1;$i++){

        $sql = "INSERT INTO program_table Values  ($program_id[$i],'$program_name[$i]','$program_desp[$i]','$program_outcome[$i]','$program_objective[$i]')";

        if ($mysqli->query($sql) === TRUE) {
                echo "<h1>Record Inserted successfully</h1><br>";
                $link_address="insert_program.php";
                echo '<h2><a href="'.$link_address.'">Insert More Records</a></h2>';
               // echo "Insert More Records";
        } else {
            echo "<h1>Records with the given key already Exist! </h1><br>";
            $link_address="insert_program.php";
                echo '<h2><a href="'.$link_address.'">Please Insert New Records</a></h2>';        }
    }


    $mysqli -> close();
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