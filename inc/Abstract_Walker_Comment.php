<?php
/**
 * Comment API: Walker_Comment class
 *
 * @package WordPress
 * @subpackage Comments
 * @since 4.4.0
 */

/**
 * Core walker class used to create an HTML list of comments.
 *
 * @since 2.7.0
 *
 * @see Walker
 */
class Abstract_Walker_Comment extends Walker_Comment {

	/**
	 * What the class handles.
	 *
	 * @since 2.7.0
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = 'comment';

	/**
	 * Database fields to use.
	 *
	 * @since 2.7.0
	 * @var array
	 *
	 * @see Walker::$db_fields
	 * @todo Decouple this
	 */
	public $db_fields = array(
		'parent' => 'comment_parent',
		'id'     => 'comment_ID',
	);

	/**
	 * Outputs a comment in the HTML5 format.
	 *
	 * @since 3.6.0
	 *
	 * @see wp_list_comments()
	 *
	 * @param WP_Comment $comment Comment to display.
	 * @param int        $depth   Depth of the current comment.
	 * @param array      $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

		$commenter = wp_get_current_commenter();
		if ( $commenter['comment_author_email'] ) {
			$moderation_note = __( 'Your comment is awaiting moderation.' );
		} else {
			$moderation_note = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.' );
		}

		?>
		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
		<div class="avatar">
						<?php
						if ( 0 != $args['avatar_size'] ) {
							echo get_avatar( $comment, $args['avatar_size'],'','', array('class' => 'avatar') );
						}
						?>

		</div><!-- .comment-author -->
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-content">
			<div class="comment-info">
			<?php
							printf(
								/* translators: %s: Comment author link. */
								__( '%s ' ),
								sprintf( '<cite>%s</cite>', get_comment_author_link( $comment ) )
							);
						?>
			<div class="comment-meta">
					
						
							<time class="comment-time" datetime="<?php comment_time( 'c' ); ?>">
								<?php
									/* translators: 1: Comment date, 2: Comment time. */
									printf( __( '%1$s @ %2$s' ), get_comment_date( '', $comment ), get_comment_time() );
								?>
							</time>
							<span class="sep">/</span>
				<?php

$myclass = 'reply';
    echo preg_replace( '/comment-reply-link/', 'comment-reply-link ' . $myclass, 
        get_comment_reply_link(
					array_merge(
						$args,
						array(
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
						)
					)
				))
				?>
						
					


					<?php if ( '0' == $comment->comment_approved ) : ?>
					<em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
					<?php endif; ?>
			</div><!-- .comment-meta -->
		</div>

				<div class="comment-text">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->
				
			</article><!-- .comment-body -->
		<?php
	}
}
