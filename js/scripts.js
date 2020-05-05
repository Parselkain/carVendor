(function($){

  var nx_scroll_position = 0;
  $(document).scroll(function(){
    nx_scroll_position = $(this).scrollTop();
    if(nx_scroll_position > 100){
      $("body").addClass('is-scrolled');
    } else {
        $("body").removeClass('is-scrolled');
    }
  });
  $( ".login-popup" )
  .mouseenter(function() {
    $( this ).addClass('popup-visible');
  });


  $( ".main-content" )
  .mouseenter(function() {
    $( '.login-popup' ).removeClass('popup-visible');
  });

}(jQuery));
