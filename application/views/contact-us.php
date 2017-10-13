<?php $this->view('inc/header.php'); ?>


<!-- Banner Section
================================= -->

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-02 subbanner-type-2 subbanner-type-2-btn">
    <div class="container">
        <div class="subbanner-content banner-content">
            <div class="skew-effect fadeInLeft animated">
                <span class="fw-normal">Contact</span> Us            </div>
            <ol class="breadcrumb text-left fadeInRight animated">
                <li><a href="/">Home</a></li>
                <li><a href="#"> Contact </a></li>

            </ol>
        </div>
    </div>

</section>

<!-- // Banner Section
================================= -->



<!-- Location Section
================================================== -->

<section class="top-bottom-spacing white-bg">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-8 marbot10">

                    <div class="marbot0 clearfix">
                        <div class="row">
                            <div class="col-md-6 marbot30">
                                <!-- Location -->
                                <div class="media media-base-align">
                                    <div class="media-left">
                                        <i class="flaticon-technology-6 color-light location-icon"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="contact-heading">Princeton, New Jersy</h3>
                                        <p class="fontresize marbot10">
                                            #13, 6th Avenue, 3rd Cross Street, <br />
                                            Princeton, NJ 36310.
                                        </p>
                                        <p class="fontresize">
                                            <span class="bold">Phone:(255)-567-1234</span> <br />
                                            Fax:(255)-567-1234
                                        </p>
                                    </div>
                                </div>
                                <!-- // Location -->

                                <!-- Appointment -->
                                <div class="media media-base-align">
                                    <div class="media-left">
                                        <i class="flaticon-clock color-light location-icon"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="contact-heading">Make an appointment</h3>
                                        <div class="call marbot0"><a href="#" class="reverse">+1-234-567-8900</a></div>
                                    </div>
                                </div>
                                <!-- // Appointment -->
                            </div>

                            <div class="col-md-6 marbot30">
                                <p class="fontresize">
                                    Sign-up using the form or call us at <span class="bold">+1-234-567-8900</span> to take advantage of this exclusive offer.
                                </p>

                                <div class="border-seperator"></div>
                                <p class="fontresize"> Ordering your <span class="bold">contact lenses with no prescription</span> through below button, its very simple. </p>


                            </div>
                        </div>

                    </div>
                </div>
                <!-- // Section 1 -->


                <!-- Section 2 -->
                <div class="col-md-4">
                    <div class="panel panel-body panel-dark-grey bottom-right marbot0">
                        <div class="panel-title">
                            <h3 class="text-center">Working Hours</h3>
                        </div>
                        <p class="fontresize text-center color-light bold">
                            Open 24 Hours Every Day Of The Year!
                        </p>
                        <div class="working-hours working-hours-type1">
                            <dl class="dl-horizontal">
                                <dt> Monday </dt>
                                <dd>08:30 AM - 19:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt> Tuesday </dt>
                                <dd>08:30 AM - 16:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt> Wednesday </dt>
                                <dd>08:30 AM - 17:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt> Thursday </dt>
                                <dd>08:30 AM - 15:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt> Friday </dt>
                                <dd>08:30 AM - 14:30 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt> Sat &amp; Sun </dt>
                                <dd>Closed</dd>
                            </dl>

                        </div>
                    </div>
                </div>
            </div>
            <!-- // Section 2 -->
        </div>
    </div>
</section>

<!-- // Location Section
================================================== -->

<!--  Contact map Section
================================================== -->

<section class="top-bottom-spacing-full contact-bg grey-bg">

    <div class="container">
        <div class="heading text-center marbot50">
            <h2> Contact Form</h2>
            <p class="fontresize">To get in touch, complete this form and we'll get back to you as quickly as possible.</p>
        </div>

        <div class="row animatedParent animateOnce">
            <div class="col-md-12 fadeInUp animated">

                <form  id="contactform">
                    <div class="row clearfix">

                        <div class="col-md-5">

                            <div class="clearfix control-group">
                                <input name="name" type="text" required=""  placeholder="Name"/>
                            </div>

                            <div class="clearfix control-group">
                                <input name="email" type="text" required=""  placeholder="Email" />
                            </div>

                            <div class="clearfix control-group">
                                <input name="phone" type="text" required=""  placeholder="Phone" />
                            </div>

                        </div>

                        <div class="col-md-7">
                            <div class="clearfix control-group">
                                <textarea name="message" required="required" placeholder="Message"></textarea>
                            </div>
                            <div class="clearfix">
                                <div id="status"></div>
                                <button type="submit" class="btn btn-type1-reverse"> Submit </button>

                            </div>
                        </div>

                    </div>
                </form>


            </div>
        </div>
    </div>

</section>

<script src="<?= base_url('media/js/') ?>jquery-1.11.1.min.js"></script>
<script src="<?= base_url('media/js/') ?>bootstrap.min.js"></script>

<script>

    // this is the id of the form
    $(document).ready(function(){

        $("#contactform").submit(function(e) {
            //  e.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?= base_url()?>/home/ajax_mail',
                data: $(this).serialize(), // serializes the form's elements.
                success: function(data)
                {
                    $('#status').html('<p  class="fontresize text-center color-light bold">Your Query Sent Successfully We will Contact you Soon</p>');
                    $('#contactform')[0].reset();
                }
            });
            return false;
        });

    });
</script>

<!-- // Contact map Section
================================================== -->

<!-- Map Section
================================================== -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821.5864029730557!2d79.90085682915584!3d6.746959331512622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDQnNDkuMSJOIDc5wrA1NCcwNS4xIkU!5e1!3m2!1sen!2slk!4v1507279615661" width="100%" height="450" frameborder="0" style="border:0; margin-bottom: -7px" allowfullscreen></iframe>
<!-- // Map Section
================================================== -->

<?php $this->view('inc/footer.php'); ?>
