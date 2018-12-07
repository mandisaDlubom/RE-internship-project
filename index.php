<!-- Variables and Header include -->
<?php
$title = "Rootslive";
$title_page = "home";
include('includes/header.php');
?>

<!--  Home slider -->
<div class="slider">
    <div class="slider-heading">
        <h2 class="slider-title">Slide 1 title</h2>
        <h2 class="slider-title">Slide 2 title</h2>
        <h2 class="slider-title">Slide 3 title</h2>
    </div>
    <div class="slides">
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
    <div class="controls">
        <div class="grid-5"></div>
        <div class="captions">
            <div class="caption">This is a caption for slide 1</div>
            <div class="caption">This is a caption for slide 2</div>
            <div class="caption">This is a caption for slide 3</div>
        </div>
        <div class="pagination">
        </div>
    </div>
</div>


<!-- include service section -->
<?php include('includes/sevices.html') ?>

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

<!-- Music Projects -->
<section class="projects">
    <div class="container">
        <h2 class="music-title">Music projects</h2>
        <div class="grid">
            <div class="grid-8">
                <div class="projects-nav">
                    <ul class="project-container">
                        <li class="project-link active" data-filter="*">all</li>
                        <li class="project-link" data-filter=".dance">dance</li>
                        <li class="project-link" data-filter=".rock">rock</li>
                        <li class="project-link" data-filter=".pop">pop</li>
                    </ul>
                </div>
            </div>
            <div class="grid-4">
                <div class="search">
                    <input type="text" class="quickSearch" placeholder="Search"/>
                    <div class="search__trigger"></div>
                </div>
            </div>
        </div>
        <div class="grid filter-grid">
            <div class="grid-8 img1 artist dance"></div>
            <div class="grid-4 img2 artist pop"></div>
            <div class="grid-4 img3 artist dance"></div>
            <div class="grid-4 img4 artist rock"></div>
            <div class="grid-4 img5 artist pop"></div>
            <div class="grid-8 img1 artist dance"></div>
            <div class="grid-4 img2 artist pop"></div>
        </div>
        <div class="grid module delay--2">
            <div class="grid-4">
                <div class="btn project-btn">
                    <div class="btn--style">
                        <a href="/HTML/projects.php" class="btn__link">more projects</a>
                        <div class="btn-color"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--include Contact -->
<?php include('includes/contact-us.html'); ?>

<!-- Footer -->
<?php include('includes/footer.html'); ?>