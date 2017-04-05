<?php
     
    //设置产品浏览次数
    function Xtheme_products_views(){
        //判断是否是文章页
        if(is_single()){
            //获取当前文章ID
            global $post;
            $post_id = $post->ID;
            //如果当前文章存在
            if($post_id){
                //从数据表中取出views值
                $post_views=(int)get_post_meta($post_id,'views',true);
                //如果数据更新失败,证明当前标签不存在
                if( !update_post_meta($post_id,'views',($post_views+1)) ){
                    // 增加views 并赋值为1
                    add_post_meta($post_id,'views',true);
                }
            }
        }
    }

    //调用函数及数据调用
    function Xtheme_views(){
        //获取当前文章ID
        global $post;
        $post_id = $post->ID;
        //取出数据
        $views = get_post_meta($post_id,'views',true);
        //返回数据,并不输出
        return $views;
    }
    //当页面加载时调用,挂载到wp_head函数同步执行
    add_action('wp_head','Xtheme_products_views');
 
    /*在产品编辑界面的主栏中添加型号模块 */
    function Xtheme_product_xinghao() {
        add_meta_box(
            'myplugin_sectionid',
            '产品信息',
            'Xtheme_product_xinghao_inner',
            'products'
        );
    }
 
    /* 输出模块内容 */
    function Xtheme_product_xinghao_inner( $post ) {
        
        // 使用随机数进行核查
        wp_nonce_field( plugin_basename( __FILE__ ), 'product_xinghao_noncename' );
        
        // 用于数据输入的实际字段
        // 使用 get_post_meta 从数据库中检索现有的值，并应用到表单中
        $value = get_post_meta( $post->ID, '_product_key', true );
        echo '<label for="product_key">';
        echo '输入产品的型号(英语)';
        echo '</label> ';
        echo '<input type="text" id="product_key" name="product_key" value="'.esc_attr($value).'" size="25" /><br/>';
    }


    /* 文章保存时，保存我们的自定义数据*/
    function product_xinghao_save( $post_id ) {
            
        // 其次，我们需要检查，是否用户想改变这个值。
        if ( ! isset( $_POST['product_xinghao_noncename'] ) || ! wp_verify_nonce( $_POST['product_xinghao_noncename'], plugin_basename( __FILE__ ) ) )
            return;
        
        // 第三，我们可以保存值到数据库中
        
        //如果保存在自定义的表，获取文章ID
        $post_ID = $_POST['post_ID'];
        //过滤用户输入
        $mydata = sanitize_text_field( $_POST['product_key'] );
        
        // 使用$mydata做些什么 
        // 或者使用
        add_post_meta($post_ID, '_product_key', $mydata, true) 
        or
        update_post_meta($post_ID, '_product_key', $mydata);
        // 或自定义表（见下面的进一步阅读的部分）
    }

?>