

<?php

require_once __DIR__. '/Utenti.php';

class UtentiPremium extends Utenti{
    
    

    function __construct($_email, $_password, $_name, $_surname, $_insertCreditCard)
    {
        parent::__construct($_email, $_password, $_name, $_surname, $_insertCreditCard);
    }
    

}