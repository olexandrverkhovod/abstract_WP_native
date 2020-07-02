<div class="search-wrap">
				<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url( '/' ) ?>">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="<?php echo get_search_query() ?>" name="s" id="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" id="searchsubmit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	