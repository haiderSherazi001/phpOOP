<?php
// Task: Build a “Bank Account” Class
// Requirements
// Create a class called BankAccount.
// The class should have:
// A private property $balance.
// A constructor that sets an initial balance.
// Add methods:
// deposit($amount)
// withdraw($amount)
// getBalance()
// Add logic so:
// You cannot withdraw more than you have.
// Deposit and withdraw amounts must be positive.
// Bonus (optional)
// Add an AccountHolder property and pass the name when creating the object.
// Add a method printSummary() that displays something like:
// Account holder: John
// Balance: 1200

class BankAccount{
    private $balance;
    private $accountHolder;
    public function __construct($accountHolder, $balance = 0){
        $this->balance = $balance;
        $this->accountHolder = $accountHolder;
    }
    public function deposit($amount){
        if($amount<=0){
            echo "Please enter valid amount...!<br>";
            return;
        }
        $this->balance = $amount;
    }
    public function withdraw($amount){
        if($amount<=0){
            echo "Please enter valid amount...!<br>";
            return;
        }
        if($this->balance < $amount){
            echo "Insufficient Balance!<br>";
            return;
        }
        $this->balance = $this->balance - $amount;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function printSummary(){
        echo "Account Holder: $this->accountHolder<br>";
        echo "Balance: $this->balance<br>";
    }
}

$usr1 = new BankAccount("Sayyad Ali Haider","320,000");
$usr1->printSummary();
?>