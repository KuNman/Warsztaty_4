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
      if ($this->checkAlertIsAccepted() == true) {
        if ($this->checkUserIsLogged() == true) {
          if ($this->checkThemeIsDark() == true) {
              require_once('../src/views/index_dark.php');
          } elseif ($this->checkThemeIsDark() == false) {
              require_once('../src/views/index.php');
          }
        } elseif ($this->checkUserIsLogged() == false) {
           require_once('../src/views/index.html');
          }
      } elseif ($this->checkAlertIsAccepted() == false) {
        $this->displayAlert();
        require_once('../src/views/index.html');
      }
  }
    public function beers(){
      if ($this->checkAlertIsAccepted() == true) {
        if ($this->checkUserIsLogged() == true) {
          if ($this->checkThemeIsDark() == true) {
              require_once('../src/views/beers_logged_dark.php');
          } elseif ($this->checkThemeIsDark() == false) {
              require_once('../src/views/beers_logged.php');
          }
        } elseif ($this->checkUserIsLogged() == false) {
           require_once('../src/views/beers.php');
          }
      } elseif ($this->checkAlertIsAccepted() == false) {
        $this->displayAlert();
        require_once('../src/views/index.html');
      }
  }
    public function view(){
      if ($this->checkAlertIsAccepted() == true) {
        if ($this->checkUserIsLogged() == true) {
          if ($this->checkThemeIsDark() == true) {
              require_once('../src/views/view_logged_dark.php');
            } elseif ($this->checkThemeIsDark() == false) {
              require_once('../src/views/view_logged.php');
          }
        } elseif ($this->checkUserIsLogged() == false) {
           require_once('../src/views/view.php');
          }
        } elseif ($this->checkAlertIsAccepted() == false) {
          $this->displayAlert();
          require_once('../src/views/index.html');
      }
  }
    public function about(){
      if ($this->checkAlertIsAccepted() == true) {
        if ($this->checkUserIsLogged() == true) {
          if ($this->checkThemeIsDark() == true) {
              require_once('../src/views/about_logged_dark.php');
            } elseif ($this->checkThemeIsDark() == false) {
              require_once('../src/views/about_logged.php');
          }
        } elseif ($this->checkUserIsLogged() == false) {
           require_once('../src/views/about.html');
          }
        } elseif ($this->checkAlertIsAccepted() == false) {
          $this->displayAlert();
          require_once('../src/views/index.html');
      }
  }
    public function basket(){
      if ($this->checkAlertIsAccepted() == true) {
        if ($this->checkUserIsLogged() == true) {
          if ($this->checkThemeIsDark() == true) {
              require_once('../src/views/basket_logged_dark.php');
            } elseif ($this->checkThemeIsDark() == false) {
              require_once('../src/views/basket_logged.php');
          }
        } elseif ($this->checkUserIsLogged() == false) {
           require_once('../src/views/basket.html');
          }
        } elseif ($this->checkAlertIsAccepted() == false) {
          $this->displayAlert();
          require_once('../src/views/index.html');
      }
    }

    public function sum(){
      if ($this->checkAlertIsAccepted() == true) {
        if ($this->checkUserIsLogged() == true) {
          if ($this->checkThemeIsDark() == true) {
              require_once('../src/views/sum_logged_dark.php');
            } elseif ($this->checkThemeIsDark() == false) {
              require_once('../src/views/sum_logged.php');
          }
        } elseif ($this->checkUserIsLogged() == false) {
           require_once('../src/views/index.html');
          }
        } elseif ($this->checkAlertIsAccepted() == false) {
          $this->displayAlert();
          require_once('../src/views/index.html');
      }
  }

    private function addProductValidation()
    {
        return true;
    }

}
