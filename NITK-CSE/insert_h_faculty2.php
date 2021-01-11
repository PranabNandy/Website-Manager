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
    $records=$size;
    //echo "<h1> $records </h1><br>";
    for($i=1;$i<=1;$i++){

        $index1="faculty_id";
        $index2="h_name";
        $index3="h_email";
        $index4="h_date";

        $index5="h_image";
        $index6="qualification";
        $index7="category";

        $index8="username1";
        $index9="password";
        

        //$faculty_id[$i]=$_POST[$index1];
        $h_name[$i]=$_POST[$index2];
        $h_email[$i]=$_POST[$index3];
        $h_date[$i]=$_POST[$index4];

        $h_image[$i]=$_FILES[$index5];
        $qualification[$i]=$_POST[$index6];
        $category[$i]=$_POST[$index7];

        $username1[$i]=$_POST[$index8];
        $password[$i]=$_POST[$index9];
      
    }


     $filename = $_FILES['h_image']['name']; 
    $tempname = $_FILES['h_image']['tmp_name'];     
        $folder = '/opt/lampp/htdocs/imup/'.$filename;

        //move_uploaded_file($tempname, $folder); 
        //      $msg = "Image uploaded successfully"; 
        
        move_uploaded_file($tempname, $folder); 


    $mysqli = new mysqli("localhost","root","","nandy");

        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

    for($i=1;$i<=1;$i++){

      $ans='/opt/lampp/htdocs/imup/'.$filename;


        $sql = "INSERT INTO h_faculty (h_name,h_email,h_date,h_image,qualification,h_category,username,password) Values  ('$h_name[$i]','$h_email[$i]','$h_date[$i]',LOAD_FILE('$ans'),'$qualification[$i]','$category[$i]','$username1[$i]','$password[$i]')";




        if ($mysqli->query($sql) === TRUE) {
                echo "<h1>Record Inserted successfully</h1><br>";
                $link_address="insert_h_faculty.php";
                echo '<h2><a href="'.$link_address.'">Insert More Records</a></h2>';
               // echo "Insert More Records";
        } else {
            echo "<h1>Records with the given key already Exist! <br>  or <br> Your have not entered all the entry </h1><br>";
            $link_address="insert_h_faculty.php";
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