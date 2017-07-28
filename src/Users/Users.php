<?php

//require_once '../General.php';

class Users extends General {

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    protected $hashedPassword;

    function __construct($id, $name, $surname, $email, $hashedPassword) {
        $this->id = -1;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->hashedPassword = $hashedPassword;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getEmail() {
        return $this->email;
    }

    function getHashedPassword() {
        return $this->hashedPassword;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    public function setHashedPassword($pass) {
        $options = ['cost' => 11];
        $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);
        $this->hashedPassword = $hashedPassword;
    }

}
