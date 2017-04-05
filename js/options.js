jQuery(document).ready(function($){
	//控制tab选项卡
    $('.kl-tab > li').on('click',function(index){
       var i = $(this).index();
       $(this).addClass('active').siblings().removeClass('active');

       $('.content').eq(i).removeClass('hidden').addClass('div-active').siblings().removeClass('div-active').addClass('hidden');
    });
	//控制上传文件
	
	
});