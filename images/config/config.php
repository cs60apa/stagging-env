<?php
//host
$host = "localhost";

//dbname
$dbname ="devcircle";

//user
$user = "root";

//pass
$pass = "";

$conne = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

if($conn == true) {
    echo "success";
} else{
    echo "failed";
}

