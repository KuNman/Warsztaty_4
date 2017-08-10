<?php

require_once '../../DatabaseQueries.php';

class Users extends DatabaseQueries
{

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    protected $hashedPassword;

    function __construct($id, $name, $surname, $email, $hashedPassword)
    {
        $this->id = -1;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->hashedPassword = $hashedPassword;
    }

    public static function getAllUsersObject()
    {
        $sql = "SELECT * FROM users";
        return DatabaseQueries::sqlQueryData($sql);
    }

    public static function getUserById(int $id)
    {

    }

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getSurname()
    {
        return $this->surname;
    }

    function setSurname($surname)
    {
        $this->surname = $surname;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    public function setHashedPassword($pass)
    {
        $options = ['cost' => 11];
        $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);
        $this->hashedPassword = $hashedPassword;
    }

}
