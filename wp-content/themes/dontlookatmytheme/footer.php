        <div class="site-footer">
            <div class="site-footer__column">
                <div class="site-footer__logo">
                    Alfa Toro
                </div>
                <div class="site-footer__copyright">
                    Copyright Alfa Toro, <?php print date( 'Y' ); ?>
                </div>
            </div>
            <div class="site-footer__column">
                <ul class="site-footer__menu">
                    <li>
                        <a href="<?php print site_url(); ?>">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>