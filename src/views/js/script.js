$(function() {
    $('#button-1').click(function(e) {
      e.preventDefault()
      Cookies.set($(".item-title").children(1).html(), $(".item-id").children(1).html());
      $('#button-1').switchClass( "button", "button-after-clicking" );
  })
})
