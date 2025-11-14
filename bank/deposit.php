<?php
include 'BankAccount.php';
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: create_account.php");
    exit;
}

$name = $_SESSION['logged_in'];
$account = $_SESSION['accounts'][$name];
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = floatval($_POST['amount']);
    $message = $account->deposit($amount);
    $_SESSION['accounts'][$name] = $account;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Deposit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <div class="card p-4 shadow">
        <h2 class="text-center">Deposit Money</h2>

        <?php if ($message): ?>
            <div class="alert alert-info"><?= $message ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="number" name="amount" class="form-control mb-3" placeholder="Enter amount" required>
            <button class="btn btn-success w-100">Deposit</button>
        </form>

        <a href="dashboard.php" class="btn btn-secondary mt-3 w-100">Back</a>
    </div>
</div>

</body>
</html>
