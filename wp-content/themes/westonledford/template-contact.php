<?php
/*
Template name: Contact
*/
get_header();
?>

<section class="contact--section2">
    <div class="container">
        <h1>Contact us</h1>
        <p>
            Get in touch with us at anytime. We aim to respond in 24 hours to all inquiries.
        </p>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Location</span>
                            <h6>Integral Worldwide Ltd., Mulberry Grove
                                Wokingham, RG40 9NN England</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <ion-icon name="call-outline"></ion-icon>
                            <span>Call us</span>
                            <h6>+1(0)207.122.4127</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="row">

                        <div class="col-lg-12">
                            <ion-icon name="mail-outline"></ion-icon>
                            <span>Email us</span>
                            <h6>info@westonledford.org</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php echo do_shortcode('[contact-form-7 id="847228d" title="Contact form 1"]'); ?>
        </div>
    </div>
</div>
</section>




<?php
get_footer();
?>