<?php
class View extends General {
  var $id;

  public function __construct($id) {
    $this->id = $id;
  }

  public function generateView() {
    $id = $this->id;
    $result = $this->getConnection()->query("SELECT * FROM products WHERE id = '$id' ");
    $image_url='http://image.dailyfreeman.com/storyimage/DF/20160226/NEWS/160229771/AR/0/AR-160229771.jpg&maxh=400&maxw=667';
    $up = '<!DOCTYPE html>
      <head>
        <meta charset="utf-8" />
        <title>Marek&Kuba 2017</title>
          <link rel="stylesheet" href="/Warsztaty_4/src/views/css/general.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
        <script type="text/javascript" src="/Warsztaty_4/src/views/js/css.js"></script>
        <script type="text/javascript" src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script type="text/javascript" src="/Warsztaty_4/src/views/js/jquery.reveal.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
        <script src="/Warsztaty_4/src/views/js/script.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous" rel="stylesheet" type="text/css">
        <style type="text/css">
          body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; background: #D7F7FE;}
          .big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #0066ff; }
        </style>
      </head>
    <meta name="viewport" content="width=device-width">
    <header class="header">
        <div class="container">
          <h1 class="site-title">Super Cool Sklep!</h1>
      </div>
    </header>
    <nav class="main-nav">
      <div class="container">
        <ul>
          <li class="mobile-button"><a href="#">Menu</a></li>
          <li><a href="http://localhost/Warsztaty_4/src/index.php/products/index">Home</a></li>
          <li><a href="http://localhost/Warsztaty_4/src/index.php/products/about">Info</a></li>
          <li><a href="http://localhost/Warsztaty_4/src/index.php/products/beers">Produkty</a></li>
          <li><a href="http://localhost/Warsztaty_4/src/index.php/products/basket">Koszyk</a></li>
          <li><a href="http://localhost/Warsztaty_4/src/index.php/products/login">Zaloguj się</a></li>
        </ul>
      </div>
    </nav>
    <section class="content">
      <div class="full-bleed cool-photo"></div>
      <article class="post">
        <div class="container">
            <h2>Szczegóły : </h2>';

    echo $up;
    while ($row = mysqli_fetch_row($result)) {
      $data[] = $row;
      }
    foreach ($data as $key => $value) {
      echo '<div class="columns"><div class="item"><h4 class="item-title">' .
      'Nazwa : ' . '<p>' . $value[1] .
      '<p> Opis : ' . '<p>' . $value[4] .
      '<p> Cena : ' . '<p>' . $value[3] . ' PLN' .
      '<h4 class="item-id" style="display:none;">' . '<p>' . $value[0] .
      '</h4><p><p><button id="button-1" class="button"><span>Do koszyka</span></button>
      '
       .
      '</div><div class="item"><img src="' . $image_url . '""></div>';
     }

     echo $bottom = '</h4></div></article><div class="full-bleed cool-photo2"></div><footer class="footer">
       <div class="container"><p>Marek & Kuba 2017</a></p></div></footer>';
  }
}

$item = substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", -1);
(new View($item))->generateView();

?>
