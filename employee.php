<?php
class Employee extends User {
    public $eta;
    public $sconto_abbonamento;

    public function __construct($_nome,$_cognome,$_password,$_eta)
    {
        parent::__construct($_nome,$_cognome,$_password);
        $this->eta = $_eta;
    }

    public function setSconto($eta){
        if (!is_numeric($eta) && $eta < 18 && $eta > 80){
            throw new Exception('Is not a number');
        } else {
            $this->sconto_abbonamento = 50;
        }
    }

    public function getSconto(){
        return $this->sconto_abbonamento;
    }
}
