<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package abstract
 */

get_header();
?>

 <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  

   				<div class="content-media">
						<div class="post-thumb">
							<img src="<?php the_post_thumbnail_url(); ?>"> 
						</div>  
					</div>

					<div class="primary-content">

						<h1 class="page-title"><?= get_the_title(); ?></h1>	

						<ul class="entry-meta">
							<li class="date"><?= get_the_date('F j Y'); ?></li>						
							<li class="cat"><?php foreach( get_the_category() as $category ) : ?>    
                <a href="<?= get_category_link($cat->cat_ID) ?>"><?php echo $category->cat_name; ?></a> 
            <?php endforeach;?></li>				
						</ul>						

						<p class="lead"><?= get_the_excerpt(); ?></p> 

						<?php the_content() ?>
						<!-- <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
						</p>

						<h2>Large Heading</h2>

						<p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas assumenda est</a> id quod maxime placeat facere possimus, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et.</p>

						<blockquote><p>This is a simple example of a styled blockquote. A blockquote tag typically specifies a section that is quoted from another source of some sort, or highlighting text in your post.</p></blockquote>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>

						<h3>Smaller Heading</h3>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

<pre><code>
code {
   font-size: 1.4rem;
   margin: 0 .2rem;
   padding: .2rem .6rem;
   white-space: nowrap;
   background: #F1F1F1;
   border: 1px solid #E1E1E1;	
   border-radius: 3px;
}
</code></pre>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>

						<ul>
							<li>Donec nulla non metus auctor fringilla.
								<ul>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
								</ul>
							</li>
							<li>Donec nulla non metus auctor fringilla.</li>
							<li>Donec nulla non metus auctor fringilla.</li>
						</ul>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p> -->

						<p class="tags">
		  			     	<span>Tagged in :</span>
							   <?php the_tags('', ' '); ?>
		  				  	<!-- <a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a> -->
		  			   </p>

		  			   <div class="author-profile">
		  			   	<?= get_avatar(get_the_author_meta('ID'), 32); ?>

		  			   	<div class="about">
		  			   		<h4><a href="#"><?= get_the_author(); ?></a></h4>
		  			   	
		  			   		<p><?= get_the_author_meta('description'); ?></p>

		  			   		<ul class="author-social">
								 <?php
								 $list = array(
									'facebook',
									'twitter',
									'googleplus',
									'intsagram'
								 );
								 foreach ($list as $item) : 
								 if (get_the_author_meta($item)) : ?>
									<li><a href="<?= get_the_author_meta($item) ?>"><?= $item ?></a></li>
								 <?php endif;
								 endforeach; ?>

		  			   		</ul>
		  			   	</div>
		  			   </div> <!-- end author-profile -->						

					</div> <!-- end entry-primary -->		  			   

	  			   <div class="pagenav group">
					<div class="prev-nav">
		  			   	<a href="#" rel="prev">
						<?php previous_post_link('%link', '<span>Previous</span>%title') ?>
		  			   	</a>
		  			   </div>
		  				<div class="next-nav">
						  <?php next_post_link('%link', '<span>Next</span>%title') ?>
		  				</div>  				   
	  				</div>

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

		<div class="comments-wrap">
			<div id="comments" class="row">
				<div class="col-full">

               <h3>5 Comments</h3>

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
		</div> 
		<!-- end comments-wrap -->

   </section> <!-- end content -->
	
 
   <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
