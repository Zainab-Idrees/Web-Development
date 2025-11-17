<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect($servername,$username,$password);

// if connection was not successful
// is($conn == false)
if(!$conn){
    echo "Sorry we failed to connect";
    exit();
}
else{
    echo "database connected";
}

?>