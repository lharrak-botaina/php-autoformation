<?php

class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}

	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;

	}
}

    $account = new BankAccount;

    $account->accountNumber = 1;
    $account->balance = 100;

    $respons =  $account->withdraw(30);

    echo var_dump($respons);
    echo'<br>';
    echo 'rest in your account: '.  $account->balance;
    $account->deposit(200);
    
    echo'<br>';
    echo 'rest in your account: '.  $account->balance;

?>
