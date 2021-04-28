<?php

$prev_text = sprintf(
	'%s <span class="nav-prev-text">%s</span>',
	'<span aria-hidden="true">&larr;</span>',
	__( 'Previous <span class="nav-short">Posts</span>', 'dontlookatmytheme' )
);
$next_text = sprintf(
	'<span class="nav-next-text">%s</span> %s',
	__( 'Next <span class="nav-short">Posts</span>', 'dontlookatmytheme' ),
	'<span aria-hidden="true">&rarr;</span>'
);

$posts_pagination = get_the_posts_pagination(
	array(
        'screen_reader_text' => ' ',
		'mid_size'  => 1,
		'prev_text' => $prev_text,
		'next_text' => $next_text,
	)
);

// If we're not outputting the previous page link, prepend a placeholder with `visibility: hidden` to take its place.
// if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
// 	$posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="prev page-numbers placeholder" aria-hidden="true">' . $prev_text . '</span>', $posts_pagination );
// }

// If we're not outputting the next page link, append a placeholder with `visibility: hidden` to take its place.
// if ( strpos( $posts_pagination, 'next page-numbers' ) === false ) {
// 	$posts_pagination = str_replace( '</div>', '<span class="next page-numbers placeholder" aria-hidden="true">' . $next_text . '</span></div>', $posts_pagination );
// }

if ( $posts_pagination ) : ?>

	<div class="pagination-wrapper">
		<?php echo $posts_pagination; ?>
	</div>

<?php endif; ?>