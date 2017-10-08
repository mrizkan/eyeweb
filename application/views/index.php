<?php include ('inc/header.php'); ?>

<!-- Banner Section
=============================-->

<section class="home">
    <!-- Home Slider Banner -->

    <div id="slider" class="slider1 slider-light">
        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>	<!-- SLIDE  -->
                                                <?php foreach ($sliders as $slider): ?>
                    <li data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" >
                        <!-- MAIN IMAGE -->
                        <img src="<?=UP.$slider->Image ?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS  -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_bold_white skewfromrightshort customout"
                             data-x="170" data-y="200"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500" data-start="1200"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on" style="z-index: 4; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5)"><?=$slider->SliderTitle ?></div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption miami_content_light customin ltl"
                             data-x="340" data-y="275"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000" data-start="1500"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn" style="z-index: 14;"><?=$slider->ShortDescription ?></div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme start"
                             data-x="470" data-y="345"
                             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                             data-speed="1000" data-start="2000"
                             data-easing="Back.easeInOut"
                             data-endspeed="400"
                             data-endeasing="Back.easeIn" style="z-index: 14;"><a class="btn btn-type1" href="Contact-Us">Get a Free Consultation</a>                            </div>
                    </li>
                                <?php endforeach; ?>





                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>

    </div>
    <!-- END REVOLUTION SLIDER -->

    <!-- // Home Slider Banner -->
</section>

<!-- // Banner Section
=============================-->


<section class="top-bottom-spacing grey-bg">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-4 marbot10">
                    <h1>
                        <span class="fw-normal">Improve your Vision with </span>Eye with Us
                    </h1>
                </div>
                <!-- // Section 1 -->

                <div class="col-md-8">
                    <div class="row marbot20">
                        <!-- Section 2 -->
                        <div class="col-md-6">
                            <p class="fontresize">
                                We offers a complete range of eye care services including LASIK and PRK refractive surgery, eye exams, vision testing for glasses and contacts.
                            </p>
                            <p class="fontresize">
                                All Laser Lasik, Cornea &amp; Glaucoma, Laser Cataract Surgery, Brow lift services.
                            </p>
                        </div>
                        <!-- // Section 2 -->

                        <!-- Section 3 -->
                        <div class="col-md-6">
                            <p class="fontresize">
                                Cornea is the eye’s outermost layer. It is the clear, dome-shaped surface that covers the front of the eye.
                            </p>
                            <p class="fontresize">
                                Glaucoma is slowly damages the eyes and can causes vision loss.
                            </p>
                        </div>
                        <!-- // Section 3 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Content Section
================================================== -->
<section class="top-bottom-spacing white-bg">
    <div class="container">
        <div class="row animatedParent animateOnce" data-sequence='300'>
            <div class="hover-content-section">
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='2'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="pentagon">
                                <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                    <img src="<?= base_url('media/images/') ?>square01.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>Cornea &amp; Glaucoma</h4>

                        </div>
                        <p class="fontresize">
                            Cornea is the eye’s outermost layer. It is the clear, dome-shaped surface that covers the front of the eye.
                        </p>


                    </div>
                </div>
                <!-- cta 1 Section -->
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='2'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="pentagon">
                                <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                    <img src="<?= base_url('media/images/') ?>square01.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>Cornea &amp; Glaucoma</h4>

                        </div>
                        <p class="fontresize">
                            Cornea is the eye’s outermost layer. It is the clear, dome-shaped surface that covers the front of the eye.
                        </p>


                    </div>
                </div>

                <!-- cta 2 Section -->
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='3'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="pentagon">
                                <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                    <img src="<?= base_url('media/images/') ?>square02.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>All Laser Lasik</h4>

                        </div>
                        <p class="fontresize">
                            LASIK and PRK refractive surgery, eye exams, vision testing for glasses and contacts.
                        </p>
                    </div>
                </div>

                <!-- cta 3 Section -->
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='4'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="pentagon">
                                <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                    <img src="<?= base_url('media/images/') ?>square04.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>Laser Cataract Surgery</h4>

                        </div>
                        <p class="fontresize">
                            We are fully equipped with the most modern technology for performing sutureless cataract surgeries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content Section
================================================== -->

<!-- Center Banner Section
================================= -->
<section class="center-banner top-bottom-spacing banner-parallax">
    <div class="color-overlay"></div>
    <div class="container">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-8 animatedParent animateOnce">
                <div class="center-banner-content">
                    <div class="clearfix">
                        <div class="center-banner-title text-capitalize"><small class="label label-default">Limited time only</small></div>
                        <div class="offer">
                            RS.1500<small> For Glass</small>
                        </div>
                        <div class="center-banner-title">& we accept flex spending, accept all type of credit cards</div>
                    </div>
                    <a href="Contact-Us" class="btn btn-type1 btn-big text-uppercase growIn animated slowest">Schedule your free exam today <i class="fa fa-fw fa-chevron-right"></i></a>
                    <div class="row">
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-21 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Patient Care</h4>
                                <p class="fontresize">
                                    Both of our surgeons and most of our staff have had LASIK.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-hospital circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Local Care</h4>
                                <p class="fontresize">
                                    We work with over 400 optometrists across the Northwest.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-8 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Experience</h4>
                                <p class="fontresize">
                                    Our surgeons have performed over 100,000 LASIK.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Section -->

            <!-- Right Section -->
            <div class="col-md-4">

            </div>
            <!-- Right Section -->
        </div>
    </div>
</section>

<!-- // Center Banner Section
================================= -->

<?php include ('inc/footer.php'); ?>