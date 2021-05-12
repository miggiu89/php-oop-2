<?php
require_once 'User.php';
require_once 'Employee.php';

$user_1 = new Employee('Pippo','Rossi','cen7dcuc88',30);
var_dump($user_1);
try {
    echo $user_1->sconto_abbonamento;
} catch (Exception $e) {
    echo $e->getMessage();
}