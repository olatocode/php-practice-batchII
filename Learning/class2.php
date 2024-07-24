<?php

class Football {
private $club;
private $manager;
  public function displayTeam() {
    echo $this->club . "" . $this->manager;
  }
}

// $myTeam = new Football("Liverpoolfc", "Arne Slot");
// $myTeam->displayTeam();

// class Bank {
//   public $accountNumber;
//   public $amount;
//   public $balance;

//   public function deposit($amount) {
//    if ($amount >= 0) {
//      $this->amount = $amount;
//      $this->balance += $this->amount;
//      echo "My Account no is ". $this->accountNumber . " and my balance is " . $this->balance;
//    }
//   }
// }

// $myAccount = new Bank();
// $myAccount->accountNumber = 25;
// $myAccount->balance = 500;
// $myAccount->deposit(0);

  class Bank {
    public $accountNumber;
    public $amount;
    public $balance;
     
    public function __construct($accountNumber, $amount, $balance) {
      $this->accountNumber = $accountNumber;
      $this->amount = $amount;
      $this->balance = $balance;
    }

    public function deposit() {
      if ($this->amount > 0) {
        $this->balance += $this->amount;
        echo "My Account no is ". $this->accountNumber . " and my balance is " . $this->balance;
      }else {
        echo "invalid amount";
      }  
    }
  }

  $myAccount = new Bank(25, 0, 500);
  $myAccount->deposit();

?>