<?php
    class BankAccount {
        private $accountNumber;
        private $balance;

        function __construct($accountNumber, $balance){
            $this->accountNumber = $accountNumber;
            $this->balance = $balance;
        }

        public function getAccountNumber(){
            return $this->accountNumber;
           

        }
    }

    $account = new BankAccount(1, 10);
    echo "Account number is: " . $account->getAccountNumber();
?>