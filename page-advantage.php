<?php get_header();?>
<div id="doc" class="col-2-left-layout">
<article id="col-main">
	<div id="c-box">
		<div class="breadcrumbs">You are here:&nbsp;&nbsp;<a href="http://www.ventioninc.com/">Home</a> &gt; <h1 style="line-height:18px;font-weight:700;margin:0 6px;font-size:12px;display:inline">Our advantage</h1></div>
 	    <script type="text/javascript">
        $(document).ready(function() {
            if ($("#imgId").size() > 0) {
                var imgObj = new Image();
                imgObj.onload = function() {
                    var width = imgObj.width;
                    var height = imgObj.height;
                    if (width < 100) {
                        width = 500;
                    }
                    if(width > 1000){
                    	width = 1000;
                    }
                    if (height < 100) {
                        height = 350;
                    }
                    if(height > 1200){
                    	height = 1200;
                    }
                    $("#imgDetailDialog").dialog({
                        bgiframe: true,
                        autoOpen: false,
                        height: height + 80,
                        width: width + 40,
                        modal: true,
                        closeOnEscape: true
                    });
                }
                imgObj.src = $("#imgId").attr("src");
            }
        });
        function detailShow(title) {
            $("#imgDetailDialog").html($("#img_detail").html());
            $("#imgDetailDialog").dialog("option", "title", title);
            $("#imgDetailDialog").dialog("open");
        }
    </script>
    <section class="post">
        <div class="entry-title">
            <strong class="noH">
                 Our advantage
            </strong>
            <span class="more">&nbsp;</span>
        </div>
        <div class="entry-content meunDescription" id="article">
            <h1>
                Our advantage
            </h1>
                <p class="entry-date">
                    Nov 10, 2016 11:44:28 AM
                </p>
                <p style="overflow-x:auto;overflow-y:hidden;width: 100%;text-align: center;margin-top: 10px;">
                    <img id="imgId" onload="Indie.setImgWH(this,500,500)" alt="Our advantage" src="./page-advantage_files/114428488_s.jpg" class="imgLoadError" onclick="javascript:detailShow(&#39;Our advantage&#39;);" width="500" height="375">
                </p>
            <div style="overflow: auto;" class="menuDescription">
            	<div>1.Brand high quality guarantee, more then 10 years professional manufacture</div>
<div>&amp;manager experience ,more then 6 years brand manager experience<br>
 </div>
<div>2.Stock for support fast deliver with small MOQ required , hundred SKU for choose , near all of our brand items has in stock.<br>
 </div>
<div>3.Full certificate : CE/ROHS/FCC<br>
 </div>
<div>4.Reliable source supplier : customer including Motorola, Sony, Foxconn, Sky, Thomson and so on.<br>
 </div>
<div style="text-align:justify" align="justify"> </div>
<div style="text-align:justify" align="justify">5.Professional off-sales service &amp; tech team to solve your any questions .<br>
 </div>
<div style="text-align:justify" align="justify"> </div>
<div>6.New Product: We will launch new product every month to ensure the competitiveness of our customers.</div>
            </div>
            <br>
            <hr>
            <div style="display: none;" id="img_detail">
                <img src="./page-advantage_files/114428488_s.jpg" onclick="javascript:$(&#39;#imgDetailDialog&#39;).dialog(&#39;close&#39;);" alt="Our advantage" style="margin: 15px auto;">
            </div>
            
        </div>
    </section>
﻿

 		</div>
</article>
<?php get_sidebar();?>
			</div>
<?php get_footer();?>