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
                <div class="col-md-4 marbot10">

                    <div class="marbot0 clearfix">
                        <div class="row">
                            <div class="col-md-12 marbot30">
                                <!-- Location -->
                                <div class="media media-base-align">
                                    <div class="media-left">
                                        <i class="flaticon-technology-6 color-light location-icon"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="contact-heading">Eye with Us Opticals</h3>
                                        <p class="fontresize marbot10">
                                            #91b, Old Galle Rd, Panadura 12500
                                        </p>
                                        <p class="fontresize">
                                            <span class="bold">Phone:+94 778 280 494</span>

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
                                        <div class="call marbot0"><a href="#" class="reverse">+94 778 280 494</a></div>
                                    </div>
                                </div>
                                <!-- // Appointment -->
                            </div>


                        </div>

                    </div>
                </div>
                <!-- // Section 1 -->


                <!-- Section 2 -->
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1618.4729574995918!2d79.90192238120102!3d6.746044362822876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245e948f3f1f9%3A0x97a863c1497603c6!2sEyewithus+Opticals!5e0!3m2!1sen!2slk!4v1507947705277" width="100%" height="285" frameborder="0" style="border:0" allowfullscreen></iframe>
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

<?php $this->view('inc/footer.php'); ?>
