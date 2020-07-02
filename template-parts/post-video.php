<article class="brick entry format-video animate-this">

               <div class="entry-thumb video-image">
					   <?php if (get_field ('video')) : ?>
						<a href="<?= get_field('video'); ?>" data-lity>
						<?php else: ?>
							<a href="<?= get_field('videolink'); ?>" data-lity>
						<?php endif; ?>
                    <img src="<?php if( has_post_thumbnail() ) : ?>
					  <?php the_post_thumbnail_url(); ?>
				<?php else: ?>
					<?= get_template_directory_uri() . '/assets/images/thumbs/none/no_image.png' ?>
					  <?php endif; ?>
				" alt="concert">                   
                  </a>
               </div>

			   <?php
				get_template_part( 'template-parts/post', 'content' );
				?>

               <!-- <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Branding</a>               			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
						<?= get_the_excerpt(); ?>
						</div>
               </div> -->
               
</article> <!-- end article -->
