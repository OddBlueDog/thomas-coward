<?php
/**
 * Template Name: Homepage Template
 *
 * @package WordPress
 */
?>


<?php get_header(); ?>

<div class="home-banner__fake-space"></div>
<div class="home-banner">
    <div class="home-banner__img""
         style="background-image: url(<?php echo CFS()->get('homepage_banner_img'); ?>);"></div>
    <div class="home-banner__contents container">
        <?php echo CFS()->get('homepage_banner_text'); ?>
    </div>
<div class="home-banner__color-mask"></div>

</div>

<div class="white-wrapper white-wrapper--extra-padding-top">
    <section class="container" id="content" role="main">
        <div class="row margin-bottom--lg">
            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa-pop fa fa-5x  <?php echo CFS()->get('about_icon'); ?> aria-hidden="true"></i>
                <?php echo CFS()->get('about_info'); ?>
            </div>
            <div class="col-lg-4 col-md-6 text-center  margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('front_end_icon'); ?> aria-hidden="true"></i>
                <?php echo CFS()->get('front_end_text'); ?>
            </div>
            <div class="col-lg-4 col-md-6 text-center  margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('backend_icon'); ?> aria-hidden="true"></i>
                <?php echo CFS()->get('backend_text'); ?>
            </div>
            <div class="col-xs-12">
               <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('serverside_icon'); ?> aria-hidden="true"></i>
                <?php echo CFS()->get('serverside_text'); ?>
            </div>

            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('hobbies_icon'); ?> aria-hidden="true"></i>
                <?php echo CFS()->get('hobbies_text'); ?>
            </div>

            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa fa-pop fa-5x  <?php echo CFS()->get('freelance_icon'); ?> aria-hidden="true"></i>
                <?php echo CFS()->get('freelance_text'); ?>
            </div>
            
        </div>
    </section>
    <?php get_footer(); ?>
</div>

