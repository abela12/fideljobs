<!-- Contact Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Contact Wrapper Start -->
        <div class="contact-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Contact Info Start -->
                    <div class="contact-info">

                        <img class="shape animation-round" src="assets/images/shape/shape-12.png" alt="Shape">

                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="info-content">
                                <h6 class="title">Phone No.</h6>
                                <p><a href="tel:0922356323">+251 922-35-63-23</a></p>
                            </div>
                        </div>
                        <!-- Single Contact Info End -->
                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h6 class="title">Email Address.</h6>
                                <p><a href="mailto:abelberhanu6@gmail.com">abelberhanu6@gmail.com</a></p>
                            </div>
                        </div>
                        <!-- Single Contact Info End -->
                        <!-- Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-pin"></i>
                            </div>
                            <div class="info-content">
                                <h6 class="title">Office Address.</h6>
                                <p>Addis Abeba, Ethiopia</p>
                            </div>
                        </div>
                        <!-- Single Contact Info End -->
                    </div>
                    <!-- Contact Info End -->

                </div>
                <div class="col-lg-6">
                    <?php if ($msg != '') : ?>

                    <div class="<?php echo $msgClass ?> solid alert-dismissible fade show col-md-8">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <path
                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                            </path>
                        </svg>
                        <strong>Done!</strong> Message successfully sent 🌝
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span>
                        </button>
                    </div>

                    <?php endif; ?>

                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <h3 class="title">Get in Touch <span>With Us</span></h3>

                        <div class="form-wrapper">
                            <form id="contact-formc" action="" method="post">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                                <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
                                <!-- Single Form End -->
                                <p class="form-message"></p>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-dark w-100" type="submit" name="send">Send
                                        Message <i class="flaticon-right"></i></button>
                                </div>
                                <!-- Single Form End -->
                            </form>
                        </div>
                    </div>
                    <!-- Contact Form End -->

                </div>
            </div>
        </div>
        <!-- Contact Wrapper End -->

    </div>
</div>
<!-- Contact End -->