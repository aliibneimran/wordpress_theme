<?php get_header() ?>

<?php
/*
Template name: HomePage	
*/
?>

<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/hero-bg.jpg)">
  <div class="overlay-itro"></div>
  <div class="hero-content display-table">
    <div class="table-cell">
      <div class="container">
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <h1 class="hero-title mb-4">I am Morgan Freeman</h1>
            <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
            <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->
<!-- ======= Counter Section ======= -->
<div class="section-counter paralax-mf bg-image" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/counters-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container position-relative">
    <div class="row">
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box counter-box pt-4 pt-md-0">
          <div class="counter-ico">
            <span class="ico-circle"><i class="bi bi-check"></i></span>
          </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">WORKS COMPLETED</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box pt-4 pt-md-0">
          <div class="counter-ico">
            <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
          </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">YEARS OF EXPERIENCE</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box pt-4 pt-md-0">
          <div class="counter-ico">
            <span class="ico-circle"><i class="bi bi-people"></i></span>
          </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">TOTAL CLIENTS</span>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box pt-4 pt-md-0">
          <div class="counter-ico">
            <span class="ico-circle"><i class="bi bi-award"></i></span>
          </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">AWARD WON</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Counter Section -->
<!-- ======= Testimonials Section ======= -->
<div class="testimonials paralax-mf bg-image" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Xavi Alonso</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Marta Socrate</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

        <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials Section -->


<!-- ======= Footer ======= -->
<?php get_footer() ?>