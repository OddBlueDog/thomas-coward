<?php get_header(); ?>

<div class="container  margin-top--lg">
    <div class="row">
        <div class="col-md-8">
            <section id="content" role="main">
                <header class="header">
                    <h1 class="entry-title"><?php _e('Category Archives: ', 'thomascoward'); ?><?php single_cat_title(); ?></h1>
                    <?php if ('' != category_description()) echo apply_filters('archive_meta', '<div class="archive-meta">' . category_description() . '</div>'); ?>
                </header>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part('entry'); ?>
                <?php endwhile; endif; ?>
                <?php get_template_part('nav', 'below'); ?>
            </section>
        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>