<?php

class Users extends DatabaseQueries
{
    const VIEW_PATH = 'Users/views/';

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    protected $hashedPassword;
    protected $dbObject;

    public function __construct()
    {
        parent::__construct();
        $this->id = -1;
        $this->name = '';
        $this->surname = '';
        $this->email = '';
        $this->hashedPassword = '';
    }

    public static function getAllUsersArray()
    {
        $sql = 'SELECT * FROM users';

        $result = DatabaseQueries::sqlQueryData($sql);

        return DatabaseQueries::getAllData($result);
    }

    public static function getUserById(int $id)
    {
        $sql = "SELECT * FROM users WHERE id={$id}";

        $result = DatabaseQueries::sqlQueryData($sql);

        return DatabaseQueries::getAllData($result);

    }

    public static function getUserByEmail(string $email)
    {

        $sql = "SELECT * FROM users WHERE email='{$email}'";

        $result = DatabaseQueries::sqlQueryData($sql);

        return DatabaseQueries::getAllData($result);

    }

    public function verifyUser($email, $password)
    {
        $email = DatabaseQueries::escapeString($email);
        $hashedPassword = $this->setHashedPassword(DatabaseQueries::escapeString($password));



    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Users
     */
    public function setName($name): \Users
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     * @return Users
     */
    public function setSurname($surname): \Users
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $pass
     * @return mixed
     */
    public function setHashedPassword($pass)
    {
        $options = ['cost' => 11];
        $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);
        $this->hashedPassword = $hashedPassword;

        return $this->hashedPassword;
    }

}
