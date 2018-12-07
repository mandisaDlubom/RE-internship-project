<!--include Header -->
<?php
$title = 'Contact us';
$title_page = 'contact-page';
include('../includes/header.php');
?>

<!-- Contact -->
<section class="about full-width about--about">
    <div class="container">
        <div class="grid justify--center">
            <div class="grid-6">
                <h2>contact us</h2>
                <div class="form-wrapper">
                    <div class="top">
                        <div class="colors"></div>
                    </div>
                    <form name="form" action="#">
                        <div class="contact-form">
                            <div class="form-item">
                                <i class="far fa-user icon"></i> <input id="name" type="text" name="text"
                                                                        required="required" placeholder="Name"
                                                                        autocomplete="off">
                            </div>
                            <div class="form-item">
                                <i class="fas fa-phone icon"></i> <input type="text" name="text" required="required"
                                                                         placeholder="Phone" autocomplete="off">
                            </div>
                            <div class="form-item">
                                <i class="far fa-envelope icon"></i> <input type="email" id="email" name="email"
                                                                            required="required" placeholder="E-Mail"
                                                                            autocomplete="off">
                            </div>
                            <div class="form-item h120">
                                <i class="fas fa-pencil-alt icon"></i><textarea name="text" class="feedback-input"
                                                                                id="comment"
                                                                                placeholder="Ask about..."></textarea>

                            </div>
                        </div>
                    </form>
                    <div class="btn send-btn">
                        <div class="btn--style">
                            <a href="#" class="btn__link">send</a>
                            <div class="btn-color"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The team -->
<section class="blog-container">
    <div class="grid container module delay--2">
        <div class="grid-12">
            <h2>Meet the Team</h2>
        </div>
    </div>
    <div class="grid container mt50  module delay--6">
        <div class="grid-4">
            <div class="blog ml0">
                <div class="blog__img employer1">
                    <div class="overlay-img">
                        <h3 class="employer__name">Name Surname</h3>
                        <div class="info-block">
                            <span class="job-title visible-xs">Job Title</span>
                            <span class="employer__number">093 457003 4593</span>
                            <a class="employer__email" href="mailto:someone@example.com?Subject=Hello%20again"
                               target="_top">someone@example.com</a>
                        </div>
                    </div>
                </div>
                <span class="job-title hidden-xs">Job Title</span>
            </div>
        </div>
        <div class="grid-4">
            <div class="blog">
                <div class="blog__img employer2">
                    <div class="overlay-img">
                        <h3 class="employer__name">Name Surname</h3>
                        <div class="info-block">
                            <span class="job-title visible-xs">Job Title</span>
                            <span class="employer__number">093 457003 4593</span>
                            <a class="employer__email" href="mailto:someone@example.com?Subject=Hello%20again"
                               target="_top">someone@example.com</a>
                        </div>
                    </div>
                </div>
                <span class="job-title hidden-xs">Job Title</span>
            </div>
        </div>
        <div class="grid-4">
            <div class="blog  mr30">
                <div class="blog__img employer3">
                    <div class="overlay-img">
                        <h3 class="employer__name">Name Surname</h3>
                        <div class="info-block">
                            <span class="job-title visible-xs">Job Title</span>
                            <span class="employer__number">093 457003 4593</span>
                            <a class="employer__email" href="mailto:someone@example.com?Subject=Hello%20again"
                               target="_top">someone@example.com</a>
                        </div>
                    </div>
                </div>
                <span class="job-title hidden-xs">Job Title</span>
            </div>
        </div>
    </div>
</section>

<!--include Footer -->
<?php include('../includes/footer.html'); ?>
