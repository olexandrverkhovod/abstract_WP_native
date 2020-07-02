<article class="brick entry format-audio animate-this">

               <div class="entry-thumb">
				  <a href="<?php the_permalink(); ?>" class="thumb-link">

				<img src="<?php if( has_post_thumbnail() ) : ?>
					  <?php the_post_thumbnail_url(); ?>
				<?php else: ?>
					<?= get_template_directory_uri() . '/assets/images/thumbs/none/no_image.png' ?>
					  <?php endif; ?>
				" alt="concert">
				  </a>

                <div class="audio-wrap">
                  	<audio id="player" src="<?= get_field ('audio'); ?>" width="100%" height="42" controls="controls"></audio>                  	
                  </div>
               </div>

			   <?php
				get_template_part( 'template-parts/post', 'content' );
				?>

               <!-- <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Music</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
						<?= get_the_excerpt(); ?>
						</div>
               </div> -->
               
        		</article> <!-- /article -->