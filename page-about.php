<?php get_header();?>

<?php
	$post  = get_page(get_the_ID());
?>
<div id="doc" class="col-2-left-layout">
<article id="col-main">
	<div id="c-box">
 	    <section class="post">
        <div class="entry-title">
        	<strong class="title companyTitle"> 
        		<h2>Company Info</h2>
        	</strong>
            <span class="more">&nbsp;</span>
        </div>
        <div class="entry-content">
            <div class="companyAbout">
                    <div class="companyFace">
                            <div id="facePhoto0" class="facePhotoBox" style="display:table-cell;">
								<img src="<?php echo get_option('Xtheme_options_4')['company_img'];?>" alt="">
                            </div>
                    </div>
                <div>
                   <?php echo get_option('Xtheme_options_3')['company_info'];?>
                </div>
            </div>
        </div>
    </section>
	<section class="post">
		<div class="entry-title">
			<strong class="title companyProfile">
					<h2>Company Profile</h2>
			</strong>
			<span class="more">&nbsp;</span>
		</div>
		<div class="entry-content">
			<table>
				<?php 
					$items = get_option('Xtheme_options_1');
				?>
				<tbody>
				<?php
					if($items['established']){
						?>
							<tr>
								<td>Established Year:</td>
								<td><?php echo $items['established'];?></td>
							</tr>						
						<?php
					}

					if($items['staff']){
						?>
							<tr>
								<td>No. of Staff:</td>
								<td><?php echo $items['staff'];?></td>
							</tr>						
						<?php
					}
					
					if($items['RD_staff']){
						?>
							<tr>
								<td>No. of R&amp;D Staff:</td>
								<td><?php echo $items['RD_staff'];?></td>
							</tr>						
						<?php
					}
					
					if($items['Engineers']){
						?>
							<tr>
								<td>No. of Engineers:</td>
								<td><?php echo $items['Engineers'];?></td>
							</tr>						
						<?php
					}
					
					if($items['OEM']){
						?>
							<tr>
								<td>OEM Services Provided:</td>
								<td><?php echo $items['OEM'];?></td>
							</tr>					
						<?php
					}
					
					if($items['Payment']){
						?>
							<tr>
								<td>Payment Terms:</td>
								<td id="paypalTd">
									<?php 
										$pays = $items['Payment'];
										foreach($pays as $pay):
										echo $pay.',';
										endforeach;
									?>
								</td>
							</tr>						
						<?php
					}
					
					if($items['Business_Type']){
						?>
							<tr>
								<td width="25%">Business Type:</td>
								<td><?php echo $items['Business_Type'];?></td>
							</tr>
						<?php
					}

					if($items['Certificate']){
						?>
							<tr>
								<td>Quality Certificate:</td>
								<td><?php echo $items['Certificate'];?></td>
							</tr>
						<?php
					}
					
					if($items['Markets']){
						?>
							<tr>
								<td>Main Export Markets:</td>
								<td><?php echo $items['Markets'];?></td>
							</tr>
						<?php
					}
				?>
			</tbody></table>
		</div>
	</section>
 		</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>