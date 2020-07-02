<div class="entry-text">
    <div class="entry-header">

        <div class="entry-meta">
            
            <span class="cat-links">
            <?php foreach( get_the_category() as $category ) : ?>    
                <a href="<?= get_category_link($cat->cat_ID) ?>"><?php echo $category->cat_name; ?></a> 
            <?php endforeach;?>		
            </span>	
        </div>

        <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
        
    </div>
            <div class="entry-excerpt">
            <?= get_the_excerpt(); ?>
            </div>
    </div>