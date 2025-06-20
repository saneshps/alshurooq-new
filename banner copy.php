<main class="main-content">
  <section class="slideshow">
    <div class="slideshow-inner">
      <div class="slides">
        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <div class="title">
                <h3>The Power Of Quality</h3>
              </div>
              <!-- <div class="title2"><h3></h3> </div> -->

              <!--  <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a> -->
            </div>
          </div>
          <div class="image-container">
            <img src="img/ban-1.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">
                <h3>Passionately Precise</h3>
              </div>
              <!--  <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a> -->
            </div>
          </div>
          <div class="image-container">
            <img src="img/ban-2.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">
                <h3 class="thre">Precision, Quality & Reliability</h3>
              </div>
              <!-- <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a> -->
            </div>
          </div>
          <div class="image-container">
            <img src="img/ban-3.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">
                <h3>The Power Of Quality</h3>
              </div>
              <!-- <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a> -->
            </div>
          </div>
          <div class="image-container">
            <img src="img/ban-4.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">
                <h3>The Power Of Quality</h3>
              </div>
              <!-- <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a> -->
            </div>
          </div>
          <div class="image-container">
            <img src="img/ban-5.png" alt="" class="image" />
          </div>
        </div>
        <!-- <div class="slide">
          <div class="slide-content">
            <div class="caption">
               <div class="title"><h3>The Power Of Quality</h3> </div>
              <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container"> 
            <img src="img/ban-6.png" alt="" class="image" />
          </div>
        </div> -->
      </div>
      <div class="pagination">
        <div class="item is-active">
          <span class="icon">1</span>
        </div>
        <div class="item">
          <span class="icon">2</span>
        </div>
        <div class="item">
          <span class="icon">3</span>
        </div>
        <div class="item">
          <span class="icon">4</span>
        </div>
        <div class="item">
          <span class="icon">5</span>
        </div>
        <!-- <div class="item">
          <span class="icon">6</span>
        </div> -->
      </div>
      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
              <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
            </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
              <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
            </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>
    </div>
  </section>
</main>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>
<script type="text/javascript">
  var slideshowDuration = 4000;
  var slideshow = $('.main-content .slideshow');

  function slideshowSwitch(slideshow, index, auto) {
    if (slideshow.data('wait')) return;

    var slides = slideshow.find('.slide');
    var pages = slideshow.find('.pagination');
    var activeSlide = slides.filter('.is-active');
    var activeSlideImage = activeSlide.find('.image-container');
    var newSlide = slides.eq(index);
    var newSlideImage = newSlide.find('.image-container');
    var newSlideContent = newSlide.find('.slide-content');
    var newSlideElements = newSlide.find('.caption > *');
    if (newSlide.is(activeSlide)) return;

    newSlide.addClass('is-new');
    var timeout = slideshow.data('timeout');
    clearTimeout(timeout);
    slideshow.data('wait', true);
    var transition = slideshow.attr('data-transition');
    if (transition == 'fade') {
      newSlide.css({
        display: 'block',
        zIndex: 2
      });
      newSlideImage.css({
        opacity: 0
      });

      TweenMax.to(newSlideImage, 1, {
        alpha: 1,
        onComplete: function() {
          newSlide.addClass('is-active').removeClass('is-new');
          activeSlide.removeClass('is-active');
          newSlide.css({
            display: '',
            zIndex: ''
          });
          newSlideImage.css({
            opacity: ''
          });
          slideshow.find('.pagination').trigger('check');
          slideshow.data('wait', false);
          if (auto) {
            timeout = setTimeout(function() {
              slideshowNext(slideshow, false, true);
            }, slideshowDuration);
            slideshow.data('timeout', timeout);
          }
        }
      });
    } else {
      if (newSlide.index() > activeSlide.index()) {
        var newSlideRight = 0;
        var newSlideLeft = 'auto';
        var newSlideImageRight = -slideshow.width() / 8;
        var newSlideImageLeft = 'auto';
        var newSlideImageToRight = 0;
        var newSlideImageToLeft = 'auto';
        var newSlideContentLeft = 'auto';
        var newSlideContentRight = 0;
        var activeSlideImageLeft = -slideshow.width() / 4;
      } else {
        var newSlideRight = '';
        var newSlideLeft = 0;
        var newSlideImageRight = 'auto';
        var newSlideImageLeft = -slideshow.width() / 8;
        var newSlideImageToRight = '';
        var newSlideImageToLeft = 0;
        var newSlideContentLeft = 0;
        var newSlideContentRight = 'auto';
        var activeSlideImageLeft = slideshow.width() / 4;
      }

      newSlide.css({
        display: 'block',
        width: 0,
        right: newSlideRight,
        left: newSlideLeft,
        zIndex: 2
      });

      newSlideImage.css({
        width: slideshow.width(),
        right: newSlideImageRight,
        left: newSlideImageLeft
      });

      newSlideContent.css({
        width: slideshow.width(),
        left: newSlideContentLeft,
        right: newSlideContentRight
      });

      activeSlideImage.css({
        left: 0
      });

      TweenMax.set(newSlideElements, {
        y: 20,
        force3D: true
      });
      TweenMax.to(activeSlideImage, 1, {
        left: activeSlideImageLeft,
        ease: Power3.easeInOut
      });

      TweenMax.to(newSlide, 1, {
        width: slideshow.width(),
        ease: Power3.easeInOut
      });

      TweenMax.to(newSlideImage, 1, {
        right: newSlideImageToRight,
        left: newSlideImageToLeft,
        ease: Power3.easeInOut
      });

      TweenMax.staggerFromTo(newSlideElements, 0.8, {
        alpha: 0,
        y: 60
      }, {
        alpha: 1,
        y: 0,
        ease: Power3.easeOut,
        force3D: true,
        delay: 0.6
      }, 0.1, function() {
        newSlide.addClass('is-active').removeClass('is-new');
        activeSlide.removeClass('is-active');
        newSlide.css({
          display: '',
          width: '',
          left: '',
          zIndex: ''
        });

        newSlideImage.css({
          width: '',
          right: '',
          left: ''
        });

        newSlideContent.css({
          width: '',
          left: ''
        });

        newSlideElements.css({
          opacity: '',
          transform: ''
        });

        activeSlideImage.css({
          left: ''
        });

        slideshow.find('.pagination').trigger('check');
        slideshow.data('wait', false);
        if (auto) {
          timeout = setTimeout(function() {
            slideshowNext(slideshow, false, true);
          }, slideshowDuration);
          slideshow.data('timeout', timeout);
        }
      });
    }
  }

  function slideshowNext(slideshow, previous, auto) {
    var slides = slideshow.find('.slide');
    var activeSlide = slides.filter('.is-active');
    var newSlide = null;
    if (previous) {
      newSlide = activeSlide.prev('.slide');
      if (newSlide.length === 0) {
        newSlide = slides.last();
      }
    } else {
      newSlide = activeSlide.next('.slide');
      if (newSlide.length == 0)
        newSlide = slides.filter('.slide').first();
    }

    slideshowSwitch(slideshow, newSlide.index(), auto);
  }

  function homeSlideshowParallax() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > windowHeight) return;
    var inner = slideshow.find('.slideshow-inner');
    var newHeight = windowHeight - (scrollTop / 2);
    var newTop = scrollTop * 0.8;

    inner.css({
      transform: 'translateY(' + newTop + 'px)',
      height: newHeight
    });
  }

  $(document).ready(function() {
    $('.slide').addClass('is-loaded');

    $('.slideshow .arrows .arrow').on('click', function() {
      slideshowNext($(this).closest('.slideshow'), $(this).hasClass('prev'));
    });

    $('.slideshow .pagination .item').on('click', function() {
      slideshowSwitch($(this).closest('.slideshow'), $(this).index());
    });

    $('.slideshow .pagination').on('check', function() {
      var slideshow = $(this).closest('.slideshow');
      var pages = $(this).find('.item');
      var index = slideshow.find('.slides .is-active').index();
      pages.removeClass('is-active');
      pages.eq(index).addClass('is-active');
    });


    var timeout = setTimeout(function() {
      slideshowNext(slideshow, false, true);
    }, slideshowDuration);

    slideshow.data('timeout', timeout);
  });

  if ($('.main-content .slideshow').length > 1) {
    $(window).on('scroll', homeSlideshowParallax);
  }
</script>