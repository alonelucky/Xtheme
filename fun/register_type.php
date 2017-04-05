<?php
    // 注册文章类型为news
    function register_news(){
        //注册新闻类型
        $labels = array(
            'name'=>'新闻',
            'add_new'=>'添加新闻',
            'add_new_item'=>'增加一条新闻',
            'edit_item'=>'编辑新闻',
            'new_item'=>'xin新闻',
            'all_item'=>'所有新闻',
            'viwe_item'=>'查看新闻',
            'search_item'=>'搜索新闻',
            'not_found'=>'没有找到有关新闻',
            'not_found_in_trash'=>'回收站里没有相关新闻',
            'menu_name'=>'新闻'
        );
        //参数数组
        $news_arr = array(
            'labels'=>$labels,
            'description'=>'创建我们企业的相关新闻',
            'public'=>true,
            'menu_postion'=>5,
            'supports'=>array('title','editor','thumbnail','excerpt','comments'),
            'has_archive'=>true,
			'rewrite'=>false
        );
        // 注册文章类型为news
        register_post_type('news',$news_arr);
    }

    // 注册文章类型为products
    function register_products(){
        //注册产品类型
        $labels = array(
            'name'=>'所有产品',
            'add_new'=>'添加产品',
            'add_new_item'=>'增加一条产品',
            'edit_item'=>'编辑产品',
            'new_item'=>'新产品',
            'all_item'=>'所有产品',
            'viwe_item'=>'查看产品',
            'search_items'=>'搜索产品',
            'not_found'=>'没有找到有关产品',
            'not_found_in_trash'=>'回收站里没有相关产品',
            'menu_name'=>'产品'
        );

        $products_arr = array(
            'labels'=>$labels,
            'description'=>'创建我们企业的产品',
            'public'=>true,
            'menu_postion'=>5,
            'supports'=>array('title','editor','thumbnail','excerpt','custom-fields','revisions'),
            'has_archive'=>true
        );
        // 注册文章类型为products
        register_post_type('products',$products_arr);
    }

    // 为products文章类型定义分类
    function taxonomy_products(){
        $labels = array(
            'name'=>'产品分类',
            'search_items'=>'搜索产品分类',
            'all_item'=>'所有产品分类',
            'parent_item'=>'上一级分类',
            'parent_item_colon'=>'',
            'edit_item'=>'编辑分类',
            'update_item'=>'更新产品分类',
            'add_new_item'=>'添加产品新分类',
            'new_item_name'=>'新产品分类',
            'menu_name'=>'产品分类'
        );
        //参数函数
        $arr = array(
            'labels'=>$labels,
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical'=>true
        );
        // 为products文章类型定义分类
        // 参数1   定义的分类名称(非前台显示,仅供后台调用使用)
        // 参数2   为那个类型增加分类
        // 参数3    信息数组
        register_taxonomy('product_taxonomy','products',$arr);
    }

    // 为产品类型列表添加自定义模块
    function column_products($columns){
        //定义自定义模块   和名称
        $columns['product_key']='产品型号';
        $columns['product_taxonomy']='产品分类';
        $columns['ID']='产品ID';
        //去除已含有的模块
        unset($columns['comments']);
        // 返回所有值
        return $columns;
    }

    // 为产品类型列表添加自定义模块
    function output_products_columns($columns_name){
        global $post;
        // 获取对应自定义列表模块的值
        switch($columns_name){
            case 'product_key':
                $post_id = $post->ID;
                echo get_post_meta($post_id,'_product_key',true);
                // var_dump($post);
                break;
            case 'product_taxonomy':
                $post_id = $post->ID;
                $cat = get_the_term_list($post_id, 'product_taxonomy', '','<br/>') ;
                echo $cat;
                break;
            case 'ID':
                $post_id = $post->ID;
                echo $post_id;
                break;
        }
    }

?>