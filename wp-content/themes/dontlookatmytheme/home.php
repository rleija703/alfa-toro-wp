<?php get_header(); ?>
    <div class="hero">
        <h1>Join 50,000+ and get cutting-edge SEO tactics we don't share in public</h1>
        <h2>Join SEOs at Amazon, IBM & Cisco who get in-depth guides they can actually use</h2>
        <div class="subscribe-form"></div>
    </div>
    <main class="archive">
        <div class="archive__posts">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <article class="archive__post">
                        <header class="archive__header">
                            <h2 class="archive__title"><?php the_title(); ?></h2>
                            <div class="archive__author">
                                <?php print get_the_author_meta( "display_name" ); ?>
                            </div>
                            <div class="archive__post-date">
                                <?php print get_the_date( "F j, Y" ); ?>
                            </div>
                        </header>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="archive__img">
                                <?php print get_the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="archive__excerpt">
                            <?php the_excerpt(); ?>
                            <div class="archive__action">
                                <a class="button" href="<?php the_permalink(); ?>">View Post</a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="archive__sidebar"></div>
    </main>
<?php get_footer(); ?>