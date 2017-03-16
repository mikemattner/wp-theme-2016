var $j = jQuery.noConflict();


/*=====================================
Reset search form on click out if not filled
=====================================*/
$j(function() {
  $j('.searchform').resetDefaultValue();
});

/*=====================================
Track outbound links with GA
=====================================*/
$j(function() {
  $j("a[href*='http://']:not([href*='" + window.location.hostname + "'])").click(function() {
    var outlink = $(this).attr('href');
    _gaq.push(['_trackEvent', 'Outbound Links', outlink]);
    setTimeout('document.location = "' + outlink + '"', 100)
    return false;
  });
});

$j(document).ready(function() {

  /*=====================================
  In field labels
  =====================================*/
  $j("dl.details label").inFieldLabels({
    fadeOpacity: 1.0
  });

  /*=====================================
  Code highlighting
  =====================================*/
  $j('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });

  /*=====================================
  Lity Lightbox
  =====================================*/
  var lightbox = lity();

  //Activate FancyBox
  $j(document).on('click', "a[href$='.jpg'],a[href$='.png'],a[href$='.gif']", lightbox);
  $j("a.download_file[href$='.jpg'],a.download_file[href$='.png'],a.download_file[href$='.gif']").unbind('lightbox');

});

/*=====================================
Menubar animations
=====================================*/
var cbpAnimatedHeader = (function() {

  var docElem = document.documentElement,
    header = document.querySelector('.cbp-af-header'),
    didScroll = false,
    changeHeaderOn = 150;

  function init() {
    window.addEventListener('scroll', function(event) {
      if (!didScroll) {
        didScroll = true;
        setTimeout(scrollPage, 50);
      }
    }, false);
  }

  function scrollPage() {
    var sy = scrollY();
    if (sy >= changeHeaderOn) {
      classie.add(header, 'cbp-af-header-shrink');
    } else {
      classie.remove(header, 'cbp-af-header-shrink');
    }
    didScroll = false;
  }

  function scrollY() {
    return window.pageYOffset || docElem.scrollTop;
  }

  init();

})();


/*==========================================
Hide menubar when scrolled past a certain point
==========================================*/
/*var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = 400;

// on scroll, let the interval function know the user has scrolled
$j(window).scroll(function(event) {
  didScroll = true;
});
// run hasScrolled() and reset didScroll status
setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {

  var st = $j(this).scrollTop();

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta)
    return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $j('.cbp-af-header').removeClass('nav-down').addClass('nav-up');
  } else {
    // Scroll Up
    if (st + $j(window).height() < $j(document).height()) {
      $j('.cbp-af-header').removeClass('nav-up').addClass('nav-down');
    }
  }

  lastScrollTop = st;

}*/

/*=====================================
Parralaxin
=====================================
function mm_scroll_actions() {
    
    var scrolltop = $j(window).scrollTop(), 
          opacity = ( 100 - Math.round(scrolltop/4) ) * 0.01, 
          parallax_foreground = Math.round(scrolltop/2);

    if ( opacity >= 0 ) {
      $j("#page_header .wrapper").each(function() {
        $j(this).css({transform: 'translate3d(0, ' + parallax_foreground + 'px, 0)', opacity: opacity });
      });
    } else {
      $j("#page_header .wrapper").each(function() {
        $j(this).css({ "opacity": 0 });
      });
    }

}

$j(window).scroll(function() {
        mm_scroll_actions();
});*/