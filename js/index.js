

$(function(){
  $(".navbar").on("show.bs.collapse", function(e) {
    console.log("open")
	   $("#index-navbar").toggleClass('index-nav-background');
   });
});

$(function(){
  $(".navbar").on("hide.bs.collapse", function(e) {
    console.log("close")
	   $("#index-navbar").toggleClass('index-nav-background');
   });
});

$(function(){
  $('.carousel').bcSwipe({ threshold: 50 });
});


$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    console.log('scroll')
  });
});
