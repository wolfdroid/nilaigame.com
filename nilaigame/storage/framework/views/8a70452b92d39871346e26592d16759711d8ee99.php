<?php $__env->startSection('content'); ?>
<!--Banner Section -->
<div class="banner_text text-center">
    <div class="banner_text_iner">
        <div class = "fadeIn animated">
            <h1>Rekomendasi</h1>
        </div>
        <!-- Carousel -->
        <div class="fadeIn animated">
            <section id="slider">
                <input type="radio" name="slider" id="s1" checked>
                <input type="radio" name="slider" id="s2">
                <input type="radio" name="slider" id="s3">
                <input type="radio" name="slider" id="s4">
                <input type="radio" name="slider" id="s5">
                <!--Rekomendasi 1-->
                <label for="s1" id="slide1">
                    <button id="play-video_1" class="playbutton popup-youtube"
                    href="https://www.youtube.com/watch?v=hh9x4NqW0Dw"> 
                            <span class="fas fa-play"></span>
                    </button>
                </label>
                <!--Rekomendasi 2-->
                <label for="s2" id="slide2">
                    <button id="play-video_1" class="playbutton popup-youtube"
                    href="https://www.youtube.com/watch?v=hh9x4NqW0Dw"> 
                            <span class="fas fa-play"></span>
                    </button>
                </label>
                <!--Rekomendasi 3-->
                <label for="s3" id="slide3">
                    <button id="play-video_1" class="playbutton popup-youtube"
                    href="https://www.youtube.com/watch?v=hh9x4NqW0Dw"> 
                            <span class="fas fa-play"></span>
                    </button>
                </label>
                <!--Rekomendasi 4-->
                <label for="s4" id="slide4">
                    <button id="play-video_1" class="playbutton popup-youtube"
                    href="https://www.youtube.com/watch?v=hh9x4NqW0Dw"> 
                            <span class="fas fa-play"></span>
                    </button>
                </label>
                <!--Rekomendasi 5-->
                <label for="s5" id="slide5">
                    <button id="play-video_1" class="playbutton popup-youtube"
                    href="https://www.youtube.com/watch?v=hh9x4NqW0Dw"> 
                            <span class="fas fa-play"></span>
                    </button>
                </label>
            </section>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<!-- Footer Section -->
<div class="row justify-content-around">
        <!-- First Footer Part-->
        <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
                <h4>About</h4>
                <ul class="list-unstyled">
                    <li><a href="">About NilaiGame</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Help & Support</a></li>
                    <li><a href="">Term of Use</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <!-- Second Footer Part -->
        <div class="col-sm-6 col-lg-3">
            <div class="single_footer_part">
                <h4>Newsletter</h4>
                <p>Subscribe to our Newsletter</p>
                <div id="mc_embed_signup">
                    <form target="_blank"
                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get" class = "subscribe_form relative mail_part" required>
                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = ' Email Address '" required="" type="email">
                        <button type="submit" name="submit" id="newsletter-submit"
                            class="email_icon newsletter-submit button-contactForm">
                            <i class="far fa-paper-plane"></i>
                        </button>
                        <div class="mt-10 info"></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Third Footer Part -->
        <div class="col-sm-6 col-lg-3">
            <div class="single_footer_part">
                <img src="img/logo.png" class="footer_logo" alt="">
                <p>Indonesian Game Review Website</p>
            </div>
        </div>
    </div>

    <hr>
    <!-- COPYRIGHTS -->
    <div class="row">
        <div class="col-lg-6">
            <div class="center copyright_text">
                Copyright Enveriesage Studios &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
            </div>
        </div>
        <!-- Social Media ICON -->
        <div class="col-lg-6">
            <div class="footer_icon social_icon">
                <ul class="list-unstyled">
                    <li><a class="single_social_icon"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#" class="single_social_icon"><i class="fa fa-camera-retro"></i></a></li>
                    <li><a href="#" class="single_social_icon"><i class="fab fa-line"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\test\nilaigame2\resources\views/pages/index.blade.php ENDPATH**/ ?>