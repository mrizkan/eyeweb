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
                             data-endeasing="Back.easeIn" style="z-index: 14;"><a class="btn btn-type1" href="<?=$slider->Url ?>"><?=$slider->Description ?></a>                            </div>
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
                        <span class="fw-normal">Improve your Vision with </span>Eye with Us Opticals
                    </h1>
                </div>
                <!-- // Section 1 -->

                <div class="col-md-8">
                    <div class="row marbot20">
                        <!-- Section 2 -->
                        <div class="col-md-12">
                            <p class="fontresize">
                                <h1><span class="fw-normal">Optometry Clinic & Optical Shop</span></h1>
                                Whether you have the Eye with Us Opticls, Eye med, Vision Service Plan or are Private pay, you can shedule an appointment with us for a comprehensive eye examination and/or have your eyeglass or contact lens prscriptions filled at our optical shop.
                            </p>


                        </div>

                        <!-- // Section 2 -->

                        <!-- Section 3 -->
                       <!-- <div class="col-md-6">
                            <p class="fontresize">
                                Cornea is the eye’s outermost layer. It is the clear, dome-shaped surface that covers the front of the eye.
                            </p>
                            <p class="fontresize">
                                Glaucoma is slowly damages the eyes and can causes vision loss.
                            </p>
                        </div>-->
                        <!-- // Section 3 -->
                    </div>
                </div>
                <div class="col-md-4 marbot10">
                    <img src="<?= base_url('media/images/') ?>aaa.jpg" alt=" " class="img-responsive">
                </div>
                <div class="col-md-8">
                    <div class="row marbot20">
                        <div class="col-md-6">
                            <p class="fontresize">
                            <h1><span class="fw-normal">Optician</span></h1>
                            An <b>Optician</b>, or dispensing optician, is a technical practitioner who designs, fits and dispenses corrective lenses for the correction of a person's vision. <b>Opticians</b> determine the specifications of various ophthalmic appliances that will give the necessary correction to a preson's eyesight.
                            </p>


                        </div>
                        <div class="col-md-6">
                            <p class="fontresize">
                            <h1><span class="fw-normal">Optometrist</span></h1>
                            An <b>Optometrist</b> is an eye doctor who has earned the Doctor of <b>Optometry</b>(OD) degree.<b>Optometrists</b> examine eyes for both vison and health problems, incorect reflective errors by prescribing eyeglasses and contact lenses. Some <b>Optometrists</b> also provide low vision care and vision therapy. Recomended for You.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row marbot20">
                        <div class="col-md-12">
                        <p class="fontresize">
                        <h1><span class="fw-normal">Optometry Clinic</span></h1>
                        You may be Surprised to learn that yearly eye exams are an easy and important way to protect your eyes and overall health. A routine eye examination can help detect signs of serious health conditions, such as diabetes, high blood pressure , high cholesterol, autoimmune disorders, and even some cancers/tumors.<br>
                        Periodic eye and vision examinations are an important part of preventive health care. Many eye and vision problems have no obvious signs or symptoms. As a result, individuals are often unaware that problems exist. Early diagnosis and treatment of eye and vision problems are important for maintaining good vision and eye health, and when possible preventing vision loss.
                        </p>
                        </div>
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
                                    <img src="<?= base_url('media/images/') ?>square011.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>Common Vision Problems</h4>

                        </div>
                        <p class="fontresize">
                            The Most Common vision problems are reflective errors, more commonly known as nearsightedness, farsightedness, astigmatism and presbyopia.<!-- Reflective errors occur when the shape of the eye prevents light from focusing directly on the retina. The lenght of the eyeball (either longer or shorter), changes in the shape of the cornea, or aging of the lens can cause refreactive errors. Most people have one or more of these conditions.-->
                        </p>


                    </div>
                </div>
                <!-- cta 1 Section -->
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='2'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="pentagon">
                                <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                    <img src="<?= base_url('media/images/') ?>square012.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>Low vision</h4>

                        </div>
                        <p class="fontresize">
                            Low vision is a visual impairment, not correctable by standard glasses, contact lenses, medicine, or surgery, that interferes with a person's ability to perform everyday activities.
                        </p>


                    </div>
                </div>

                <!-- cta 2 Section -->
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='3'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="pentagon">
                                <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                    <img src="<?= base_url('media/images/') ?>square04.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>Refraction</h4>

                        </div>
                        <p class="fontresize">
                            Refraction is the bending of light as it passes through one object to another. Vision occurs when light rays are bent (refracted) as they pass through the cornea and the lens.<!-- The light is then focused on the retina. The retina converts the light-rays into messages that are sent through the optic nerve to the brain. The brain interprets these messages into the images we see.-->
                        </p>
                    </div>
                </div>

                <!-- cta 3 Section -->
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='4'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="pentagon">
                                <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                    <img src="<?= base_url('media/images/') ?>square55.jpg" alt=" " class="img-responsive">
                                </div>
                            </div>
                            <h4>common eye disease and disorders</h4>

                        </div>
                        <p class="fontresize">
                           Glaucoma Cataract, Keratitis, Allergic Conjunctivitis, Sclerits, Iritis, Pterygium, Chazion, Pinkeys, Diabetic Retinopathy, Caratoconus.
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
                            <?php foreach ($offers as $offer): ?>
                            Rs.<?=$offer->PriceRangeTo ?><small> For <?=$offer->OfferProductTitle ?></small>
                        </div>
                        <div class="center-banner-title"><?=$offer->ShortDescription ?></div>
                    </div>
                            <?php endforeach ?>
                    <a href="<?= base_url('Products') ?>" class="btn btn-type1 btn-big text-uppercase growIn animated slowest">See Our Products <i class="fa fa-fw fa-chevron-right"></i></a>
                    <div class="row">

                        <div class="col-md-6 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-8 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Our Vision</h4>
                                <p class="fontresize">
                                    We hope to make Perfectible Vision to each and other.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-8 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Our Mission</h4>
                                <p class="fontresize">
                                   Customer Satisfy with Honesty and integrity.
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