<?php

    ini_set('display_errors', 1);

    class User{
        public $id_user;
        public $nome_user;
        public $cognome_user;
        public $genere_user;
        public $anno_nascita_user;
        public $indirizzo_user;
        public $codice_fiscale_user;
        public $e_mail_user;
        public $nickname_user;
        private $password_user;

    }

    $utente1 = new User();
    var_dump($utente1);