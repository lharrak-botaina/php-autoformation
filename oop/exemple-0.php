
    /


    <?php

class BankAccount
{
    // The public keyword determines the visibility of a property.
    //  In this case, you can access the property from the outside of the class.
    public $accountNumber;
    public $balance;
}

$account = new BankAccount();
// To access a property, you use the object operator (->)
$account->$accountNumber = 1;
$account->$balance = 88;
echo "Your account Number is: " . $account->$balance;
?>