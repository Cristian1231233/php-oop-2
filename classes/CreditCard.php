

<?php

class CreditCard{

    private $code;
    private $name;
    private $cvv;

    function __construct($_code, $_name, $_cvv)
    {
        $this -> code = $this -> checkCode($_code);
        $this -> name = $_name;
        $this -> cvv = $_cvv;
    }

    private function checkCode($code){

        if(! is_int($code) ){
            throw new Exception('Questo codice deve essere un numero');
        }
        return $code;
    }

}