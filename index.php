<?php get_header();?>
<div id="doc" class="col-2-left-layout">
    <article id="col-main">
        <div id="c-box">
            <!--Company Info start-->
                <section class="post about">
                    <div class="entry-title">
                        <strong class="title"><h2>Company Info</h2></strong>
                        <span class="more">&nbsp;</span>
                    </div>
                    <div class="entry-content">
                        <div class="companyAbout">
                            <div class="companyFace">
                                    <img src="<?php echo get_option(Xtheme_options_4)[company_img];?>" class="imgLoadError" style="vertical-align: middle;display: inline;" alt="<?php bloginfo('name');?>" width="237" height="180">
                            </div>
                            <div>
                                <p><?php 
									// 输出企业简介
									$content = get_option('Xtheme_options_3')['company_info'];
									echo mb_strimwidth($content,0,550,'...');
								?>[<a href="/company">Click for Details</a>]</p>
                                <p>Our Product/Service: <strong><?php echo get_option('Xtheme_options_3')['main_products'];?></strong></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Company Info end-->
                <!-- Product List start-->
                <section class="post">
                    <div class="entry-title">
                        <strong class="title"><h2>Products</h2></strong>
                        <span><a class="more" href="/product">More</a></span>
                    </div>
                    <div class="entry-content entry-images" id="featureProduct">
                        <ul>
                      	<?php 
							
							$arr = array(
                                'post_type'=>'products',
								'numberposts'=>'16'
							);
							$get_post = get_posts($arr);
							foreach($get_post as $post):
						?>
                            <li id="featureProduct">
                                <div class="productPhoto" id="productPhoto_featureProduct152743999">
                                    <a href="#" title="#">
                                        <?php the_post_thumbnail(array(140,140));?>
                                    </a>
                                </div>
                                <div class="productText" id="productText_featureProduct152743999">
                                    <a href="<?php the_permalink();?>" title="#">
                                        <?php the_title();?>
                                    </a>
                                    <span xc_no_trans="on"><?php echo get_post_meta(get_the_ID(),'_product_key',true);?></span>
                                </div>
                            </li>
                            <?php
							endforeach;
						?>
                        </ul>
                    </div>
                </section>
                <!-- Product List end-->
                <!-- New Product List start-->
                <section class="post">
                    <div class="entry-title">
                        <strong class="title"><h2>New Products</h2></strong>
                        <span><a class="more" href="/product">More</a></span>
                    </div>
                    <div class="entry-content entry-images">
                        <ul>
                            <?php 
							$arr = array(
                                'post_type'=>'products',
								'numberposts'=>'8',
								'orderby'=>'modified'
							);
							$get_posts = get_posts($arr);
							foreach($get_posts as $post):
						?>
                            <li>
                                <div class="productPhoto">
                                    <a href="#" title="">
                                        <?php the_post_thumbnail(array(140,140));?>
                                    </a>
                                </div>
                                <div class="productText">
                                    <a href="#" title="">
                                        <?php the_title()?>
                                    </a>
                                    <span xc_no_trans="on"><?php echo get_post_meta(get_the_ID(),'_product_key',true);?></span>
                                </div>
                            </li>
                            <?php 
							endforeach;
						?>
                        </ul>
                    </div>
                </section>
                <!-- New Product List end-->
                <!--Company Profile start-->
                <section class="post">
                    <div class="entry-title">
                        <strong class="title companyProfile">
						<h2>Company Profile</h2>
				</strong>
                        <span class="more"><a href="">More</a></span>
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
                <!--Company Profile end-->
                <!--Contact Info start-->
                <section class="post">
                    <div class="entry-title">
                        <strong class="title companyProfile"><h2>Contact Us</h2></strong>
                        <span class="more"><a href="">More</a></span>
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
                <!--Contact Info end-->

        </div>
    </article>
    <?php get_sidebar();?>
</div>

<?php get_footer();?>
