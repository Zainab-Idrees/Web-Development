<?php
include 'BankAccount.php';
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: create_account.php");
    exit;
}

$name = $_SESSION['logged_in'];
$account = $_SESSION['accounts'][$name];
?>

<!DOCTYPE html>
<html>
<head>
<title>View Account</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <div class="card p-4 shadow">
        <h2 class="text-center">Account Details</h2>

        <p><strong>Name:</strong> <?= $account->getHolder(); ?></p>
        <p><strong>Balance:</strong> <?= $account->getBalance(); ?></p>

        <a href="dashboard.php" class="btn btn-secondary w-100">Back</a>
    </div>
</div>

</body>
</html>
