<?php
/**
 * Template Name: Homepage Template
 *
 * @package WordPress
 */
?>


<?php get_header(); ?>

<div class="home-banner__fake-space" id="home"></div>
<div class="home-banner">
    <div class="home-banner__img"
    "
    style="background-image: url(<?php echo CFS()->get('homepage_banner_img'); ?>);">
</div>
<div class="home-banner__contents">
    <div class="container">
        <?php echo CFS()->get('homepage_banner_text'); ?>
        <div class="home-banner__social-links">
            <a target="_blank" href="<?php echo CFS()->get('linkedin_link')['url']; ?>">
                <i class="fa fa-linkedin-square fa-3x"></i></a>
            <a target="_blank" href="<?php echo CFS()->get('github_link')['url']; ?>">
                <div class="fa fa-github-square fa-3x"></div>
            </a>
        </div>
    </div>


</div>
<div class="home-banner__color-mask"></div>

</div>

<div class="white-wrapper white-wrapper--extra-padding-top">
    <section class="container" id="content" role="main">
        <div class="row margin-bottom--lg" id="aboutme">
            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa-pop fa fa-5x  <?php echo CFS()->get('about_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('about_info'); ?>
            </div>
            <div class="col-lg-4 col-md-6 text-center  margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('front_end_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('front_end_text'); ?>

                <?php
                $fields = CFS()->get('front_end_labels');
                foreach ($fields as $field) {
                    ?> <span class="label label-primary"> <?php echo $field['front_end_label']; ?> </span> <?php
                }
                ?>

            </div>
            <div class="col-lg-4 col-md-6 text-center  margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('backend_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('backend_text'); ?>

                <?php
                $fields = CFS()->get('backend_labels');
                foreach ($fields as $field) {
                    ?> <span class="label label-primary"> <?php echo $field['backend_label']; ?> </span> <?php
                }
                ?>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center margin-bottom--lg">
                <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('serverside_icon'); ?> aria-hidden=" true"></i>
                <?php echo CFS()->get('serverside_text'); ?>

                <?php
                $fields = CFS()->get('serverside_labels');
                foreach ($fields as $field) {
                    ?> <span class="label label-primary"> <?php echo $field['serverside_label']; ?> </span> <?php
                }
                ?>
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

    <div class="vjs-wrapper" id="portfolio">
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
                id="portfolio-video"
                class="video-js vjs-default-skin  "
                width="100%" height="100%"
                loop
                autoplay
                preload="auto"
                data-setup='{ "controlBar": false, "loadingSpinner": false, "textTrackDisplay": true, "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=QhCX2ypRDM0"}] }'
            >
        </div>
    </div>

    <?php
    $fields = CFS()->get('portfolio_projects');
    foreach ($fields as $field) {
        ?>
        <div class="portfolio__project">
            <div class="portfolio__project__overlay">
                <i class="fa fa-4x fa-hand-pointer-o" aria-hidden="true"></i>
            </div>
            <img class="portfolio__project__img" src="<?php echo $field['portfolio_img']; ?>"
                 alt="<?php echo $field['portfolio_title']; ?>"/>
            <div class="portfolio__project__text">
                <h3><?php echo $field['portfolio_title']; ?></h3>
                <p><?php echo $field['portfolio_text']; ?></p>
                <a target="_blank" href="<?php echo $field['portfolio_link']['url']; ?>"
                   class="btn btn-primary">Visit</a>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="clear"></div>
    <div class="grey-wrapper">
        <div class="container" id="contactme">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>Contact Me</h2>
                    <br/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <?php echo do_shortcode('[contact-form-7 id="263" title="Contact form 1"]') ?>
                </div>

                <div class="col-xs-12 col-md-6 text-center">
                    <i class="fa fa-pop  fa-5x  <?php echo CFS()->get('contact_icon'); ?> aria-hidden=" true"></i>
                    <br/>
                    <br/>
                    <?php echo CFS()->get('contact_text'); ?>

                </div>

            </div>
        </div>
    </div>


    <?php get_footer(); ?>
</div>

