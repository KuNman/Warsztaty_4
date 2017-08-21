<?php
require_once '../../../DatabaseQueries.php';

class Users extends DatabaseQueries
{

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    protected $hashedPassword;
    protected $dbObject;

    function __construct()
    {
        parent::__construct();
        $this->dbObject = $this->getDbObjectInstantiation();
        $this->id = -1;
        $this->name = '';
        $this->surname = '';
        $this->email = '';
        $this->hashedPassword = '';
    }

    public static function getAllUsersArray()
    {
        $sql = "SELECT * FROM users";

        $result = DatabaseQueries::sqlQueryData($sql);

        $allUsersArray = DatabaseQueries::getAllData($result);

        return $allUsersArray;
    }

    public static function getUserById(int $id)
    {
        $sql = "SELECT * FROM users WHERE id={$id}";

        $result = DatabaseQueries::sqlQueryData($sql);

        $userById = DatabaseQueries::getAllData($result);

        return $userById;

    }

    public static function getUserByEmail(string $email)
    {

        $sql = "SELECT * FROM users WHERE email='{$email}'";

        $result = DatabaseQueries::sqlQueryData($sql);

        $userByEmail = DatabaseQueries::getAllData($result);

        return $userByEmail;

    }

    public static function verifyUser($email, $password)
    {
        $email = $this->dbObject->getDbObjectInstantiation()->escapeString($email);
        $hashedPassword = parent::escapeString($password);



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
    public function setName($name)
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
    public function setSurname($surname)
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
