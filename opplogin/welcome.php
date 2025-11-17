<?php
session_start();

if (!isset($_SESSION['first_name'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['first_name']; ?> </h2>

<a href="logout.php">Logout</a>

</body>
</html>
