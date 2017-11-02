<?php
/**
 * Template Name: Full Width Page
 *
 * @package ohanian
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<header>
    <div class="header-content">
        <div class="header-content-inner container">
            <div class="col-md-9">
		<h1 class="main-head">We are excited to announce...</h1>
                <img class="go-logo" src="./wp-content/uploads/Eden-Day-Spa-Logo.png" alt="goorthodontics" />
                <!-- <h3 class="doc-head">Eden Day Spa</h3> -->
<h4 class="address"><a href="https://goo.gl/maps/P5r3hiigFg92" target="_blank">411 San Anselmo Avenue <br />
San Anselmo, CA 94960</a></h4>
                <h2><a class="email-footer" href="tel:14154649111">415-464-9111</a></h2>
                <hr>



                <a href="https://www.secure-booker.com/edendayspa/MakeAppointment/Search.aspx" class="btn btn-primary btn-xl page-scroll">Make an Appointment</a>
            </div>
        </div>
    </div>
</header>

<!-- <section class="bg-primary" id="">

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center">
            <img class="ortho-logos" src="./wp-content/uploads/damonsystem.svg">
            </div>
            <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center">
            <img class="ortho-logos" src="./wp-content/uploads/invisalign.svg">
            </div>
            <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center">
            <img class="ortho-logos" src="./wp-content/uploads/invisalign-teen.svg">
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center">
            <img class="ortho-logos" src="./wp-content/uploads/aao.svg">
            </div>
            <div class="col-md-1 col-md-offset-0 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 text-center">
            <img class="abo" src="./wp-content/uploads/abo.png">
            </div>
        </div>
    </div>
</section> -->

<section id="contact" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h3 class="doc-head">Eden Day Spa</h3>
                <!-- <h2><a class="email-footer" href="mailto:info@goorthopasadena.com">info@goorthopasadena.com</a></h2> -->
                <h2><a class="email-footer" href="tel:14154649111">415-464-9111</a></h2>

                <h4 class="address"><a href="https://goo.gl/maps/P5r3hiigFg92" target="_blank">411 San Anselmo Avenue <br />
San Anselmo, CA 94960</a></h4>
            </div>
            <div class="col-lg-6 text-center">
            <h2 class="section-heading">We'd love to hear from you!</h2>

            <!-- Form Code -->
            <?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]'); ?>

            </div>
        </div>
    </div>
</section>

<aside class="bg-dark">
    <div class="container">
        <div class="col-lg-6 text-left">
            <div class="copyright">&#169; Eden Day Spa</div>
        </div>
        <div class="col-lg-6 text-right">
            <div class="copyright">Online Advantage By: Rooster Grin Media <img class="rg" src="./wp-content/uploads/roostergrin-logo.svg"></div>
        </div>
    </div>
</aside>

<?php
get_footer();
