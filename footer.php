<footer id="footer">

   <!-- 特殊要求 342925 -->
  <p class="copyright"> Copyright © <span xc_no_trans="on"><a href="<?php bloginfo( 'url' );?>"><?php bloginfo( 'name' );?> </a></span><br/>
    <span> Designed By <a href="http://www.zzfqkj.com/" title="Zhengzhou Fengqing Technology"> www.zzfqkj.com</a></span>
     <a href="<?php bloginfo( 'url' )?>/sitemap.xml"> XML </a> 
	 <a href="<?php bloginfo( 'url' )?>/sitemap.html"> Sitemap </a> 
	<br>
     <br>
  </p>
</footer>

		
    <div id="newChatBox" class="newChatBox">
        <div class="newChatTitle">
            <strong>Contact Us</strong>
        </div>
        <span>Welcome to our website!</span>
        <ul>
			<li style="text-align:center;">
				<a href="/contact">
					<span class="newChatBoxName">
						<?php
							$person = get_option('Xtheme_options_2')['Contact_Person'];
							if($person){
								echo $person;
							}else{
								echo 'Sales Manager';
							}
						?>
					</span>
				</a>
			</li>
        </ul>
        <div class="arrows_up">
            <a class="arrows_up_a" href="#">Top</a>
        </div>
    </div>
    <div id="newChatBoxSmall" class="newChatBox" style="display: none;width: 105px">
        <div class="newChatTitle">
            <strong>Contact Us</strong>
        </div>
                <div class="chatNumber">
                    <span class="skype">
                        <a class="skype-ico" rel="nofollow" href="skype:vention.Ningbo?chat">
                            <img width="20" height="20" alt="skype" style="border: none;" src="<?php bloginfo('stylesheet_directory');?>/img/skype_20.png"></a>
                    </span>
                    <span class="newChatBoxName">Vention Jenny</span>
                </div>
        <div class="arrows_up">
            <a class="arrows_up_a" style="background-image: url(&#39;/images/arrows_down.gif&#39;);" href="javascript:changeChatBox(&#39;small&#39;)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
    </div>
</body></html>