//USER DEFINED JS

$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= 500) {
    $("nav").addClass("bg-primary");
  } else {
    $("nav").removeClass("bg-primary");
  }
});
