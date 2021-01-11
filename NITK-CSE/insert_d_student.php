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
        <title>Insert Student Award </title>
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
                if(isset($_GET['uname']) && isset($_GET['pw']))
                {
                     echo "<h2>Please Enter all the entry</h2>";
                }


                ?> 
                <br><br> 
    <form  method="POST" action="insert_d_student2.php">    
        <table><tr><b> S.No. ---------
            
        <input type="text" name="S" >    
        </tr><br>   <br>  
        <tr>Award ---------     
        
           
        <input type="text" name="Award" >    
        </tr><br><br>

        
           
        <br><br>    
        <input type="submit" name="log"  value=" ----> INSERT <----">       
        <br><br>    
           
         
        <br><br>
    </table>    
    </form>     

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