<?php
session_start();

class BankAccount {
    private $holder;
    private $balance;

    public function __construct($holderName, $initialBalance = 0) {
        $this->holder = $holderName;
        $this->balance = $initialBalance;
    }

    public function getHolder() {
        return $this->holder;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            echo "<div class='alert alert-danger'>Invalid deposit amount!</div>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "<div class='alert alert-danger'>Insufficient balance!</div>";
        }
    }
}

// Initialize session for accounts
if (!isset($_SESSION['accounts'])) {
    $_SESSION['accounts'] = [];
}

// Handle account creation
if (isset($_POST['create'])) {
    $name = trim($_POST['holder']);
    $balance = (float)$_POST['initialBalance'];

    if (!isset($_SESSION['accounts'][$name])) {
        $_SESSION['accounts'][$name] = new BankAccount($name, $balance);
        echo "<div class='alert alert-success'>Account created successfully for $name!</div>";
    } else {
        echo "<div class='alert alert-warning'>Account already exists for $name!</div>";
    }
}

// Handle deposit
if (isset($_POST['deposit'])) {
    $name = trim($_POST['holder']);
    $amount = (float)$_POST['amount'];

    if (isset($_SESSION['accounts'][$name])) {
        $_SESSION['accounts'][$name]->deposit($amount);
        echo "<div class='alert alert-success'>Deposited $amount to $name’s account.</div>";
    } else {
        echo "<div class='alert alert-danger'>Account not found!</div>";
    }
}

// Handle withdrawal
if (isset($_POST['withdraw'])) {
    $name = trim($_POST['holder']);
    $amount = (float)$_POST['amount'];

    if (isset($_SESSION['accounts'][$name])) {
        $_SESSION['accounts'][$name]->withdraw($amount);
        echo "<div class='alert alert-info'>Withdrawn $amount from $name’s account.</div>";
    } else {
        echo "<div class='alert alert-danger'>Account not found!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Bank System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">🏦 Bank Account System</h2>

        <!-- Create Account Form -->
        <h4>Create Bank Account</h4>
        <form method="POST" class="mb-4">
            <input type="text" name="holder" class="form-control mb-2" placeholder="Enter Account Holder Name" required>
            <input type="number" name="initialBalance" class="form-control mb-2" placeholder="Enter Initial Balance" required>
            <button type="submit" name="create" class="btn btn-primary w-100">Create Account</button>
        </form>

        <!-- Deposit Form -->
        <h4>Deposit Money</h4>
        <form method="POST" class="mb-4">
            <input type="text" name="holder" class="form-control mb-2" placeholder="Enter Account Holder Name" required>
            <input type="number" name="amount" class="form-control mb-2" placeholder="Enter Deposit Amount" required>
            <button type="submit" name="deposit" class="btn btn-success w-100">Deposit</button>
        </form>

        <!-- Withdraw Form -->
        <h4>Withdraw Money</h4>
        <form method="POST" class="mb-4">
            <input type="text" name="holder" class="form-control mb-2" placeholder="Enter Account Holder Name" required>
            <input type="number" name="amount" class="form-control mb-2" placeholder="Enter Withdraw Amount" required>
            <button type="submit" name="withdraw" class="btn btn-danger w-100">Withdraw</button>
        </form>

        <!-- Display All Accounts -->
        <h4 class="mt-4">All Accounts</h4>
        <ul class="list-group">
            <?php
            if (!empty($_SESSION['accounts'])) {
                foreach ($_SESSION['accounts'] as $acc) {
                    echo "<li class='list-group-item'>
                            <strong>{$acc->getHolder()}:</strong> {$acc->getBalance()}
                          </li>";
                }
            } else {
                echo "<li class='list-group-item'>No accounts created yet.</li>";
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>
