		<aside id="col-left" class="side-col">
    <div class="widget-container widget_list">
      <h3><strong>Product List</strong></h3>
			
			<ul>
			<?php 
				$items = Xtheme_style_taxonomy();
				for($i=0;$i<count($items[0]);$i++){
					?>
						<li>
							<a href="<?php echo get_bloginfo('url').'/product_taxonomy/'.$items[0][$i]->slug;?>"><span><?php echo $items[0][$i]->name;?></span></a>
							<ul>
								<?php  
									for($j=0;$j<count($items[1][$i]);$j++){
										
										?>
										<li>
											<a href="<?php echo get_bloginfo('url').'/product_taxonomy/'.items[1][$i][$j]->slug;?>">
												<span><?php echo $items[1][$i][$j]->name;?></span>
											</a>
										</li>
										<?php
									}
								?>
							</ul>
						</li>
					<?php
				}
				?>
			</ul>

            </div>
            <!--新闻-->
			<div class="widget-container widget_list">
                <h3>
                    <strong>News</strong>
                </h3>
		        <ul>
					<?php
						$news = get_posts(array(
							'post_type'=>'news',
							'numberposts'=>5
						));
						foreach ($news as $post):
						//var_dump($item);
					?>
                    <li>
                        <a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="nofollow">
                            <span><?php the_title();?></span>
                        </a>
                    </li>
					<?php endforeach;?>
				</ul>
		    </div>
            <!--证书-->
			<!--<div class="widget-container widget_images">
                <h3>
                    <strong>
                        <a href="#" title="Certificates" rel="nofollow">
                            Certificates
                        </a>
                    </strong>
                </h3>
		        <ul>
                    <li>
                        <div class="productPhoto">
                            <a href="#" rel="nofollow">
                                <img src="#" class="imgLoadError" onload="Indie.setImgWH(this,75,75)" alt="VENTION-ROHS" width="66" height="75">
                            </a>
                        </div>
                        <a href="#" title="VENTION-ROHS" rel="nofollow">
                            <span>VENTION-ROHS</span>
                        </a>
                    </li>
				</ul>
		    </div>-->
			<div class="widget-container widget_images">
                <h3>
                    <strong>Company Info</strong>
                </h3>
				<p>
					<br>
					<strong>Business Type:</strong>Manufacturer, Trading Company<br>
					<strong>City: </strong>Zhengzhou<br>
					<strong>Province/State: </strong>Henan<br>
					<strong>Country/Region: </strong>China (Mainland)<br><br>
					<span style="float:left;margin-right:10px;"> Follow Us:</span>
					<?php 
						if( get_option(Xtheme_options_2)[facebook] ){
							?>
							<a rel="nofollow" style="float:left;" href="<?php echo get_option(Xtheme_options_2)[facebook];?>" target="_blank"><img border="0" src="<?php bloginfo('stylesheet_directory');?>/img/ico-f.png" alt="Follow us on facebook" title="Follow us on facebook"> </a>
							<?php
						}

						if( get_option(Xtheme_options_2)[linkedin] ){
							?>
							<a rel="nofollow" style="float:left;margin-left:0.5em" href="<?php echo get_option(Xtheme_options_2)[linkedin];?>" target="_blank"><img border="0" src="<?php bloginfo('stylesheet_directory');?>/img/ico-i.png" alt="Follow us on facebook" title="Follow us on facebook"> </a>
							<?php
						}

						if( get_option(Xtheme_options_2)[twitter] ){
							?>
							<a rel="nofollow" style="float:left;margin-left:0.5em" href="<?php echo get_option(Xtheme_options_2)[twitter];?>" target="_blank"><img border="0" src="<?php bloginfo('stylesheet_directory');?>/img/ico-t.png" alt="Follow us on facebook" title="Follow us on facebook"> </a>
							<?php
						}
					?>
					<br>
				</p>
		    </div>
			

		</aside>