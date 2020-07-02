<article class="brick entry format-standard animate-this">
    <?php
    if( has_post_thumbnail() ) : ?>
    <div class="entry-thumb">
        <a href="<?php the_permalink(); ?>" class="thumb-link">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="building">             
        </a>
    </div>
    <?php endif; ?>

    <?php
				get_template_part( 'template-parts/post', 'content' );
				?>
    
    <!-- <div class="entry-text">
    <div class="entry-header">

        <div class="entry-meta">
            <span class="cat-links">
                <a href="#">Design</a> 
                <a href="#">Photography</a>               				
            </span>			
        </div>

        <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
        
    </div>
            <div class="entry-excerpt">
            <?= get_the_excerpt(); ?>
            </div>
    </div> -->

</article> <!-- end article -->