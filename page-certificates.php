<?php get_header();?>
			<div id="doc" class="col-2-left-layout">
<article id="col-main">
	<div id="c-box">

 				<section class="post">
				<div class="entry-title">
					<strong class="noH">Certificates</strong>
					<span class="more">&nbsp;</span>
				</div>
				<div class="entry-content entry-images">
				<ul id="menu-gallery">
				<?php
					$arr=array(
						'post_type'=>'post',
						'page'=>$paged,
					);
					$posts = new wp_query($arr);
					if($posts->have_posts()){
						while($posts->have_posts()){
							$posts->the_post();
				?>
				
					<li>
						<div class="productPhoto">
							<a href="<?php the_permalink();?>">
								<img alt="<?php the_title();?>" src="<?php 									
									$src=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full',true)[0];
									echo $src;
									?>" class="imgLoadError" width="158" height="180">
							</a>
						</div>
						<a href="<?php the_permalink();?>" title="<?php the_title();?>"><span><?php the_title();?></span></a>
					</li>
				<?php		}
					}else{
						echo 'The current page has no content !';
					}
				?>
				</ul>
				</div>
				<div id="pagenav">
				<?php


					//充值查询数据
					wp_reset_postdata();
				?>
			</div>
			</section>
﻿

 		</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>