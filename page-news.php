<?php get_header();?>
			<div id="doc" class="col-2-left-layout">
<article id="col-main">
	<div id="c-box">
		<div class="breadcrumbs">You are here:&nbsp;&nbsp;<a href="<?php bloginfo( 'url' );?>">Home</a> &gt; <h1 style="line-height:18px;font-weight:700;margin:0 6px;font-size:12px;display:inline">News</h1></div>
 				<section class="post">
				<div class="entry-title">
					<strong class="noH">News</strong>
					<span class="more">&nbsp;</span>
				</div>
				<div class="entry-content entry-images">
					<ol id="menu-list">
					<?php
						$arr=array(
							'post_type'=>'news',
							'paged'=>$paged
						);
						$posts = new wp_query($arr);
						if($posts->have_posts()){
							while($posts->have_posts()){
								$posts->the_post();
					?>
							<li>
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</li>
					<?php		}
						}
					?>
					</ol>
				</div>
				<div id="pagenav">
					<?php

						wp_reset_postdata();
					?>
				</div>
			</section>
 		</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>