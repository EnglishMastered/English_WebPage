<?php

$host="localhost";
$username="id20089004_feedback";
$password="Mastered@2022";
$dbname="id20089004_feed";



$conn =mysqli_connect ($host, $username, $password, $dbname);

if (mysqli_connect_errno())
   echo "Connection could not established...".mysqli_connect_error ();
else 
   echo "Successfully....";

?>


