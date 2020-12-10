<?php

// $host = "localhost";
// $user = "robert";
// $password = "MyPassword!3";
// $myDB = "feedback";
$con = mysqli_connect('localhost', 'root', '', 'feedback','3307');

// mysqli_select_db($con, "feedback");

if(!$con){
    die("Connection Error: ".mysqli_connect_error());
}


?>