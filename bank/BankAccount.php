<?php

class BankAccount {
    private $holder;
    private $balance;

    public function __construct($holderName) {
        $this->holder = $holderName;
        $this->balance = 0; // Always start from 0
    }

    public function getHolder() {
        return $this->holder;
    }

    public function getBalance() {
        return $this->balance;
    }

    // Deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            // $this->balance += $amount; 
            $this->balance = $this->balance + $amount;
            return "Deposit Successful!";
        }
        return "Deposit must be greater than 0!";
    }

    // Withdraw money with 10% tax
    public function withdraw($amount) {
        $taxRate = 0.10;
        $tax = $amount * $taxRate;
        $total = $amount + $tax;

        if ($amount > 0 && $total <= $this->balance) {
            $this->balance -= $total;
            return "Withdrawn: $amount | Tax: $tax | Total Deducted: $total";
        }
        return "Insufficient Balance or Invalid Amount!";
    }
}
