<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abstract
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="comments-wrap">
			<div id="comments" class="row">
				<div class="col-full">

               

               <!-- commentlist -->
               <ol class="commentlist">

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>Itachi Uchiha</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
	                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
	                     </div>

	                  </div>

                  </li>

                  <li class="thread-alt depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>John Doe</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T24:05">Jul 12, 2014 @ 24:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
	                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
	                        tantas semper delicatissimi.</p>                        
	                     </div>

	                  </div>

                     <ul class="children">

                        <li class="depth-2">

                           <div class="avatar">
                              <img width="50" height="50" class="avatar" src="images/avatars/user-03.jpg" alt="">
                           </div>

                           <div class="comment-content">

	                           <div class="comment-info">
	                              <cite>Kakashi Hatake</cite>

	                              <div class="comment-meta">
	                                 <time class="comment-time" datetime="2014-07-12T25:05">Jul 12, 2014 @ 25:05</time>
	                                 <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                              </div>
	                           </div>

	                           <div class="comment-text">
	                              <p>Duis sed odio sit amet nibh vulputate
	                              cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
	                              cursus a sit amet mauris</p>
	                           </div>

                           </div>

                           <ul class="children">

                              <li class="depth-3">

                                 <div class="avatar">
                                    <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                                 </div>

                                 <div class="comment-content">

	                                 <div class="comment-info">
	                                    <cite>John Doe</cite>

	                                    <div class="comment-meta">
	                                       <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
	                                       <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                    </div>
	                                 </div>

	                                 <div class="comment-text">
	                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
	                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
	                                 </div>

                                 </div>

                              </li>

                           </ul>

                        </li>

                     </ul>

                  </li>

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-02.jpg" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>Shikamaru Nara</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
	                     </div>

                     </div>

                  </li>

               </ol> <!-- Commentlist End -->					

               <!-- respond -->
               <div class="respond">

               	<h3>Leave a Comment</h3>

                  <form name="contactForm" id="contactForm" method="post" action="">
  					   <fieldset>

                     <div class="form-field">
  						      <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                     </div>

                     <div class="form-field">
  						      <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                     </div>

                     <div class="form-field">
  						      <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                     </div>

                     <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                     </div>

                     <button type="submit" class="submit button-primary">Submit</button>

  					   </fieldset>
  				      </form> <!-- Form End -->

               </div> <!-- Respond End -->

         	</div> <!-- end col-full -->
         </div> <!-- end row comments -->

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3>
			<?php
			$abstract_comment_count = get_comments_number();
			if ( '1' === $abstract_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'abstract' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $abstract_comment_count, 'comments title', 'abstract' ) ),
					number_format_i18n( $abstract_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>
<ol class="commentlist">

<li class="depth-1">

   <div class="avatar">
	  <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
   </div>

   <div class="comment-content">

	   <div class="comment-info">
		  <cite>Itachi Uchiha</cite>

		  <div class="comment-meta">
			 <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
			 <span class="sep">/</span><a class="reply" href="#">Reply</a>
		  </div>
	   </div>

	   <div class="comment-text">
		  <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
		  facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
	   </div>

	</div>

</li>

<li class="thread-alt depth-1">

   <div class="avatar">
	  <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
   </div>

   <div class="comment-content">

	   <div class="comment-info">
		  <cite>John Doe</cite>

		  <div class="comment-meta">
			 <time class="comment-time" datetime="2014-07-12T24:05">Jul 12, 2014 @ 24:05</time>
			 <span class="sep">/</span><a class="reply" href="#">Reply</a>
		  </div>
	   </div>

	   <div class="comment-text">
		  <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
		  urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
		  tantas semper delicatissimi.</p>                        
	   </div>

	</div>

   <ul class="children">

	  <li class="depth-2">

		 <div class="avatar">
			<img width="50" height="50" class="avatar" src="images/avatars/user-03.jpg" alt="">
		 </div>

		 <div class="comment-content">

			 <div class="comment-info">
				<cite>Kakashi Hatake</cite>

				<div class="comment-meta">
				   <time class="comment-time" datetime="2014-07-12T25:05">Jul 12, 2014 @ 25:05</time>
				   <span class="sep">/</span><a class="reply" href="#">Reply</a>
				</div>
			 </div>

			 <div class="comment-text">
				<p>Duis sed odio sit amet nibh vulputate
				cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
				cursus a sit amet mauris</p>
			 </div>

		 </div>

		 <ul class="children">

			<li class="depth-3">

			   <div class="avatar">
				  <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
			   </div>

			   <div class="comment-content">

				   <div class="comment-info">
					  <cite>John Doe</cite>

					  <div class="comment-meta">
						 <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
						 <span class="sep">/</span><a class="reply" href="#">Reply</a>
					  </div>
				   </div>

				   <div class="comment-text">
					  <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
					  etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
				   </div>

			   </div>

			</li>

		 </ul>

	  </li>

   </ul>

</li>

<li class="depth-1">

   <div class="avatar">
	  <img width="50" height="50" class="avatar" src="images/avatars/user-02.jpg" alt="">
   </div>

   <div class="comment-content">

	   <div class="comment-info">
		  <cite>Shikamaru Nara</cite>

		  <div class="comment-meta">
			 <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
			 <span class="sep">/</span><a class="reply" href="#">Reply</a>
		  </div>
	   </div>

	   <div class="comment-text">
		  <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
	   </div>

   </div>

</li>

</ol>

<div class="comments-wrap">
<div id="comments" class="row">
<div class="col-full">
		<h3>
	<?php
	comments_number('No comments', '1 Comment', '% Comments'); 
	?>
		</h3>
		<ol class="commentlist">
			<?php
			wp_list_comments( array(
				'walker'	=> new Abstract_Walker_Comment,
				'avatar_size'       => 50,
				'format'            => 'html5',
				'style'      => 'ul',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'abstract' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>
</div>
</div>
</div>

	

</div><!-- #comments -->
