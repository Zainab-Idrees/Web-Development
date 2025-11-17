<?php
include 'User1.php';
session_start();

$user1 = new User1();

$email = $_POST['email'];
$password = $_POST['password'];

$data = $user1->login($email, $password);

if ($data) {
    $_SESSION['first_name'] = $data['first_name'];
    header("Location: welcome.php");
} else {
    header("Location: wrong.php");
}
?>
