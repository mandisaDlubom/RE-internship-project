<!--include Header -->
<?php
$title = 'Rootslive projects';
$title_page = 'projects-page';
include('../includes/header.php');
?>


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
                        <li class="project-link" data-filter=".jazz">jazz</li>
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
            <div class="grid-4 img4 artist jazz"></div>
            <div class="grid-4 img5 artist pop"></div>
            <div class="grid-8 img1 artist dance"></div>
            <div class="grid-4 img2 artist jazz"></div>
            <div class="grid-4 img4 artist rock"></div>
            <div class="grid-4 img3 artist jazz"></div>
            <div class="grid-4 img5 artist pop"></div>
            <div class="grid-8 img1 artist jazz"></div>
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

<!-- include Contact -->
<?php include('../includes/contact-us.html'); ?>

<!-- include Footer -->
<?php include('../includes/footer.html'); ?>


