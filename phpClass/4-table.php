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

// create table SQL query
$sql = "CREATE TABLE `User1`(
    `ID` INT(15) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(12) NOT NULL,
    `ROllno` INT(11) NOT NULL,
    PRIMARY KEY (`ID`)
)";

// execute query
$result = mysqli_query($conn, $sql);

// check table creation
if ($result) {
    echo "Table created!";
} else {
    echo "Table NOT created! Error: " . mysqli_error($conn);
}

?>
