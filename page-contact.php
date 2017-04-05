<?php get_header();?>
			<div id="doc" class="col-2-left-layout">
<article id="col-main">
	<div id="c-box">
		<div class="breadcrumbs">You are here:&nbsp;&nbsp;<a href="http://www.ventioninc.com/">Home</a>&gt;<strong>Online Inquiry</strong></div>
<?php 
	$post = get_page(get_the_ID());
?>
	<section class="post">
		<div class="entry-title">
			<strong class="title companyProfile"><h2>Contact Us</h2></strong>
			<span class="more">&nbsp;</span>
		</div>
		<div class="entry-content">
			<table width="100%" class="table-striped">
				<tbody>
					<tr>
						<th colspan="2">
							<h1 xc_no_trans="on" style="line-height:18px;font-weight:700;px;display:inline"><?php bloginfo( 'name' );?></h1>
						</th>
					</tr>
					<?php
						$items = get_option('Xtheme_options_2');
						
						if($items['Address']){
							?>
								<tr>
									<td><strong>Address: </strong></td>
									<td xc_no_trans="on"><?php echo $items['Address'];?></td>
								</tr>							
							<?php
						}
						
						if($items['phone']){
							?>
								<tr>
									<td><strong>Telephone: </strong></td>
									<td><?php echo $items['phone'];?></td>
								</tr>
							<?php
						}
						
						if($items['website']){
							?>
								<tr>
									<td><strong>Website:</strong></td>
									<td>
										<a target="_blank" href="<?php echo $items['website'];?>" rel="nofollow"><?php echo $items['website'];?></a> 
									</td>
								</tr>
							<?php
						}else{
							?>
								<tr>
									<td><strong>Website:</strong></td>
									<td>
										<a target="_blank" href="<?php bloginfo('url');?>" rel="nofollow"><?php bloginfo('url');?></a> 
									</td>
								</tr>
							<?php
						}
						
						if($items['Contact_Person']){
							?>
								<tr>
									<td><strong>Contact Person: </strong></td>
									<td><?php echo $items['Contact_Person'];?></td>
								</tr>
							<?php
						}
						
						if($items['email']){
							?>
								<tr>
									<td><strong>E-mail: </strong></td>
									<td>
										<a href="email:<?php echo $items['email'];?>" rel="nofollow"><?php echo $items['email'];?></a>
									</td>
								</tr>
							<?php
						}
						
						if($items['Mobile']){
							?>
								<tr>
									<td><strong>Mobile:</strong></td>
									<td><?php echo $items['Mobile'];?></td>
								</tr>
							<?php
						}
					?>
				</tbody>
			</table>
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
 		</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>