function lazy(){$("[data-lazy-load-image]").each(function(a,o){var n=new Image,e=$(o).data("lazy-load-image"),t=$(o).data("alt");n.src=e+"-sm.jpg",n.srcset=e.concat("-mds.jpg 850w ,")+e.concat("-mls.jpg 850w ,")+e.concat("-l.jpg 1440w ,"),n.alt=t,n.sizes="(min-width: 850px) 50vw, 100vw",$(o).prepend(n)})}$(document).ready(function(){$("[data-lazy-load-image]").css("animation","pop-in 0.8s ease-in-out"),lazy();var a=2,o=function(){var n=2*($(document).height()-$(window).height())/3;if($(window).scrollTop()>=n){$(window).off("scroll");var e="/config/page"+a+".php",t=document.getElementById("posts");$.ajax({url:e,success:function(n){$(n).appendTo($(t)),a+=1,$(window).scroll(o)},error:function(a){var o=document.createTextNode("");$(o).appendTo($(t))}})}};$(window).scroll(o)});