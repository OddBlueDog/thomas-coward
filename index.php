<?php get_header(); ?>
<div class="container margin-top--lg">
    <div class="row">
        <section class="col-md-8" id="content" role="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('entry'); ?>
                <?php comments_template(); ?>
                <hr>
            <?php endwhile; endif; ?>

            <?php get_template_part('nav', 'below'); ?>
        </section>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
