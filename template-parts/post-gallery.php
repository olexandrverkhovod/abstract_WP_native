<article class="brick entry format-gallery group animate-this">

               <div class="entry-thumb">

                  <div class="post-slider flexslider">
							<ul class="slides">
								<?php foreach (get_field('slider', get_the_ID() ) as $slide ) : ?>
								<li>
									<img src="<?= $slide['slide'] ?>"> 
								</li>
								<?php endforeach; ?>
							</ul>							
						</div> 
               	</div>
				
				<?php
				get_template_part( 'template-parts/post', 'content' );
				?>

               <!-- <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Wordpress</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
						<?= get_the_excerpt(); ?>
						</div>
               </div> -->
               
        		</article> <!-- end article -->