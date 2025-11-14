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
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <div class="card p-4 shadow">
        <h2 class="text-center">Welcome <?= $name ?> </h2>
        <p class="text-center">Balance: <strong><?= $account->getBalance(); ?></strong></p>

        <div class="d-grid gap-2">
            <a href="deposit.php" class="btn btn-success">Deposit Money</a>
            <a href="withdraw.php" class="btn btn-danger">Withdraw Money</a>
            <a href="view_account.php" class="btn btn-info">View Account</a>
            <a href="logout.php" class="btn btn-secondary">Logout</a>
        </div>
    </div>
</div>

</body>
</html>
