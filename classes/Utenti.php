

<?php

class Utenti{

    private $name;
    private $surname;
    private $email;
    private $password;
    private $insertCreditCard;


    function __construct($_email, $_password, $_name, $_surname, $_insertCreditCard)
    {
        $this->email = $_email;
        $this->password = $_password;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->insertCreditCard = $_insertCreditCard;
    }
}
