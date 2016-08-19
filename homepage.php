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
    <div class="home-banner__img"
    "
    style="background-image: url(<?php echo CFS()->get('homepage_banner_img'); ?>);">
</div>
<div class="home-banner__contents container">
    <?php echo CFS()->get('homepage_banner_text'); ?>
</div>
<div class="home-banner__color-mask"></div>

</div>

<div class="white-wrapper white-wrapper--extra-padding-top">
    <section class="container" id="content" role="main">
        <div class="row margin-bottom--lg">
            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa-pop fa fa-5x  <?php echo CFS()->get('about_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('about_info'); ?>
            </div>
            <div class="col-lg-4 col-md-6 text-center  margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('front_end_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('front_end_text'); ?>
            </div>
            <div class="col-lg-4 col-md-6 text-center  margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('backend_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('backend_text'); ?>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('serverside_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('serverside_text'); ?>
            </div>

            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('hobbies_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('hobbies_text'); ?>
            </div>

            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa fa-pop fa-5x  <?php echo CFS()->get('freelance_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('freelance_text'); ?>
            </div>

        </div>

    </section>

    <div class="vjs-wrapper">
        <div class="vjs-wrapper__background">
            <div class="vjs-wrapper__text-layer">
                <div class="container text-center">
                    <h2><?php echo CFS()->get('portfolio_title'); ?></h2>
                    <?php echo CFS()->get('portfolio_text'); ?>
                </div>
            </div>
        </div>
        <div class="vjs-youtube">
            <video
                id="vid1"
                class="video-js vjs-default-skin  "
                autoplay
                width="100%" height="100%"
                loop
                data-setup='{ "controlBar": false, "loadingSpinner": false, "textTrackDisplay": true, "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=QhCX2ypRDM0"}] }'
            >
        </div>
    </div>


    <?php get_footer(); ?>
</div>

