<?php $this->view('inc/header.php'); ?>

<!-- Banner Section
================================= -->

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-02 subbanner-type-2 subbanner-type-2-btn">
    <div class="container">
        <div class="subbanner-content banner-content">
            <div class="skew-effect fadeInLeft animated">
                <span class="fw-normal">Schedule </span>Appointment				</div>
            <ol class="breadcrumb text-left fadeInRight animated">
                <li><a href="/">Home</a></li>
                <li><a href="javascript: void (0)">Schedule Appointment</a></li>
            </ol>
        </div>
    </div>

</section>

<!-- // Banner Section
================================= -->

<!-- Services Section
================================================== -->

<section class="top-bottom-spacing grey-bg">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-4">
                    <div class="heading marbot40">
                        <h2>Fix appointment with Us</h2>
                        <p class="fontresize marbot0">Please bring to your appointment any available medical records, including images such as x-rays and MRI.  Please fill out the appointment request form here.	</p>

                    </div>

                    <div class="appointment-sidebar panel panel-body panel-grey bottom-right marbot40">
                        <ul class="cont-det">
                            <li class="border-seperator">
                                <h4>Inquiries</h4>
                                <a href="#" class="reverse fw-500">
                                    <i class="fa fa-fw flaticon-clock location-icon color-light"></i> +94 778 280 494
                                </a>
                            </li>

                            <li>
                                <h4>Appointment by mail</h4>
                                <a href="mailto:rizwan@eyewithus.com?subject=Appoinment" class="reverse fw-500">
                                    <i class="fa fa-fw flaticon-symbol location-icon color-light"></i> rizwan@eyewithus.com
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- // Section 1 -->

                <!-- Section 2 -->
                <div class="col-md-8">
                    <form id="appointmentform" class="appointment panel panel-body marbot40 panel-grey">
                        <h3>Fix an appointment</h3>
                        <!-- Dropdown List -->
                        <div class="row clearfix">


                            <div class="col-md-6">

                            </div>
                        </div>
                        <!-- Dropdown List -->

                        <!-- Form Section -->
                        <div class="row clearfix">
                            <div class="clearfix">
                                <div class="col-md-6">
                                    <div class="clearfix form-group">
                                        <label>First Name</label>
                                        <input name="firstname" type="text" required="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="clearfix form-group">
                                        <label for="lastname">Last Name</label>
                                        <input name="lastname" type="text" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="clearfix marbot20">
                                            <label for="date-time">Select Date</label>
                                            <div id="datetimepicker" class="input-group date form_datetime" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
                                                <input name="dt" type="text" required="" value="" id="date-time" readonly>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input1" required=""  value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone-number">Phone number</label>
                                        <input name="phone" type="text" required="" placeholder="">
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="row clearfix">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="message">Please Select Below</label>
                                    <!--<textarea class="form-control" rows="4" id="message"> </textarea>-->
                                    <select name="consulting" class="select reason-option" required="required">
                                        <option value=""> --- --- Select Below --- --- </option>
                                        <option value="I Would Like to Book a Consultation">I Would Like to Book a Consultation</option>
                                        <option value="I would like to Refrection(Vision checkup )">I would like to Refrection(Vision checkup )</option>
                                        <option value="I want to replace my lenses ">I want to replace my lenses </option>
                                        <option value="I would like to go for a new design frame ">I would like to go for a new design frame </option>
                                        <option value="Cataract treatment information">Cataract treatment information</option>
                                        <option value="Keratoconus  Treatment information">Keratoconus  Treatment information</option>
                                        <option value="I would like to Bye a contact lens. ">I would like to Bye a contact lens. </option>
                                        <option value="I want to make a full service for my spectacle">I want to make a full service for my spectacle</option>
                                        <option value="I need some advice for surgical treatment ">I need some advice for surgical treatment </option>
                                        <option value="Any other Diseases or Disorders information ">Any other Diseases or Disorders information </option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-3">

                            </div>
                        </div>

                        <div class="row clearfix marbot30">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" required="" rows="4"> </textarea>
                                </div>
                            </div>

                            <div class="col-md-3">

                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div id="status"></div>
                                <button type="submit" class="btn btn-type1-reverse">Book Appointment</button>
                            </div>
                        </div>
                        <!-- // Form Section -->
                    </form>
                    <div id="post_message"><p class="fontresize"> </p></div>

                </div>
                <!-- // Section 2 -->


                <script src="<?= base_url('media/js/') ?>jquery-1.11.1.min.js"></script>
                <script src="<?= base_url('media/js/') ?>bootstrap.min.js"></script>

                <script>

                    // this is the id of the form
                    $(document).ready(function(){

                        $("#appointmentform").submit(function(e) {
                            //  e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: '<?= base_url('Home/appointment_mail') ?>',
                                data: $(this).serialize(), // serializes the form's elements.
                                success: function(data)
                                {
                                    $('#status').html('<p  class="fontresize text-center color-light bold">Appointment Request Sent, We will Call back.</p>');
                                    $('#appointmentform')[0].reset();
                                }
                            });
                            return false;
                        });

                    });
                </script>



            </div>
        </div>
    </div>
</section>

<!-- // appointment form Section
================================================== -->


<?php $this->view('inc/footer.php'); ?>