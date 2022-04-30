</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2022 Mexant Co., Ltd. All Rights Reserved.

                    <br>Designed by <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="<?= asset("vendor/jquery/jquery.min.js") ?>"></script>
<script src="<?= asset("vendor/bootstrap/js/bootstrap.min.js") ?>"></script>
<script src="<?= asset("assets/js/isotope.min.js") ?>"></script>
<script src="<?= asset("assets/js/owl-carousel.js") ?>"></script>
<script src="<?= asset("assets/js/wow.js") ?>"></script>
<script src="<?= asset("assets/js/tabs.js") ?>"></script>
<script src="<?= asset("assets/js/swiper.js") ?>"></script>
<script src="<?= asset("assets/js/custom.js") ?>"></script>
<script>
    var interleaveOffset = 0.5;

    var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        on: {
            progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },
            touchStart: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                        speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);
</script>
</body>

</html>