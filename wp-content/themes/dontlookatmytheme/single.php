<?php get_header(); ?>
<?php if ( have_posts() ) : the_post(); ?>
    <div class="post__main">
        <div class="post__header">
            <h1 class="post__title"><?php the_title(); ?></h1>
            <div class="post__metadata">
                <?php print get_the_author_meta( "display_name" ); ?>
            </div>
        </div>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>