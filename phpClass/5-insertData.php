<?php
// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "zainab";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
    die("Sorry we failed to connect");
} else {
    echo "Database connected <br>";
}
//  command programatically

// insert data in MySQL by using mysqli
// $sql = "INSERT INTO `user3` (`ID`, `name`, `ROllno`) VALUES (NULL, 'sadia', '123')";
// $result = mysqli_query($conn , $sql);
// if(!$result){
//     echo"data not entered";
// }
// else{
//     echo"data entered";
// }


// variables

// $name = "Afreen";
// $Rollno = 12344;
// $sql = "INSERT INTO `user3` (`ID`, `name`, `ROllno`) VALUES (NULL, '$name', '$Rollno')";
// $result = mysqli_query($conn , $sql);
// if(!$result){
//     echo"data not entered";
// }
// else{
//     echo"data entered";
// }


// data from user input

$name = $_POST['name'];
$Rollno = $_POST['rollno'];
$sql = "INSERT INTO `user3` (`ID`, `name`, `ROllno`) VALUES (NULL, '$name', '$Rollno')";
$result = mysqli_query($conn , $sql);
if(!$result){
    echo"data not entered";
}
else{
    echo"data entered";
}
?>