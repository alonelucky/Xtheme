<?php
    //注册备用选项
    function Xtheme_group_1(){
        //参数1   选项群组
        //参数2   options表字段
        register_setting(
            'Xtheme_group_1',
            'Xtheme_options_1'
        );
    }
    //注册第二个选项
    function Xtheme_group_2(){
        //参数1   选项群组
        //参数2   options表字段
        register_setting(
            'Xtheme_group_2',
            'Xtheme_options_2'
        );
    }

	//注册第二个选项
    function Xtheme_group_3(){
        //参数1   选项群组
        //参数2   options表字段
        register_setting(
            'Xtheme_group_3',
            'Xtheme_options_3'
        );
    }
	
	//注册第二个选项
    function Xtheme_group_4(){
        //参数1   选项群组
        //参数2   options表字段
        register_setting(
            'Xtheme_group_4',
            'Xtheme_options_4'
        );
    }
	
    add_action('admin_init','Xtheme_group_1');
    add_action('admin_init','Xtheme_group_2');
	add_action('admin_init','Xtheme_group_3');
	add_action('admin_init','Xtheme_group_4');

    //增加所需字段函数 对应functions.php   59行
    function Xtheme_theme_options_fun(){
		$Xtheme_area_1='Xtheme_area_1';
		$Xtheme_group_1='Xtheme_group_1';
		
		$Xtheme_area_2='Xtheme_area_2';
		$Xtheme_group_2='Xtheme_group_2';
		
		$Xtheme_area_3='Xtheme_area_3';
		$Xtheme_group_3='Xtheme_group_3';
		
		$Xtheme_area_4='Xtheme_area_4';
		$Xtheme_group_4='Xtheme_group_4';
        //确定群组区域
        //参数1   选项区域
        //参数2   
        //参数3
        //参数4   选项群组
        add_settings_section(
            $Xtheme_area_1,
            '',
            '',
            'Xtheme_group_1'
        );
        //定义第二个群组区域
        add_settings_section(
            'Xtheme_area_2',
            '',
            '',
            'Xtheme_group_2'
        );
		//定义第二个群组区域
        add_settings_section(
            'Xtheme_area_3',
            '',
            '',
            'Xtheme_group_3'
        );
		//定义第二个群组区域
        add_settings_section(
            'Xtheme_area_4',
            '',
            '',
            'Xtheme_group_4'
        );


        //为选项区域增加子选项
        //参数1   字段名称
        //参数2   字段前台显示文本
        //参数3   表单定义函数
        //参数4   所属群组
        //参数5   所属区域
        add_settings_field(
            'Xtheme_established',
            '成立时间',
            'Xtheme_established_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );

        add_settings_field(
            'Xtheme_staff',
            '企业人数',
            'Xtheme_staff_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );

        add_settings_field(
            'Xtheme_RD_staff',
            '研发人数',
            'Xtheme_RD_staff_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );

        add_settings_field(
            'Xtheme_Engineers',
            '工程师人数',
            'Xtheme_Engineers_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );
		
		add_settings_field(
            'Xtheme_OEM',
            'OEM服务',
            'Xtheme_OEM_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );

		add_settings_field(
            'Xtheme_Payment',
            '付款方式',
            'Xtheme_Payment_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );
		
		add_settings_field(
            'Xtheme_Business_Type',
            '企业类型',
            'Xtheme_Business_Type_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );
		
		add_settings_field(
            'Xtheme_Certificate',
            '质量认证',
            'Xtheme_Certificate_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );
		
		add_settings_field(
            'Xtheme_Markets',
            '主销区域',
            'Xtheme_Markets_fun',
            $Xtheme_group_1,
            $Xtheme_area_1
        );
        //设定tab第二个菜单的选项
        add_settings_field(
            'Xtheme_Address',
            '企业地址',
            'Xtheme_Address_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_phone',
            '联系电话',
            'Xtheme_phone_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_website',
            '网站',
            'Xtheme_website_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_Contact_Person',
            '联系人',
            'Xtheme_Contact_Person_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_email',
            '邮箱',
            'Xtheme_email_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_Mobile',
            '手机',
            'Xtheme_Mobile_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_facebook',
            'Facebook主页',
            'Xtheme_facebook_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_twitter',
            'Twitter主页',
            'Xtheme_twitter_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		add_settings_field(
            'Xtheme_linkedin',
            'LinkedIn主页',
            'Xtheme_linkedin_fun',
            $Xtheme_group_2,
            $Xtheme_area_2
        );
		
		//设置第三个菜单项
		add_settings_field(
            'Xtheme_company_info',
            '企业简介',
            'Xtheme_company_info_fun',
            $Xtheme_group_3,
            $Xtheme_area_3
        );
		
		add_settings_field(
            'Xtheme_main_products',
            '主营产品',
            'Xtheme_main_products_fun',
            $Xtheme_group_3,
            $Xtheme_area_3
        );
		
		add_settings_field(
            'Xtheme_contact_form',
            '询盘设置',
            'Xtheme_contact_form_fun',
            $Xtheme_group_3,
            $Xtheme_area_3
        );
		
		//设置第四个菜单项
		add_settings_field(
            'Xtheme_company_logo',
            '站点Logo',
            'Xtheme_company_logo_fun',
            $Xtheme_group_4,
            $Xtheme_area_4
        );
		
		add_settings_field(
            'Xtheme_company_img',
            '企业图片展示',
            'Xtheme_company_img_fun',
            $Xtheme_group_4,
            $Xtheme_area_4
        );
		
		add_settings_field(
            'Xtheme_Analytics',
            '谷歌分析代码',
            'Xtheme_Analytics_fun',
            $Xtheme_group_4,
            $Xtheme_area_4
        );
		
        //引入主题中心输出文件
        include('options_views.php');
    }
    //企业成立时间
    function Xtheme_established_fun(){
        ?>
        <input type="date" name="Xtheme_options_1[established]" id="Xtheme_options_1[established]" value="<?php echo get_option('Xtheme_options_1')['established'];?>"><p class="description">企业成立的时间</p>
        <?php
    }
	//企业人数
	function Xtheme_staff_fun(){
        ?>
        <input type="number" name="Xtheme_options_1[staff]" id="Xtheme_options_1[staff]" value="<?php echo get_option('Xtheme_options_1')['staff'];?>"><p class="description">企业规模</p>
        <?php
    }
	//研发人员人数
	function Xtheme_RD_staff_fun(){
        ?>
        <input type="number" name="Xtheme_options_1[RD_staff]" id="Xtheme_options_1[RD_staff]" value="<?php echo get_option('Xtheme_options_1')['RD_staff'];?>"><p class="description">企业研发人员数量</p>
        <?php
    }
	//工程师人数
	function Xtheme_Engineers_fun(){
        ?>
        <input type="number" name="Xtheme_options_1[Engineers]" id="Xtheme_options_1[Engineers]" value="<?php echo get_option('Xtheme_options_1')['Engineers'];?>"><p class="description">企业工程师人数</p>
        <?php
    }
	//OEM服务
	function Xtheme_OEM_fun(){
        ?>
        <select name="Xtheme_options_1[OEM]" id="Xtheme_options_1[OEM]">
			<option value="true" <?php selected('true',get_option('Xtheme_options_1')['OEM'][0]);?>>True</option>
			<option value="false" <?php selected('false',get_option('Xtheme_options_1')['OEM'][1]);?>>False</option>
		</select><p class="description">是否提供OEM服务</p>
        <?php
    }
	//付款方式
	function Xtheme_Payment_fun(){
        ?>
        <input type="checkbox" name="Xtheme_options_1[Payment][0]" id="Xtheme_options_1[Payment][0]" value="T/T" <?php checked('T/T',get_option('Xtheme_options_1')['Payment'][0]);?>>T/T 
		
		<input type="checkbox" name="Xtheme_options_1[Payment][1]" id="Xtheme_options_1[Payment][1]" value="L/C" <?php checked('L/C',get_option('Xtheme_options_1')['Payment'][1]);?>>L/C 
		
		<input type="checkbox" name="Xtheme_options_1[Payment][2]" id="Xtheme_options_1[Payment][2]" value="D/A" <?php checked('D/A',get_option('Xtheme_options_1')['Payment'][2]);?>>D/A 
		
		<input type="checkbox" name="Xtheme_options_1[Payment][3]" id="Xtheme_options_1[Payment][3]" value="D/P" <?php checked('D/P',get_option('Xtheme_options_1')['Payment'][3]);?>>D/P
		
		<input type="checkbox" name="Xtheme_options_1[Payment][4]" id="Xtheme_options_1[Payment][4]" value="WU" <?php checked('WU',get_option('Xtheme_options_1')['Payment'][4]);?>>WU
		
		<input type="checkbox" name="Xtheme_options_1[Payment][5]" id="Xtheme_options_1[Payment][5]" value="Paypal" <?php checked('Paypal',get_option('Xtheme_options_1')['Payment'][5]);?>>Paypal <p class="description">支持的交易方式</p>
        <?php
    }
	//企业类型
	function Xtheme_Business_Type_fun(){
        ?>
        <input type="text" name="Xtheme_options_1[Business_Type]" id="Xtheme_options_1[Business_Type]" value="<?php echo get_option('Xtheme_options_1')['Business_Type'];?>"> <p class="description">企业资本类型</p>
        <?php
    }
	//质量认证
	function Xtheme_Certificate_fun(){
        ?>
        <input type="text" name="Xtheme_options_1[Certificate]" id="Xtheme_options_1[Certificate]" value="<?php echo get_option('Xtheme_options_1')['Certificate'];?>"> <p class="description">企业获得的权威认证，以逗号分割</p>
        <?php
    }
	//主销区域
	function Xtheme_Markets_fun(){
        ?>
        <input type="text" name="Xtheme_options_1[Markets]" id="Xtheme_options_1[Markets]" value="<?php echo get_option('Xtheme_options_1')['Markets'];?>"> <p class="description">产品主销区域，以逗号分割</p>
        <?php
    }
	
	//企业地址
	function Xtheme_Address_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[Address]" id="Xtheme_options_2[Address]" value="<?php echo get_option('Xtheme_options_2')['Address'];?>"><p class="description">工厂地址</p>
        <?php
    }
	//联系电话
	function Xtheme_phone_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[phone]" id="Xtheme_options_2[phone]" value="<?php echo get_option('Xtheme_options_2')['phone'];?>">  <p class="description">网站联系电话</p>
        <?php
    }
	//网站
	function Xtheme_website_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[website]" id="Xtheme_options_2[website]" value="<?php echo get_option('Xtheme_options_2')['website'];?>">  <p class="description">企业网站，默认为本站</p>
        <?php
    }
	//联系人
	function Xtheme_Contact_Person_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[Contact_Person]" id="Xtheme_options_2[Contact_Person]" value="<?php echo get_option('Xtheme_options_2')['Contact_Person'];?>">  <p class="description">网站联系人</p>
        <?php
    }
	//邮箱
	function Xtheme_email_fun(){
        ?>
        <input type="email" name="Xtheme_options_2[email]" id="Xtheme_options_2[email]" value="<?php echo get_option('Xtheme_options_2')['email'];?>">  <p class="description">销售经理邮箱</p>
        <?php
    }
	//手机
	function Xtheme_Mobile_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[Mobile]" id="Xtheme_options_2[Mobile]" value="<?php echo get_option('Xtheme_options_2')['Mobile'];?>"> <p class="description">销售经理手机号码</p>
        <?php
    }
	//Facebook主页
	function Xtheme_facebook_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[facebook]" id="Xtheme_options_2[facebook]" value="<?php echo get_option('Xtheme_options_2')['facebook'];?>"> <p class="description">Facebook主页链接</p>
        <?php
    }
	//Twitter主页
	function Xtheme_twitter_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[twitter]" id="Xtheme_options_2[twitter]" value="<?php echo get_option('Xtheme_options_2')['twitter'];?>">  <p class="description">Twitter主页链接</p>
        <?php
    }
	//LinkedIn主页
	function Xtheme_linkedin_fun(){
        ?>
        <input type="text" name="Xtheme_options_2[linkedin]" id="Xtheme_options_2[linkedin]" value="<?php echo get_option('Xtheme_options_2')['linkedin'];?>">  <p class="description">LinkedIn主页链接</p>
        <?php
    }
	// 企业简介
	function Xtheme_company_info_fun(){
		?>
		<textarea name="Xtheme_options_3[company_info]" id="Xtheme_options_3[company_info]" cols="50" rows="5"><?php echo get_option('Xtheme_options_3')['company_info'];?></textarea>  <p class="description">企业简介（英语）</p>
		<?php
	}
	// 主营产品
	function Xtheme_main_products_fun(){
		?>
		<textarea name="Xtheme_options_3[main_products]" id="Xtheme_options_3[main_products]" cols="50" rows="5"><?php echo get_option('Xtheme_options_3')['main_products'];?></textarea> <p class="description">企业主营产品（英语）</p>
		<?php
	}
	// 询盘设置
	function Xtheme_contact_form_fun(){
		?>
		<textarea name="Xtheme_options_3[contact_form]" id="Xtheme_options_3[contact_form]" cols="50" rows="5"><?php echo get_option('Xtheme_options_3')['contact_form'];?></textarea> <p class="description">Contact Form 7 短代码</p>
		<?php
	}
	
	// 企业Logo
	function Xtheme_company_logo_fun(){
		?>
		<input type="text" name="Xtheme_options_4[company_logo]" id="Xtheme_options_4[company_logo]" value="<?php echo get_option('Xtheme_options_4')['company_logo'];?>"/> 
		<p class="description">网站logo,从媒体库上传，拷贝图片链接</p>
		<?php
	}
	
	// 企业图片展示
	function Xtheme_company_img_fun(){
		?>
		<input type="text" name="Xtheme_options_4[company_img]" id="Xtheme_options_4[company_img]" value="<?php echo get_option('Xtheme_options_4')['company_img'];?>"/>
		<p class="description">首页企业图片展示，从媒体库上传，拷贝图片链接</p>
		<?php
	}
	
	// 企业图片展示
	function Xtheme_Analytics_fun(){
		?>
		<textarea name="Xtheme_options_4[Analytics]" id="Xtheme_options_4[Analytics]" cols="50" rows="5"><?php echo get_option('Xtheme_options_4')['Analytics'];?></textarea>  <p class="description">网站流量统计代码</p>
		<?php 
	}
		
?>