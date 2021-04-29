<?php get_header(); ?>
    <div class="home__hero">
        <h1 class="home__hero-title">Welcome to Alfa Toro where we talk about stocks and building wealth</h1>
        <h2 class="home__hero-subheader">Join our community and stay up-to-date with our new posts</h2>
        <div class="home__subscribe-form">
            <form method="post" action="https://app.convertkit.com/forms/870463/subscriptions">
                <input type="email" name="email_address" class="home__subscribe-field" placeholder="Your email address" />
                <input type="submit" class="home__subscribe-submit" value="Subscribe">
                <input type="hidden" name="fields[site]" value="alfa-toro">
            </form>
        </div>
    </div>
    <main class="home__main">
        <div class="home__posts">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <article class="home__post">
                        <header class="home__header">
                            <h2 class="home__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="home__author">
                                <?php print get_the_author_meta( "display_name" ); ?>
                            </div>
                            <div class="home__post-date">
                                <?php print get_the_date( "F j, Y" ); ?>
                            </div>
                        </header>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="home__img">
                                <?php print get_the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="home__excerpt">
                            <?php the_excerpt(); ?>
                            <div class="home__action">
                                <a class="button" href="<?php the_permalink(); ?>">View Post</a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php get_template_part( 'template-parts/pagination' ); ?>
        </div>
        <!-- <div class="home__sidebar"></div> -->
    </main>
<?php get_footer(); ?>