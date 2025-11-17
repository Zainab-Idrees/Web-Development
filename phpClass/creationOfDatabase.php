<!-- CRUD -->

<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect($servername,$username,$password);

// create a database
$sql = "CREATE DATABASE tuba";
// To execute query
// mysqli_query($conn,$sql);
// store query in variable
$result = mysqli_query($conn,$sql);
// to print query type 
echo"The value holding" . var_dump($result);
?>