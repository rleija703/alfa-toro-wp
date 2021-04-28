<?php get_header(); ?>
    <div class="hero">
        <h1>Join 50,000+ and get cutting-edge SEO tactics we don't share in public</h1>
        <h2>Join SEOs at Amazon, IBM & Cisco who get in-depth guides they can actually use</h2>
        <div class="subscribe-form"></div>
    </div>
    <main>
        <div class="blog-archive">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <article>
                        <header>
                            <h2><?php the_title(); ?></h2>
                            <div class="author">
                                <?php print get_the_author_meta( "display_name" ); ?>
                            </div>
                            <div class="post-date">
                                <?php print get_the_date( "F j, Y" ); ?>
                            </div>
                        </header>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div>
                                <?php print get_the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                            <div class="read-more">
                                <a href="<?php the_permalink(); ?>">View Post</a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="widget-sidebar"></div>
    </main>
<?php get_footer(); ?>