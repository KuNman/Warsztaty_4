<?php

class Products extends General
{
    const VIEW_PATH = 'Products/views/';

    public function add(){

        if ($this->is_post()) {

            if($this->addProductValidation()){

                $name = $this->post['name'];
                $amount = $this->post['amount'];
                $price = $this->post['price'];

                $sqlStatement = "INSERT INTO products(name, amount, price) values ('$name', '$amount', '$price')";

                $result = $this->getConnection()->query($sqlStatement);

                if ($result) {
                    $this->redirect('/products/index');
                }

            }

            return false;
        }

        $this->render(Products::VIEW_PATH . 'add.html');
    }

    public function edit(string $id) {

    }

    public function delete(string $id) {

    }

    public function index(){
      if (isset($_COOKIE['alert'])) {
        if (isset($_COOKIE['user'])) {
          if ($_COOKIE['theme'] == 'dark') {
              require_once('../src/views/index_dark.php');
          } else {
              require_once('../src/views/index.php');
          }
        } elseif (!isset($_COOKIE['user'])) {
           require_once('../src/views/index.html');
          }
      } elseif (!isset($_COOKIE['alert'])) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script src="/Warsztaty_4/src/views/js/alert.js"></script>' .
        '<div id="myModal" class="reveal-modal">
              <h3>Strona tylko dla osób dorosłych</h3>
        			<p>Zamykając powiadomienie potwierdzasz swoją pełnoletność</p>
        			<a class="close-reveal-modal">&#215;</a>
        		</div>';
        require_once('../src/views/index.html');
      }
  }
    public function beers(){
      if (isset($_COOKIE['alert'])) {
        if (isset($_COOKIE['user'])) {
          if ($_COOKIE['theme'] == 'dark') {
              require_once('../src/views/beers_logged_dark.php');
          } else {
              require_once('../src/views/beers_logged.php');
          }
        } elseif (!isset($_COOKIE['user'])) {
           require_once('../src/views/beers.php');
          }
      } elseif (!isset($_COOKIE['alert'])) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script src="/Warsztaty_4/src/views/js/alert.js"></script>' .
        '<div id="myModal" class="reveal-modal">
              <h3>Strona tylko dla osób dorosłych</h3>
        			<p>Zamykając powiadomienie potwierdzasz swoją pełnoletność</p>
        			<a class="close-reveal-modal">&#215;</a>
        		</div>';
        require_once('../src/views/index.html');
      }
  }
    public function view(){
      if (isset($_COOKIE['alert'])) {
        if (isset($_COOKIE['user'])) {
          if ($_COOKIE['theme'] == 'dark') {
              require_once('../src/views/view_logged_dark.php');
          } else {
              require_once('../src/views/view_logged.php');
          }
        } elseif (!isset($_COOKIE['user'])) {
           require_once('../src/views/view.php');
          }
      } elseif (!isset($_COOKIE['alert'])) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script src="/Warsztaty_4/src/views/js/alert.js"></script>' .
        '<div id="myModal" class="reveal-modal">
              <h3>Strona tylko dla osób dorosłych</h3>
        			<p>Zamykając powiadomienie potwierdzasz swoją pełnoletność</p>
        			<a class="close-reveal-modal">&#215;</a>
        		</div>';
        require_once('../src/views/index.html');
      }
  }
    public function about(){
      if (isset($_COOKIE['alert'])) {
        if (isset($_COOKIE['user'])) {
          if ($_COOKIE['theme'] == 'dark') {
              require_once('../src/views/about_logged_dark.php');
          } else {
              require_once('../src/views/about_logged.php');
          }
        } elseif (!isset($_COOKIE['user'])) {
           require_once('../src/views/about.html');
          }
      } elseif (!isset($_COOKIE['alert'])) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script src="/Warsztaty_4/src/views/js/alert.js"></script>' .
        '<div id="myModal" class="reveal-modal">
              <h3>Strona tylko dla osób dorosłych</h3>
        			<p>Zamykając powiadomienie potwierdzasz swoją pełnoletność</p>
        			<a class="close-reveal-modal">&#215;</a>
        		</div>';
        require_once('../src/views/index.html');
      }
  }
    public function basket(){
      if (isset($_COOKIE['alert'])) {
        if (isset($_COOKIE['user'])) {
          if ($_COOKIE['theme'] == 'dark') {
              require_once('../src/views/basket_logged_dark.php');
          } else {
              require_once('../src/views/basket_logged.php');
          }
        } elseif (!isset($_COOKIE['user'])) {
           require_once('../src/views/basket.html');
          }
      } elseif (!isset($_COOKIE['alert'])) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script src="/Warsztaty_4/src/views/js/alert.js"></script>' .
        '<div id="myModal" class="reveal-modal">
              <h3>Strona tylko dla osób dorosłych</h3>
        			<p>Zamykając powiadomienie potwierdzasz swoją pełnoletność</p>
        			<a class="close-reveal-modal">&#215;</a>
        		</div>';
        require_once('../src/views/index.html');
      }
    }

    public function sum(){
      if (isset($_COOKIE['alert'])) {
        if (isset($_COOKIE['user'])) {
          if ($_COOKIE['theme'] == 'dark') {
              require_once('../src/views/sum_logged_dark.php');
          } else {
              require_once('../src/views/sum_logged.php');
          }
        } elseif (!isset($_COOKIE['user'])) {
           require_once('../src/views/index.html');
          }
      } elseif (!isset($_COOKIE['alert'])) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script src="/Warsztaty_4/src/views/js/alert.js"></script>' .
        '<div id="myModal" class="reveal-modal">
              <h3>Strona tylko dla osób dorosłych</h3>
              <p>Zamykając powiadomienie potwierdzasz swoją pełnoletność</p>
              <a class="close-reveal-modal">&#215;</a>
            </div>';
        require_once('../src/views/index.html');
      }
  }

    private function addProductValidation()
    {
        return true;
    }

}
