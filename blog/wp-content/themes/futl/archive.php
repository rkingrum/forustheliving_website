<?php
    /*
     * Template Name: Archives
     */
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<section id="content" role="main">
    <h2 class="entry-title">Archives</h2>

    <?php if (have_posts()) { ?>

        <h4 class="archive_results">Posts for <?php echo get_query_var('monthnum').'/'.get_query_var('year'); ?></h4>

        <?php while (have_posts()) {
            the_post(); ?>

            <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h5>
                    <?php the_time('Y F j, g:i a'); ?> |
                    <?php the_category(', '); ?> |
                    <?php comments_number('No comments', '1 comment', '% comments'); ?>
                </h5>

                <?php the_content(); ?>

                <?php comments_template(); ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php get_search_form(); ?>

    <ul id="archives-page">
        <li id="monthly-archives">
            <h2>Months</h2>
            <ul>
                <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
            </ul>
        </li>
    </ul>

</section>

<?php get_footer(); ?>
