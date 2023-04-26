<?php
$serverhost = "localhost";
$dbuser ="root";
$dbpassword ="";
$dbname="project1";
//create connection

$con = mysqli_connect($serverhost,$dbuser,$dbpassword,$dbname);
var_dump($con);
if(mysqli_connect_errno()){

    exit();
}

return true;


