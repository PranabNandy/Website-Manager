<?php

$sname="localhost";
$uname="root";
$password="";

$db_name="nandy";

$connect=mysqli_connect($sname,$uname,$password,$db_name);

if(!$connect){
    echo "connection failed";
}
