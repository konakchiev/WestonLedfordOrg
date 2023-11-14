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
                            <h6>Weston Ledford, Sun Prairie, WI, USA</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <ion-icon name="call-outline"></ion-icon>
                            <span>Call me</span>
                            <h6><a href="tel: (01) 608.469.2589">+ (01) 608.469.2589</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <ion-icon name="mail-outline"></ion-icon>
                            <span>Email me</span>
                            <h6><a href="mailto:WestonRLEdford@gmail.com">WestonRLedford@gmail.com</a></h6>
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