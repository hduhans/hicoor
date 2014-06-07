<?=$header;?>
<div class="block">
	<div id="lft_div">
		<div class="lft_top"></div>
		<div id="detail">
			<div id="hd">
				<strong><a href="<?=site_url();?>">海酷首页</a> &gt; <?=$path[1];?> &gt; <a href="<?=site_url('home/alist')."/".$path[3]."/1";?>"><?=$path[2];?></a> &gt; </strong>
				<em>

				</em>
			</div>
			<?php foreach($detailNews as $rows) { ?>
			<h1><?=$rows->title;?></h1>
			<span>作者:hans   时间:<?=date("Y-m-d",strtotime($rows->time));?>   浏览量:<?=$rows->count;?></span>
		</div>
		<div id="p_div">
			<p>
				<?php echo $rows->body; }?>
			</p>
		</div>
		<div id="detail2">
			<div class="div">&nbsp;>&nbsp;&nbsp;查看更多推荐&nbsp;&nbsp;<a href="<?=site_url('home/alist')."/".$path[3]."/1";?>"><b><?=$path[2];?></b></a></div>
			<div class="div">
				<a href="#" class="d"><div class="ding"><i>顶(88)</i></div></a>
				<div class="tj">
					<a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a>
					<a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a>
				</div>
				<a href="#" class="c"><div class="cai"><i>踩(2)</i></div></a>
			</div>
			<div class="clear"></div>
		    <script type="text/javascript">
			<!--
			//添加收藏
			function addfavorite(url,title){
				var fav_url = url;
				var fav_title = title;
				if (document.all && window.external){
					window.external.AddFavorite(fav_url,fav_title);
				}else if (window.sidebar){
					window.sidebar.addPanel(fav_title,fav_url,"");
				}else{
					alert("浏览器不支持，请手动加入收藏夹");
				}
			} 
			//-->
			</script>
			<div class="tags">
				<img src="<?=base_url();?>images/hyfx.jpg" /><a href="#">好友分享</a><img src="<?=base_url();?>images/tjsc.jpg" /><a href="javascript:addfavorite(location.href,document.title);">收藏本页</a>
				<img src="<?=base_url();?>images/dyby.jpg" /><a href="javascript:window.print();">打印本页</a><img src="<?=base_url();?>images/tgfb.jpg" /><a href="#">投稿发布</a>
				<u class="t"><a href="#">返回顶部</a></u><u class="l"><a href="<?=site_url('home/alist')."/".$path[3]."/1";?>">返回列表</a></u>
			</div>
			<div class="relate">更多相关&nbsp;<?=$path[2];?>&nbsp;教程：</div>
			<div class="r_list">
				<ul>
					<?php 
						$i=0;
						foreach($linkArticle as $rows)
						{
							echo "<li><a href='".site_url('home/adetail').'/'.$rows[0]."' target='_blank'>".$rows[1]."</a></li>";
							$i++;
							if($i==5) echo "</ul><ul>";
						}
					?>
				</ul>
			</div>
		</div>
		<div class="lft_bot"></div>
	</div>
	<!--文章列表-->
	<!--热点推荐-->
	<div id="right">
		<div class="right_div_255">
			<div class="title">
				<h3>热点内容推荐</h3>
			</div>
			<ul>
				<li class="t1"><a href="#">推荐：精选上百个网页精美图标下载</a></li>
				<li class="t2"><a href="#">网页设计及web开发常用在线手册</a></li>
				<li class="t3"><a href="#">jQuery经典实用插件整理收藏</a></li>
				<li class="t4"><a href="#">JavaScript网页特效-让你的网页靓起来</a></li>
				<li class="t5"><a href="#">国内外（欧美日韩）优秀网站设计欣赏</a></li>
				<li class="t6"><a href="#">上万个企业网站模板免费下载</a></li>
				<li class="t7"><a href="#">网页设计常用字体免费下载</a></li>
				<li class="t8"><a href="#">网页设计教程知识库</a></li>
				<li class="t9"><a href="#">网页平面设计-网页设计高手必备条件</a></li>
				<li class="t10"><a href="#">推荐：精选上百个网页精美图标下载</a></li>
				<li class="t11"><a href="#">网页制作教程大全，学习进阶</a></li>
			</ul>
		</div>
		<!--热点推荐 end-->
		<div class="ad_255">
			<a href="#"><img src="<?=base_url();?>images/img/list_right_ad1.jpg" /></a>
		</div>
		<div class="ad_255">
			<a href="#"><img src="<?=base_url();?>images/img/list_right_ad2.jpg" /></a>
		</div>
	</div>
</div>
<div class="clear"></div>
<?=$footer;?>