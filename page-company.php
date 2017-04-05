<?php get_header();?>
			<div id="doc" class="col-2-left-layout">
<article id="col-main">
	<div id="c-box">
	<?php
		global $post;
		if(have_posts()){
			while(have_posts()){
				the_post();
	?>
    <section class="post">
        <div class="entry-title">
            <strong class="noH">
                 Company Information
            </strong>
            <span class="more">&nbsp;</span>
        </div>
        <div class="entry-content meunDescription" id="article">
            <h1>
                Company Information
            </h1>

                <p class="entry-date">
                    <?php the_time('Y-m-d');?>
                </p>
                <p style="overflow-x:auto;overflow-y:hidden;width: 100%;text-align: center;margin-top: 10px;">
					<?php the_post_thumbnail(array(500,500));?>
                </p>
            <div style="overflow: auto;" class="menuDescription">
            	<div style="text-align:left"><?php echo get_option('Xtheme_options_3')['company_info'];?></div>
            </div>
        </div>
    </section>
﻿	<?php		}
		}
		
	?>
 		</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>