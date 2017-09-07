<?php

class Session
{
    private $loggedIn;
    public $userId;

    public function __construct()
    {
        session_start();

        $this->loggedIn = false;
    }

    private function checkIfLoggin()
    {
        if (isset($_SESSION['userId'])) {
            $this->userId = $_SESSION['userId'];

            $this->loggedIn = true;
        } else {
            unset($this->userId);

            $this->loggedIn = false;
        }
    }

    public function login(object $user)
    {
        if ($user) {
            $this->userId = $_SESSION['userId'] = $user->id;

            $this->loggedIn = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['userId']);
        unset($this->userId);

        $this->loggedIn = false;
    }

    /**
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return $this->loggedIn;
    }



}