<?php

class General {

    static private $data;
    public $post;
    public $files;

    public function __construct()
    {
        $this->post = $_POST;
        $this->files = $_FILES;
    }

    public function getCssNameFromDb() {
      return $this->id = $_COOKIE['theme'] ;
    }

    public function getNameFromDb() {
      $id = substr($_COOKIE['user'],2);
      $result = $this->getConnection()->query("SELECT * FROM users WHERE id = '$id' ");
      while ($row = mysqli_fetch_row($result)) {
        $data[] = $row;
        }
      foreach ($data as $key => $value) {
        $name = $value[1];
      }
      return $this->name = $name;
    }

    public function displayAlert() {
      if ($this->checkAlertIsAccepted() == false) {
       echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
                <script src="/Warsztaty_4/src/views/js/alert.js"></script>' .
                '<div id="myModal" class="reveal-modal">
                      <h3>Strona tylko dla osób dorosłych</h3>
                			<p>Zamykając powiadomienie potwierdzasz swoją pełnoletność</p>
                			<a class="close-reveal-modal">&#215;</a>
                		</div>';
      }
    }

    public function checkAlertIsAccepted() {
      if (isset($_COOKIE['alert'])) {
        return true;
      } else {
        return false;
      }
    }
    public function checkUserIsLogged() {
      if (isset($_COOKIE['user'])) {
        return true;
      } else {
        return false;
      }
    }
    public function checkThemeIsDark() {
      if (($_COOKIE['theme']) == 'dark') {
        return true;
      } else {
        return false;
      }
    }

    public function getData(){
        return General::$data;
    }

    public function render(string $pathToFile, $data = [])
    {
        if(!empty($data)){
            General::$data = $data;
        }

        //require ($pathToFile);
    }

    public function getConnection()
    {
        $configDB = array(
            'servername' => "localhost",
            'username' => "root",
            'password' => "coderslab",
            'baseName' => "shop"
        );

        $conn = new mysqli($configDB['servername'], $configDB['username'], $configDB['password'], $configDB['baseName']);

        if ($conn->connect_error) {
            die("Polaczenie nieudane. Blad: " . $conn->connect_error."<br>");
        }

        return $conn;
    }


    public function is_post()
    {
        if(!empty($this->post)){
            return true;
        }

        return false;
    }

    public function redirect(string $destiny) {
        header('location:'. '/Warsztaty_4/src/index.php' . $destiny);
    }

}
