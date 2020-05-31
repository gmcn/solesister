( function($) {

  // bxslider
  $('.bxslider').bxSlider({

   });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.titleheight').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#BC6092",
      "text": "#fff"
    },
    "button": {
      "background": "#a01d64"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": false,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "/privacy-policy"
  }
});
