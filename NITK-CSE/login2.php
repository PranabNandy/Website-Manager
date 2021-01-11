<?php
session_start();
$sname="localhost";
$uname="root";
$password="";
$db_name="nandy";

$connect=mysqli_connect($sname,$uname,$password,$db_name);

if(!$connect){
    echo "<h1>connection failed</h1>";
}
else {
    $query="select * from Admin where username='".$_POST['username']."' and pass='".$_POST['pass']."'";
    $result=mysqli_query($connect,$query);
    if($result=mysqli_fetch_assoc($result))
    {
        $_SESSION['username']=$_POST['username'];
        header("location:login3.php");
    }
    else
    {
        $query="select faculty_id from h_faculty where username='".$_POST['username']."' and password='".$_POST['pass']."'";
        $result=mysqli_query($connect,$query);
        if($result=mysqli_fetch_assoc($result))
        {
            $_SESSION['username']=$_POST['username'];
            $_SESSION['user_id']=$result['faculty_id'];
            header("location:profile.php");
        }
        else
        {
            header("Location: login.php?uname=" . $_POST['username']);
        }
    }
}
$con->close();
?> 