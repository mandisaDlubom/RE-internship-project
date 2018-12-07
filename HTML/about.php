<?php
$title = 'About Rootslive';
$title_page = 'about-page';
include('../includes/header.php');
?>


<!-- About: Read More -->
<section class="about full-width">
    <div class="container grid space-content about-section">
        <div class="grid-6 module delay--4">
            <h1 class="about__heading">
                <div class="about__quote"></div>
                Live music makes your celebration<br>
                unforgettable and charming! So choose it right.
            </h1>
        </div>
        <div class="grid-6 module delay--2">
            <div class="about__content">
                <p>Since 2007 we offer lots of unique live music&nbsp;projects for your event. You can choose from
                    live Jazz and Popular dance music&nbsp;to unique projects such as „Karaoke LIVE“ where you
                    become the main star with&nbsp;the real band of professional musicians.</p>
                <p>We specialize in live music so we offer well known Lithuanian instrumentalists and famous
                    singers, who are strong in performing and also entertaining.</p>
                <p>We believe that live music must be presented as technically professional as<br>
                    possible. That is why we offer full concert sound, light and staging rental services for your
                    events.</p>
            </div>
        </div>
    </div>
</section>


<!-- include service section -->
<?php include('../includes/sevices.html') ?>

<!-- Mobile -->
<section class="container blog-container visible-xs">
    <div class="grid">
        <div class="grid-4 module delay--4">
            <div class="blog">
                <div class="flex-item blog-heading">
                    <div class="blog__number">01</div>
                    <h4 class="blog__title">Live Music Projects</h4>
                </div>
                <div class="blog__img blog-1"></div>
                <div class="blog__btn">
                    <span class="blog-more">Read more</span>
                </div>
            </div>
        </div>
        <div class="grid-4 module delay--2">
            <div class="blog">
                <div class="flex-item blog-heading">
                    <div class="blog__number">02</div>
                    <h4 class="blog__title">Sound & Light Equipment Rental Services</h4>
                </div>
                <div class="blog__img blog-2"></div>
                <div class="blog__btn">
                    <span class="blog-more">Read more</span>
                </div>
            </div>
        </div>
        <div class="grid-4 module">
            <div class="blog">
                <div class="flex-item blog-heading">
                    <div class="blog__number">03</div>
                    <h4 class="blog__title">DJs</h4>
                </div>
                <div class="blog__img blog-3"></div>
                <div class="blog__btn">
                    <span class="blog-more">Read more</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Slider -->
<section class="container no--space about-slider--container">
    <div class="grid mb90">
        <div class="grid-12">
            <h2 class="module delay--2">Choose to listen</h2>
        </div>
    </div>
    <div class="grid full-width">
        <div class="grid-12">
            <!--Slider imgs-->
            <div class="about-slider">
                <div class="slide slide1">
                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531994966/rootslive/FANCY.jpg"
                         alt="Slide image 1">
                </div>
                <div class="slide slide2">
                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531995002/rootslive/crazy.jpg"
                         alt="Slide image 2">
                </div>
                <div class="slide slide3">
                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/c_scale,w_1280/v1531994977/rootslive/new.jpg"
                         alt="slide image 3">
                </div>
                <div class="slide slide1">
                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531994966/rootslive/FANCY.jpg"
                         alt="Slide image 1">
                </div>
                <div class="slide slide2">
                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/v1531995002/rootslive/crazy.jpg"
                         alt="Slide image 2">
                </div>
                <div class="slide slide3">
                    <img src="https://res.cloudinary.com/responsive-web-design/image/upload/c_scale,w_1280/v1531994977/rootslive/new.jpg"
                         alt="slide image 3">
                </div>
            </div>
        </div>
        <div class="grid-12 caption-container module delay--4">
            <div class="justify--space-between">
                <div class="grid-4 more-grid">
                    <div class="btn more-btn">
                        <div class="btn--style">
                            <a href="/HTML/projects.php" class="btn__link">more projects</a>
                            <div class="btn-color"></div>
                        </div>
                    </div>
                </div>
                <div class="grid-1 slider-control--about">
           <span class="prev">
             <i class="material-icons">keyboard_arrow_left</i>
           </span>
                    <span class="next">
            <i class="material-icons">keyboard_arrow_right</i>
           </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<?php include('../includes/contact-us.html'); ?>

<!-- include Footer -->
<?php include('../includes/footer.html'); ?>

