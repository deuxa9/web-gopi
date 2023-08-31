$('.oleez-header .dropdown').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
});

$('[data-toggle="offCanvasMenu"]').click(function() {
  $('#offCanvasMenu').addClass('open');
});

$('[data-dismiss="offCanvasMenu"]').click(function() {
  $(this).parent('#offCanvasMenu').removeClass('open');
});

$('[data-toggle="searchModal"]').click(function() {
  $('#searchModal').addClass('open');
});

$('[data-dismiss="searchModal"]').click(function() {
  $(this).parent('#searchModal').removeClass('open');
});

function moveToSelected(element) {

  if (element == "next") {
    var selected = $(".selected").next();
  } else if (element == "prev") {
    var selected = $(".selected").prev();
  } else {
    var selected = element;
  }

  var next = $(selected).next();
  var prev = $(selected).prev();
  var prevSecond = $(prev).prev();
  var nextSecond = $(next).next();

  $(selected).removeClass().addClass("selected");

  $(prev).removeClass().addClass("prev");
  $(next).removeClass().addClass("next");

  $(nextSecond).removeClass().addClass("nextRightSecond");
  $(prevSecond).removeClass().addClass("prevLeftSecond");

  $(nextSecond).nextAll().removeClass().addClass('hideRight');
  $(prevSecond).prevAll().removeClass().addClass('hideLeft');

}

var swiper = new Swiper( '.swiper-container.two', {
  pagination: '.swiper-pagination',
  paginationClickable: true,
  effect: 'coverflow',
  loop: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflow: {
    rotate: 0,
    stretch: 100,
    depth: 150,
    modifier: 1.5,
    slideShadows : false,
  }
} );
