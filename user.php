<?php

class User {
    protected $id;
    public $nome;
    public $cognome;
    public $email;
    public $username;
    protected $password;
    
    public function __construct($_nome,$_cognome,$_password){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->password = $_password;
    }
}