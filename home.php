<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abstract
 */

$default_posts_per_page = get_option( 'posts_per_page' );
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; //вывод текущей страницы*
$current_posts_per_page = $default_posts_per_page * ($current_page-1);
get_header();
?>
	<!-- masonry ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">
						   <?php
						   	$posts = get_posts(array(
								'numberposts' => 3,
								'offset'=> $current_posts_per_page,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'post_type'   => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							));
							$default_posts_per_page-=3;
							foreach ($posts as $post) :
								setup_postdata($post);
							?>
								<li>
				   				<div class="featured-post-slide">

									   <div class="post-background" style="background-image:url(<?php if( has_post_thumbnail() ) : ?>
										   <?php the_post_thumbnail_url(); ?>
				<?php else: ?>
					<?= get_template_directory_uri() . '/assets/images/thumbs/none/no_image.png' ?>
					  <?php endif; ?>
									 );"></div>


								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li><?= get_the_date('F j Y'); ?></li> 
												<li><a href="#" ><?= get_the_author() ?></a></li>				
											</ul>	

								   		<h1 class="slide-title"><a href="<?php the_permalink(); ?>" title=""><?= get_the_title(); ?></a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->
							<?php
							endforeach;
							wp_reset_postdata(); // сброс 
							?>
				   			

				   			<!-- <li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-2.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 29, 2016</li>
												<li><a href="#">Sasuke Uchiha</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
						   			</div>		   				   					  
				   			
				   				</div>
				   			</li> /slide -->

				   			<!-- <li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-3.jpg');;"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 27, 2016</li>
												<li><a href="#" class="author">Naruto Uzumaki</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
						   			</div>

				   				</div>
				   			</li> end slide -->

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>
			 <?php 
			 $posts = get_posts(array(
								'numberposts' => $default_posts_per_page,
								'offset' => $current_posts_per_page+3,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'post_type'   => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							));
							foreach ($posts as $post) :
								setup_postdata($post);
								get_template_part( 'template-parts/post', get_post_format() );
							endforeach;
							wp_reset_postdata(); // сброс
			 ?>

         	

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->
	   
   	<div class="row">
   		
	   <?php the_posts_pagination( array(
		'show_all'     => false, // показаны все страницы участвующие в пагинации
		'end_size'     => 1,     // количество страниц на концах
		'mid_size'     => 1,     // количество страниц вокруг текущей
		'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
		'prev_text'    => __('PREV'),
		'next_text'    => __('NEXT'),
		'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
		'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
		'screen_reader_text' => __( 'Posts navigation' ),
			) )
		?>

   		<!-- <nav class="pagination">
		      <span class="page-numbers prev inactive">Prev</span>
		   	<span class="page-numbers current">1</span>
		   	<a href="#" class="page-numbers">2</a>
		      <a href="#" class="page-numbers">3</a>
		      <a href="#" class="page-numbers">4</a>
		      <a href="#" class="page-numbers">5</a>
		      <a href="#" class="page-numbers">6</a>
		      <a href="#" class="page-numbers">7</a>
		      <a href="#" class="page-numbers">8</a>
		      <a href="#" class="page-numbers">9</a>
		   	<a href="#" class="page-numbers next">Next</a>
	      </nav> -->

   	</div>

   </section> <!-- end bricks -->
   <?php
get_sidebar();
get_footer();
