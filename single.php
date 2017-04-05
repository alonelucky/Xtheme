<?php get_header('single');?>
<?php 
	if(have_posts()){
		while(have_posts()){
			the_post();
?>
	<section class="post">
		<div class="entry-title">
			<h1 class="title"><span class="title_span"><?php the_title();?></span></h1>
		</div>
		<div class="entry-content entry-images">
			<div id="product">
				<div class="proshow-l">
					<div class="smallImg_box">
						<div class="smallImg">
							<div id="small_show" class="productPhoto">
									<a rel="nofollow" href="javascript:bigImage();" title="<?php the_title();?>">
										 <?php the_post_thumbnail(array(240,240));?>
									</a>
							</div>
						</div>
					</div>
					<div class="scrollCenter">
						<a rel="nofollow" href="javascript:bigImage();"><?php the_title();?></a>
					</div>
				</div> 
				<div class="proshow-r">
					<table class="proDetail">
						<tbody>
							<?php
							if( get_post_meta(get_the_ID(),'_product_key',true) ){
								?>
								<tr>
									<td width="35%" class="Show_line">Model:</td>
									<td class="Show_line"><?php echo get_post_meta(get_the_ID(),'_product_key',true); ?></td>
								</tr> 
								<?php
							}
							?>
							<tr>
								<td width="35%" class="Show_line">Place of Origin:</td>
								<td class="Show_line">Henan,China (Mainland)</td>
							</tr>
							<tr>
								<td class="Show_line">Brand Name:</td>
								<td class="Show_line">Vention</td>
							</tr>
							<tr>
								<td class="Show_line">Color:</td>
								<td class="Show_line">White/Black</td>
							</tr>
							<tr>
								<td class="Show_line">SIZE:</td>
								<td class="Show_line">23mm*10mm*5mm</td>
							</tr>
							<tr>
								<td class="Show_line">Model:</td>
								<td class="Show_line">VAS-S10-W</td>
							</tr>
							<tr>
								<td class="Show_line">Brand:</td>
								<td class="Show_line">VENTION</td>
							</tr>
							<tr>
								<td class="Show_line">Packing:</td>
								<td class="Show_line">retail PE bag</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
	</section>
	
	<section class="post">
		<div class="entry-title" style="position: static;">
			<strong><h2 style="float:left">Product Description</h2></strong>
		</div> 
		<div class="entry-content">
			<p></p>
			<div class="productDescription" id="productDescription">
				<?php the_content();?>
			</div>
			<p></p>
			<p>Category: 
				<a href="#" title="type-c adaptor &amp; convertor">
					<?php echo the_terms(get_the_ID(),'product_taxonomy','',' , ');?>
				</a>
			</p>
		</div>
	</section>
	<section class="post">
        <div class="entry-title" id="inquiry_tip">
            <strong class="noH">
                Online Inquiry
            </strong>
            <span class="more">&nbsp;</span>
        </div>
        <div class="entry-content entry-images inquiry-basket">
			<?php echo do_shortcode(get_option('Xtheme_options_3')['contact_form']);?>
        </div>
    </section>
<?php		}
	}

?>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>