<?php
class Basket extends General {

  public function __construct($id = 0) {
    $this->id = $id;
  }

  public function generateUp() {
    $up = '<!DOCTYPE html>
    	<head>
    		<meta charset="utf-8" />
    		<title>Marek&Kuba 2017</title>
          <link rel="stylesheet" href="/Warsztaty_4/src/views/css/general_dark.css">
    		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    		<script type="text/javascript" src="/Warsztaty_4/src/views/js/css.js"></script>
    		<script type="text/javascript" src="/Warsztaty_4/src/views/js/js.cookie.js"></script>
    		<script type="text/javascript" src="/Warsztaty_4/src/views/js/jquery.reveal.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous" rel="stylesheet" type="text/css">
    		<style type="text/css">
    			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; background: #000000;}
    			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #0066ff; }
    		</style>

    	</head>
        <meta name="viewport" content="width=device-width">
        <header class="header">
            <div class="container">
              <h1 class="site-title">Super Cool Sklep!</h1>
              <span class="site-tagline">Witaj ' . $this->getNameFromDb() . '</span>
          </div>
        </header>
        <nav class="main-nav">
          <div class="container">
            <ul>
              <li class="mobile-button"><a href="#">Menu</a></li>
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/index">Home</a></li>
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/beers">Produkty</a></li>
            <li class="counter"><a href="http://localhost/Warsztaty_4/src/index.php/products/about">Info</a></li>
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/orders">Zamówienia</a></li>
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/settings">Panel</a></li>
            <li><a href=" " class="theme">Motyw ' . $this->getCssNameFromDb() . ' </a></li>
            <li><a href=" " class="logout"">Wyloguj się</a></li>
          </ul>
          </div>
        </nav>
        <section class="content">
          <div class="full-bleed cool-photo"></div>
          <article class="post">
            <div class="container">
            <h2>Koszyk : </h2><form action="sum" method="post">';
    echo $up;
  }

  public function generateBottom() {
    echo $bottom = '<p><button id="button-1" class="button"><span>Dalej</span></button></h4></div></article><div class="full-bleed cool-photo2"></div><footer class="footer">
      <div class="container"><p>Marek & Kuba 2017</a></p></div></footer>';
  }

  public function generateView() {
    $id = $this->id;
    $result = $this->getConnection()->query("SELECT * FROM products WHERE id = '$id' ");
    while ($row = mysqli_fetch_row($result)) {
      $data[] = $row;
      foreach ($data as $key => $value) {
        echo $value[1] . ' ' . '<input type="number" name="' . $value[1] .'" min="1" max="100" value="1" id="' . $value[3] . '"> szt. ' . $value[3] . 'zł/szt.</br>' ;
       }
    }
  }
}

function generate() {
    $c = new Basket();
    $c->generateUp();
    foreach ($_COOKIE as $key => $item) {
    $c = new Basket($item);
    $c->generateView();
  }
    $c->generateBottom();
}
generate();
