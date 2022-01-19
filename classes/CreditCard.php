

<?php

class CreditCard{

    private $code;
    private $name;
    private $cvv;

    function __construct($_code, $_name, $_cvv)
    {
        $this -> code = $this -> checkCode($_code);
        $this -> name = $_name;
        $this -> cvv = $this -> checkCvv($_cvv);
    }

    private function checkCode($code){

        if(! is_int($code) || strlen($code) != 12){
            throw new Exception('Questo codice deve essere un numero');
        }
        return $code;
    }

    private function checkCvv($cvv){

        if(! is_int($cvv) || strlen($cvv) != 3){
            throw new Exception('Il cvv deve essere di 3 cifre');
        }
        return $cvv;
    }

    public function setCode($_code){
        $this -> code = $this -> checkCode($_code);
    }

    public function setCvv($_cvv){
        $this -> cvv = $this -> checkCvv($_cvv);
    }


    public function getCode(){
        return $this -> code;
    }

    public function getCvv(){
        return $this -> cvv;
    }

    

}