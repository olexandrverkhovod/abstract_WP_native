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

get_header();
?>
<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li><a href="index.html" title="">Home</a></li>									
					<li class="has-children current">
						<a href="category.html" title="">Categories</a>
						<ul class="sub-menu">
			            <li><a href="category.html">Wordpress</a></li>
			            <li><a href="category.html">HTML</a></li>
			            <li><a href="category.html">Photography</a></li>
			            <li><a href="category.html">UI</a></li>
			            <li><a href="category.html">Mockups</a></li>
			            <li><a href="category.html">Branding</a></li>
			         </ul>
					</li>
					<li class="has-children">
						<a href="single-standard.html" title="">Blog</a>
						<ul class="sub-menu">
			            <li><a href="single-video.html">Video Post</a></li>
			            <li><a href="single-audio.html">Audio Post</a></li>
			            <li><a href="single-gallery.html">Gallery Post</a></li>
			            <li><a href="single-standard.html">Standard Post</a></li>
			         </ul>
					</li>
					<li><a href="style-guide.html" title="">Styles</a></li>
					<li><a href="about.html" title="">About</a></li>	
					<li><a href="contact.html" title="">Contact</a></li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- page header
   ================================================== -->
   <section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
   			<h1>Category: Photography</h1>
   		</div>   		
   	</div>
   </section>

   
   <!-- masonry
   ================================================== -->
   <section id="bricks" class="with-top-sep">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/diagonal-building.jpg" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Photography</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>

        		</article> <!-- end article -->

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/ferris-wheel.jpg" alt="ferris wheel">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">This Is Another Standard Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

            <article class="brick entry format-audio animate-this">

               <div class="entry-thumb">
                  <a href="single-audio.html" class="thumb-link">
	                  <img src="images/thumbs/concert.jpg" alt="concert">                      
                  </a>

                  <div class="audio-wrap">
                  	<audio id="player2" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>                  	
                  </div>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Music</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-audio.html">This Is a Audio Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- /article -->

         	<article class="brick entry format-quote animate-this">

               <div class="entry-thumb">                  
	               <blockquote>
	                 	<p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

	                 	<cite>Dieter Rams</cite> 
	               </blockquote>	          
               </div>   

        		</article> <!-- end article -->

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/shutterbug.jpg" alt="Shutterbug">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">html</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Photography Skills Can Improve Your Graphic Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/usaf-rocket.jpg" alt="USAF rocket">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Mockup</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">The 10 Golden Rules of Clean Simple Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->        	

        		<article class="brick entry format-gallery group animate-this">

               <div class="entry-thumb">

                  <div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="images/thumbs/gallery/work1.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work2.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work3.jpg"> 
								</li>
							</ul>							
						</div> 

               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Wordpress</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-gallery.html">Workspace Design Trends and Ideas.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-link animate-this">

               <div class="entry-thumb">
                  <div class="link-wrap">
	                 	<p>Looking for affordable &amp; reliable web hosting? We recommend Dreamhost.</p>
	                 	<cite>
	                 		<a target="_blank" href="http://www.dreamhost.com/r.cgi?287326">http://www.dreamhost.com</a>
	                 	</cite>
	               </div>	
               </div>               
               
        		</article> <!-- end article -->


         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/diagonal-pattern.jpg" alt="Pattern">              
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">You Can See Patterns Everywhere.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-video animate-this">

               <div class="entry-thumb video-image">
                  <a href="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39" data-lity>
	                  <img src="images/thumbs/ottawa-bokeh.jpg" alt="bokeh">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Branding</a>               			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-video.html">This Is a Video Post Format.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/lighthouse.jpg" alt="Lighthouse">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">Design</a>
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Breathtaking Photos of Lighthouses.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/liberty.jpg" alt="Liberty">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">html</a>                	
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Designing With Black and White.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   	<div class="row">
   		
   		<nav class="pagination">
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
	      </nav>

   	</div>

   </section> <!-- bricks -->
   <?php
get_sidebar();
get_footer();
