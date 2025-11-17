<?php
include 'User1.php';

$user1 = new User1();

$FirstName = $_POST['first_name'];
$LastName  = $_POST['last_name'];
$email     = $_POST['email'];
$password  = $_POST['password'];

if ($user1->register($FirstName, $LastName, $email, $password)) {
    header("Location: login.php");
} else {
    echo "Error: Something went wrong!";
}
?>
