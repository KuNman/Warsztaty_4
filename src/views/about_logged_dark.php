<?php
class About extends General{

  public function generatePage() {
    $page = '<!DOCTYPE html>
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
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/beers">Produkty</a></li>
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/about">Info</a></li>
            <li class="counter"><a href="http://localhost/Warsztaty_4/src/index.php/products/basket">Koszyk</a></li>
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/orders">Zamówienia</a></li>
            <li><a href="http://localhost/Warsztaty_4/src/index.php/products/settings">Panel</a></li>
            <li><a href="" class="theme">Motyw ' . $this->getCssNameFromDb() . ' </a></li>
            <li><a href="#" class="logout"">Wyloguj się</a></li>
          </ul>
          </div>
        </nav>
        <section class="content">
          <div class="full-bleed cool-photo"></div>
          <article class="post">
            <div class="container">
                <h2>This is the super cool section title</h2>
              <div class="columns">
                <div class="item">
                  <h4 class="item-title">This is the post title for logged users</h4>
                  <img src="https://placeimg.com/600/150/tech" alt="Sample Image" class="item-image" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac orci in est maximus lacinia non vitae nibh. Mauris mattis accumsan velit, non scelerisque massa placerat ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus consectetur nulla ligula, non molestie neque consectetur malesuada. Etiam vitae dolor metus. Aliquam aliquet laoreet arcu, at egestas quam tempor ut. Curabitur eget pulvinar est. Sed et orci eu lectus euismod rutrum. Mauris tempor sem in placerat mattis. Suspendisse aliquet diam ac leo bibendum, non fringilla dolor iaculis. Nulla in bibendum enim, id tincidunt elit. Nam nec odio in nibh molestie tempus.</p> </div>
            </div>
          </article>
          <div class="full-bleed cool-photo2"></div>
        </section>
        <footer class="footer">
          <div class="container">
            <p>Marek & Kuba 2017</a></p>
          </div>
        </footer></html>';
    echo $page;
  }
}

(new About())->generatePage();
 ?>
