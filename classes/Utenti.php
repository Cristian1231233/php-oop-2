

<?php

require_once __DIR__ . '/NewInfo.php';

class Utenti{

    use NewInfo;

    private $name;
    private $surname;
    private $email;
    private $password;
    public $sconto;


    function __construct($_email, $_password, $_name, $_surname)
    {
        $this->email = $_email;
        $this->password = $_password;
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function setSconto($_sconto){
        $this -> sconto = $_sconto;
    }
    public function getSconto(){
       return $this -> sconto;
    }
}
