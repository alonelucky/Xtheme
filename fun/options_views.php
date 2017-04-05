<div class="wrap">
    <h2>企业信息</h2>
    <ul class="kl-tab">
        <li class="active">基本信息</li>
        <li>企业信息</li>
		<li>产品销售</li>
		<li>界面设置</li>
    </ul>
    <div class="clearfix">
        <div class="content div-active">
            <form action="options.php" method="POSt">
                <?php
                    // 定义输出分组
                    $group = 'Xtheme_group_1';
                    // 调用设置分组项
                    settings_fields($group);
                    // 输出分组项
                    do_settings_sections( $group );
                    // 输出提交按钮
                    submit_button();
                ?>
            </form>
        </div>
        <div class="content hidden">
            <form action="options.php" method="POST">
                <?php
                    $group = 'Xtheme_group_2';
                    settings_fields($group);
                    do_settings_sections( $group );
                    submit_button();
                ?>
            </form>
        </div>
		<div class="content hidden">
            <form action="options.php" method="POST">
                <?php
                    $group = 'Xtheme_group_3';
                    settings_fields($group);
                    do_settings_sections( $group );
                    submit_button();
                ?>
            </form>
        </div>
		<div class="content hidden">
            <form action="options.php" method="POST">
                <?php
                    $group = 'Xtheme_group_4';
                    settings_fields($group);
                    do_settings_sections( $group );
                    submit_button();
                ?>
            </form>
        </div>
    </div>

</div>
<?php
	//确保只在当前主题设置页面加载文件  
	$screen = get_current_screen();
	//是否为当前主题中心页面  如果是则调用如下两个文件
	if(is_object($screen)&&$screen->id=='appearance_page_Xtheme_theme_options'){
		?>
		<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory');?>/css/options.css">
		<script src="<?php echo get_bloginfo('stylesheet_directory');?>/js/options.js"></script>
		<?php
	}
?>
