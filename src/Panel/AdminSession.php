<?php

class AdminSession
{
    private $loggedIn;
    private $role;
    public $userId;

    public function __construct()
    {
        session_start();

        $this->loggedIn = false;
    }

    private function checkIfLoggin()
    {
        if (isset($_SESSION['userId']) && isset($_SESSION['admin'])) {
            $this->userId = $_SESSION['userId'];
            $this->role = $_SESSION['admin'];

            $this->loggedIn = true;
        } else {
            unset($this->userId);

            $this->loggedIn = false;
        }
    }

    public function login(object $user)
    {
        if ($user->role === 'ADMIN') {
            $this->userId = $_SESSION['userId'] = $user->id;
            $this->role = $_SESSION['admin'] = $user->role;

            $this->setCookie($user);

            $this->loggedIn = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['userId']);
        unset($this->userId);
        # unset a cookie - using 1 in expire we are free from risk when client's time is wrong
        setcookie('cookieId', '', 1);

        $this->loggedIn = false;
    }

    private function setCookie(object $user)
    {
        $cookieValue = $user->role . '.' . $user->id;

        return setcookie('cookieId', $cookieValue, time() + 3600 * 24);
    }

    /**
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return $this->loggedIn;
    }



}