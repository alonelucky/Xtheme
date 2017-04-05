<!DOCTYPE html>
<html lang="en">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' );?>">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php Xtheme_title();?></title>

		<meta name="keywords" content="">
		<meta name="description" content="">
		
		<link href="<?php bloginfo( 'stylesheet_directory' );?>/css/main.css" rel="stylesheet" type="text/css">
		<link href="<?php bloginfo( 'stylesheet_directory' );?>/css/style_31.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script type="text/javascript" src="/js/html5.js"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' );?>/js/hi.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' );?>/js/main.js"></script>
        <?php wp_head();?>
	</head>
	<body class="c-f27908 style-31">
        <header id="header" class="col-2-left-layout">
        <ul class="quick-menu">
            <li id="logoutLi">
                <a href="<?php bloginfo('url');?>/wp-admin" id="loginLink" rel="nofollow" target="_blank">Administrator Login</a> 
            </li>
        </ul>
        <figure class="hisupplier-logo">
            <table>
                <tbody>
                    <tr>
                        <td id="logoImgTd" valign="middle" height="100" width="100">
                            <a class="logo" href="<?php bloginfo( 'url' );?>" title="<?php bloginfo( 'name' );?>">
                                <img id="logoImg" src="<?php 
                                    // 输出站点logo
                                    if( get_option(Xtheme_options_4)[company_logo] ){
                                        echo get_option(Xtheme_options_4)[company_logo];
                                    }else{
                                        echo get_bloginfo( 'stylesheet_directory' ).'/img/logo.png';
                                    }
                                ?>" alt="<?php bloginfo( 'name' );?>" class="imgLoadError" width="100"> 
                            </a>
                        </td>
                        <td valign="middle" class="comNameKeyword">
                            <div class="comName" xc_no_trans="on"> 
                                <strong><?php bloginfo( 'name' );?></strong> 
                            </div>
                                <h1 class="keyword"><?php echo get_option('Xtheme_options_3')['main_products'];?></h1>
                        </td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <?php 
            // 菜单输出
            $arr = array(
                'theme_location'=>'main_menu',
                'container'=>'nav',
                'container_class'=>'mian-menu',
                'container_id'=>'mo_menu',
                'depth'=>'0',
                'menu_class'=>'',
                'menu_id'=>'menu-nav'
            );
            wp_nav_menu($arr);
        ?>
        <div id="banner" class="banner ">
            <ul class="bjqs" style="margin: 0; overflow: hidden; height: 308px;display: block;">
                <li style="float:left;">
                    <img src="<?php
                        // 设置网站banner
                        if(get_option(Xtheme_options_4)[company_banner]){
                            echo get_option(Xtheme_options_4)[company_banner];
                        }else{
                            echo get_bloginfo( 'stylesheet_directory' ).'/img/banner_f27908.jpg';
                        }
                        ?>" alt="banner">
                </li>
            </ul>
        </div>
        <div id="m_search" class="search " style="zoom: 1">
            <?php // 搜索框 ?>
             <form action="<?php bloginfo('url');?>" method="get" id="searchform" role="search">
				<div>
					<label class="screen-reader-text" for="s">Search Products：</label>
					<input type="text" value="" name="s" id="s" id="queryText" placeholder="Enter product keywords"/>
					<input type="submit" id="searchsubmit" class="button_yellow" value="Search" />
				</div>
            </form>
        </div> 
</header>