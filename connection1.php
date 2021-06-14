<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'internship';
 
$link = mysqli_connect($servername,$username,$password,$db);

 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?> 