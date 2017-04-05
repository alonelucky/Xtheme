<?php get_header();?>
<div id="doc" class="col-2-left-layout">
	<article id="col-main">
		<div id="c-box">
			<div class="breadcrumbs">You are here:&nbsp;&nbsp;<a href="http://www.ventioninc.com/">Home</a>&gt;<strong>Products</strong>
		</div>

	<section class="post">
		<div class="entry-title">
		<h1 class="title"><span class="title_span title_span2">Products</span></h1>
		</div>
		<div class="entry-content entry-images">
			<ul id="products-list">
					<?php
					//使用wp_query类调用制定文章列表并输出分页
						//分页生效必要参数 paged
						//cache  设置缓存
						$arr=array(
							'post_type'=>'products',
							'paged'=>$paged,
							'cache_results'=>true,
							'update_post_term_cache'=>true,
							'update_post_meta_cache'=>true
						);
						// 生成文章数组
						$posts = new wp_query($arr);
						//循环判断
						if($posts->have_posts()){
							while($posts->have_posts()){
								$posts->the_post();
								//正常输出
					?>
				<li>
					<div class="photo_box">
						<div class="productPhoto">
							<a href="<?php the_permalink();?>" title="<?php the_title()?>">
								<?php the_post_thumbnail(array(140,140));?>
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
					}

				?>
				<li class="clear" style="display: none;">&nbsp;</li>
			</ul>

			<div id="pagenav">
				<?php Xtheme_page_navi();
					wp_reset_postdata();
					?>
			</div>
		</div>
	</section>
</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>