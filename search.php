<?php get_header();?>
<div id="doc" class="col-2-left-layout">
	<article id="col-main">
		<div id="c-box">
			

	<section class="post">
		<div class="entry-title">
		<h1 class="title"><span class="title_span title_span2">Search Reault :</span></h1>
		</div>
		<div class="entry-content entry-images">
			<p>
				<?php 
					//获取到全局变量
					global $wp_query;
					//使用全局变量获得数据条数
					echo '"'.$s .'",Search reault ' . $wp_query->found_posts .' items';
				?>
			</p>
			<ul id="products-list">
					<?php

						if(have_posts()){
							while(have_posts()){
								the_post();
								//正常输出
					?>
				<li>
					<div class="photo_box">
						<div class="productPhoto">
							<a href="<?php the_permalink();?>" title="<?php the_title()?>">
								<img src="#" alt="" width="140" height="140">
							</a>
						</div>
						<div class="productText protext">
							<a href="<?php the_permalink();?>" title="<?php the_title()?>">
								<?php the_title()?>
							</a>
								<span xc_no_trans="on"><?php echo get_post_meta(get_the_ID(),'_product_key',true);?></span>
							<p class="part">
								<?php 
									the_excerpt();
								?>
							</p>
							
						</div>
					</div>
				</li>
				<?php		}
					}else{
						echo '没有找到相关产品';
					}

				?>
				<li class="clear" style="display: none;">&nbsp;</li>
			</ul>

			<div id="pagenav">
				<?php
					//分页
					global $wp_query;
					$big = 9999999;
						$arr = array(
							'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format'             => '?page=%#%',
							'total'              => $wp_query->max_num_pages,
							'current'            => max( 1, get_query_var('paged') ),
							'show_all'           => False,
							'end_size'           => 1,
							'mid_size'           => 2,
							'prev_next'          => True,
							'prev_text'          => __('« Previous'),
							'next_text'          => __('Next »'),
							'type'               => 'array',
							'add_args'           => False,
							'add_fragment'       => '',
							'before_page_number' => ' ',
							'after_page_number'  => ' '
						);
					
					$links = paginate_links( $arr );
					//循环输出分页
					foreach($links as $link):
					echo $link;
					endforeach;

				?>
			</div>
		</div>
	</section>
</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>