var searchButton = document.getElementById("search-button");
var overlay = document.getElementById("search-overlay");

function reveal(){
  overlay.classList.toggle("visible");
}

//searchButton.onClick = reveal();

// AJAX Loading for Extra Posts

$(document).ready(function() {
  var page = 2;
  console.log(page);
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
              console.log(page);
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


/*
(function($, lazyload) {

    "use strict";

    var page = 2,
        container = ".primary-container";

    lazyload.load = function() {

        var url = "config/page" + page + ".php";

        $.ajax({
            url: url,
            success: function(response) {
                appendContests(response);
            },
            error: function(response) {
                var errorMsg = 'Sorry, there was some error with the request. Please refresh the page.';
                errorMsg.appendTo($(container));
            }
        });
    };

    var appendContests = function(response) {
        $(response).appendTo($(container));
        page += 1;
    };

})(jQuery, lazyload);*/
