function lazy(){
  $("[data-lazy-load-image]").each(function (index, element) {
      var img = new Image();
      var source = $(element).data("lazy-load-image");
      var alt = $(element).data("alt");
      img.src = source + '-sm.jpg';
      img.srcset = source.concat('-mds.jpg 850w ,') + source.concat('-mls.jpg 850w ,') + source.concat('-l.jpg 1440w ,');
      img.alt = alt;
      img.sizes = "(min-width: 850px) 50vw, 100vw";
      $(element).prepend(img);
  });
}

$(document).ready(function() {
  // Search Button Function
  $("#search-button, .overlay-background").on( "click", function() {
    $("#search-overlay").toggleClass("visible");
  });

  // AJAX Loading for Initial Images
  $("[data-lazy-load-image]").css("animation", "pop-in 0.8s ease-in-out");
  lazy();

  // AJAX Loading for Extra Posts
    var page = 2;
  	// Each time the user scrolls
    var scrollFunction = function() {
      var mostOfTheWayDown = ($(document).height() - $(window).height()) * 2 / 3;
      if($(window).scrollTop() >= mostOfTheWayDown) {

        $(window).off('scroll');

        var url = "/test/fallow2/config/page" + page + ".php";
        var postbox = document.getElementById("posts");

        $.ajax({
            url: url,
            success: function(response) {
                $(response).appendTo($(postbox));
                page += 1;
                $(window).scroll(scrollFunction);
            },
            error: function(response) {
                var text = document.createTextNode('');
                $(text).appendTo($(postbox));
            }
        });
      }};
      $(window).scroll(scrollFunction);
    });
