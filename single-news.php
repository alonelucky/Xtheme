<?php get_header();?>
<div id="doc" class="col-2-left-layout">
<article id="col-main">
	<div id="c-box">
		<div class="breadcrumbs">You are here:&nbsp;&nbsp;<a href="<?php bloginfo( 'url' );?>">Home</a>&gt;<a href="<?php bloginfo( 'url' );?>">News</a>&gt;<strong><?php the_title();?></strong></div>
        <?php
            if (have_posts()){
                while(have_posts()){
                    the_post();
        ?>
    <section class="post">
        <div class="entry-title">
            <strong class="noH">
                <?php the_title();?>
            </strong>
            <span class="more">&nbsp;</span>
        </div>
        <div class="entry-content meunDescription" id="article">
            <h1><?php the_title();?></h1>
                <p style="overflow-x:auto;overflow-y:hidden;width: 100%;text-align: center;margin-top: 10px;">
                    <?php 
                        the_post_thumbnail(array(500,500));
                    ?>
                </p>
            <div style="overflow: auto;" class="menuDescription">
            <?php the_content();?>
            </div>
            <br>
            <hr>
            	<div class="menuPage">
                    <span class="preMenu">
	                    <?php
                            previous_post_link('Previous: %link','%title');
                        ?>
	                </span>
	                <span class="nextMenu">
	                    <?php
                            next_post_link('Next: %link','%title');
                        ?>
	                </span>
            	</div>
        </div>
    </section>
    <?php    }
        }
    ?>

 		</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>