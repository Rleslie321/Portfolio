<?php

// $host = "localhost";
// $user = "robert";
// $password = "MyPassword!3";
// $myDB = "feedback";
$con = mysqli_connect('localhost', 'robexhrv_user', 'OLm;zJWg%#;5', 'robexhrv_feedback','3306');

// mysqli_select_db($con, "feedback");

if(!$con){
    die("Connection Error: ".mysqli_connect_error());
}


?>