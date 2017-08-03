$(document).ready(function() {
  $('.mobile-button a').click(function(e) {
	$(this).parent().parent().toggleClass('open');
  $(this).html($(this).html() == 'Zwiń' ? 'Menu' : 'Zwiń');
    e.preventDefault();
  });
  $('.logout').click(function(e) {
    e.preventDefault()
    Cookies.remove('user');
    window.location.replace("index");
  });
  $('.theme').hover(
    function() {
      $( this ).append( $( "<strong> &nbsp;Zmień</strong>" ) );
    }, function() {
      $( this ).find( "strong:last" ).remove();
    }
  );
  $('.theme').hover(function() {
    $( this ).slideOut( 10 );
    $( this ).slideIn( 350 );
  });
  $('.theme').click(function(e) {
    var theme = Cookies.get('theme');
    if ($(theme).selector == 'light') {
      console.log($(theme).selector);
      Cookies.set('theme', 'dark');
      window.setTimeout('location.reload()');
    } else if ($(theme).selector == 'dark') {
      console.log($(theme).selector);
      Cookies.set('theme', 'light') ;
      window.setTimeout('location.reload()');
    }
  });
});
