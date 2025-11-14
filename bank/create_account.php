<?php
include 'BankAccount.php';
session_start();

if (!isset($_SESSION['accounts'])) {
    $_SESSION['accounts'] = [];
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['holder']);

    if (empty($name)) {
        $error = "Please enter your name!";
    } elseif (isset($_SESSION['accounts'][$name])) {
        $error = "Account already exists!";
    } else {
        $_SESSION['accounts'][$name] = new BankAccount($name);
        $_SESSION['logged_in'] = $name;
        header("Location: dashboard.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <div class="card p-4 shadow">
        <h2 class="text-center">Create Account</h2>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="holder" class="form-control mb-3" placeholder="Enter your name" required>
            <button class="btn btn-primary w-100">Create Account</button>
        </form>
    </div>
</div>

</body>
</html>
