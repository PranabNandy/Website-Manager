<?php
require_once('db_connect.php');
session_start();
if(isset($_POST['submit']) && isset($_SESSION['username']))
{
    $query="update h_faculty set h_name='".$_POST['name']."', h_email='".$_POST['email']."', h_date='".$_POST['exp']."', qualification='".$_POST['qual']."' where faculty_id='".$_SESSION['user_id']."'";
    mysqli_query($connect,$query);
    header("location:profile.php");
}
else
{
    header("location:login.php");
}
?>