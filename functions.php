<?php

	// 注册菜单选项
	register_nav_menus(array(
		'main_menu'=>'主导航栏',
		'footer_menu'=>'底部导航栏'
	));


	function Xtheme_media_upload_script(){
		?>
		<script>
			jQuery(document).ready(function($){   
				var img_text;
				$('#company_img_btn').on('click',function(event){
					img_text = $(this).prev('#Xtheme_options_4[company_img]');
					tb_show('','media-upload.php?type=image&TB_iframe=true');
					return false;
				});
				
				window.send_to_editor = function (html){
					upload_img_url = $('img',html).attr('src');	
					$(img_text).val(upload_img_url);
					tb_remove();
				}
			});   
		</script>
		<?php
	}

	//提示必须安装的插件
	function Xtheme_notices(){
		$msg=array();

		if(!is_plugin_active('contact-form-7/wp-contact-form-7.php')){
			$msg[]='需要安装Contact Form 7插件用来接收询盘<a href="http://wordpress.org/extend/plugins/contact-form-7/" target="_blank">点击下载</a><br>';
		}
		
		if(!is_plugin_active('wpjam-basic/wpjam-basic.php')){
			$msg[]='需要安装WPJAM插件用来优化站点<a href="http://wordpress.org/extend/plugins/wpjam-basic/" target="_blank">点击下载</a><br>';
		}
		
		if(count($msg)>0){
			echo '<div class="error" id="message">';
			foreach($msg as $m):
			echo '<strong>'.$m.'</strong>';
			endforeach;
			echo '</div>';
		}
	}
	add_action('admin_notices','Xtheme_notices');

	//获取文章分页并输出
	function Xtheme_page_navi(){
		//分页
		global $wp_query;
		$big = 9999999;
			$arr = array(
				'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'             => '?page=%#%',
				'total'              => $wp_query->max_num_pages,
				'current'            => max( 1, get_query_var('paged') ),
				'show_all'           => False,
				'end_size'           => 1,
				'mid_size'           => 2,
				'prev_next'          => True,
				'prev_text'          => __('« Previous'),
				'next_text'          => __('Next »'),
				'type'               => 'array',
				'add_args'           => False,
				'add_fragment'       => '',
				'before_page_number' => ' ',
				'after_page_number'  => ' '
			);
		
		$links = paginate_links( $arr );
		//循环输出分页
		if($links){
			foreach($links as $link):
			echo $link;
			endforeach;
		}
	}
	
	//获取自定义全部分类,并单独输出父级分类和子级分类
	function Xtheme_style_taxonomy(){
		//定义获取数组的参数数组,输出包括分类下没有文章的分类
		$arr=array('hide_empty'=>false);
		//获取全部自定义文章类型分类数组
		$items = get_terms('product_taxonomy',$arr);
		//定义变量用于拆分数组
		$i=0;$j=0;
		//存储父级分类的数组下标
		$index=array();
		//用于存放父级分类
		$parents = array();
		// 用于存放子即分类
		$children = array();
		//循环遍历全部分类数组
		foreach($items as $item):
			//如果当前分类不存在父级分类
			if(!$item->parent){
				//输出当前索引
				$index[$j]=$i;
				//将当前数组存放入父级分类数组中
				$parents[$j]=$item;
				//父级索引自加
				$j++;
			}
			//全部分类数组索引自加
			$i++;
		endforeach;
		//遍历全部数组
		for($i=0;$i<count($index);$i++){
			//根据索引拆分原有数组并赋值到子级数组中
			if($i==count($index)-1){
				$val = count($items)-$index[$i];
			}else{
				$val = $index[$i+1]-$index[$i];
			}
			$children[$i] = array_slice($items,$index[$i]+1,$val-1);
		}
		
		return array($parents,$children);
	}
	
    add_theme_support( 'post-thumbnails' );

    /* 定义自定义Meta模块 */
    add_action( 'add_meta_boxes', 'Xtheme_product_xinghao' );
    /* 写入数据*/
    add_action( 'save_post', 'product_xinghao_save' );
    //网站页面标题自定义设置 (应该使用wp-title)
    function Xtheme_title(){
        if(is_home()||is_front_page()||is_page()){
            $t1 = bloginfo( 'name' );
            $t2 = bloginfo('description');
            return $t1 .' - '. $t2;   
        }else{
            global $post;
            $t1 = bloginfo( 'name' );
            $t2 = $post->post_title;
            return $t2 .' - '.$t1;
        }
    }
    //网站关键词
    function Xtheme_keywords(){

    }

    //引入其他函数文件供functions.php调用
    function add_fun_files(){
        include('fun/meta_products.php');
        include('fun/register_type.php');
    }
    //加载外部文件
    add_action( 'init','add_fun_files' );


    //注册自定义类型--新闻
    add_action('init','register_news');

    //注册自定义类型--产品
    add_action('init','register_products');
    //添加产品分类功能
    add_action('init','taxonomy_products');
    //添加产品过滤字段
    add_filter('manage_products_posts_columns','column_products',1);
    add_action('manage_products_posts_custom_column','output_products_columns');
    
    //添加主题中心
    add_action('admin_menu','Xtheme_theme');
    //主题中心函数
    function Xtheme_theme(){
        // 增加页面信息
        add_theme_page( 
            '企业信息', 
            '企业信息', 
            'administrator', 
            'Xtheme_theme_options', 
            'Xtheme_theme_options_fun' 
        );
        // 引入函数文件
        include('fun/Xtheme_theme_options.php');
    }


?>