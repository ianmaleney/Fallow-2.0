// Search Button Function

var searchButton = document.getElementById("search-button");
var overlay = document.getElementById("search-overlay");

function reveal(){
  overlay.classList.toggle("visible");
}

// AJAX Loading for Extra Posts

$(document).ready(function() {
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
