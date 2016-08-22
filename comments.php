<?php if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) return; ?>
<section id="comments">
    <?php
    if (have_comments()) :
        global $comments_by_type;
        $comments_by_type = &separate_comments($comments);
        if (!empty($comments_by_type['comment'])) :
            ?>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="comments-title"><?php comments_number(); ?></h3>
                </div>
                <section id="comments-list" class="comments panel-body">
                    <?php if (get_comment_pages_count() > 1) : ?>
                        <nav id="comments-nav-above" class="comments-navigation" role="navigation">
                            <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
                        </nav>
                    <?php endif; ?>
                    <ul>
                        <?php wp_list_comments('type=comment'); ?>
                    </ul>
                    <?php if (get_comment_pages_count() > 1) : ?>
                        <nav id="comments-nav-below" class="comments-navigation" role="navigation">
                            <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
                        </nav>
                    <?php endif; ?>
                </section>
            </div>
            <?php
        endif;
        if (!empty($comments_by_type['pings'])) :
            $ping_count = count($comments_by_type['pings']);
            ?>
            <section id="trackbacks-list" class="comments">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ($ping_count > 1 ? __('Trackbacks', 'thomascoward') : __('Trackback', 'thomascoward')); ?></h3>
                    </div>

                    <div class="panel-body">
                        <ul>
                            <?php wp_list_comments('type=pings&callback=thomascoward_custom_pings'); ?>
                        </ul>
                    </div>

                </div>
            </section>


            <?php
        endif;
    endif;
    if (comments_open()) comment_form();
    ?>
</section>