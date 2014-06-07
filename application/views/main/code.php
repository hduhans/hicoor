<?=$header;?>
<div class="block">
	<div id="lft_div">
		<div class="lft_top"></div>
		<div id="detail">
			<div id="hd">
				<strong><a href="#">海酷首页</a> &gt; <a href="#">网页制作</a> &gt; <a href="#">网页特效</a> &gt; </strong>
				<em>

				</em>
			</div>
			<h1><?=$codeRow[0]->title;?></h1>
			<span>作者:hans   时间:<?=date("Y-m-d",strtotime($codeRow[0]->time));?>   浏览量:<?=$codeRow[0]->count;?></span>
		</div>
		<div class="md">
			<textarea style="width:600px;height:310px;"><?=$codeRow[0]->body;?></textarea>
			<div class="btn_div">
				<strong><a href="<?=site_url('home/codeRun/1');?>" target="_blank">运行代码</a></strong><strong><a href="#">全选复制</a></strong>
				<strong><a href="#">下载保存</a></strong><strong><a href="#">添加收藏</a></strong>
				<strong><a href="#">关闭此页</a></strong>
			</div>
			<div class="clear"></div>
		</div>
		<div class="msg_div">
			<span>提示：</span>您可以先修改代码再运行，您可以保存此页面方便日后访问！
		</div>
		<div id="detail2">
          <div class="div">&nbsp;>&nbsp;&nbsp;查看更多推荐&nbsp;&nbsp;<a href="#"><b>CSS教程</b></a></div>
		  <div class="div"> <a href="#" class="d">
		    <div class="ding"><i>顶(88)</i></div>
		    </a>
              <div class="tj"> <a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a> <a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a><a href="#">服务器被入侵了？</a> </div>
		    <a href="#" class="c">
		      <div class="cai"><i>踩(2)</i></div>
	        </a> </div>
		  <div class="clear"></div>
		  <div class="tags"> <img src="<?=base_url();?>images/hyfx.jpg" /><a href="#">好友分享</a><img src="<?=base_url();?>images/tjsc.jpg" /><a href="#">收藏本页</a> <img src="<?=base_url();?>images/dyby.jpg" /><a href="#">打印本页</a><img src="<?=base_url();?>images/tgfb.jpg" /><a href="#">投稿发布</a> <u class="t"><a href="#">返回顶部</a></u><u class="l"><a href="#">返回列表</a></u> </div>
		  <div class="relate">更多相关&nbsp;网页特效&nbsp;教程：</div>
		  <div class="r_list">
            <ul>
              <li><a href="#">学习CSS布局网页的一些实例</a></li>
              <li><a href="#">CSSframework：浅谈CSS框架利弊</a></li>
              <li><a href="#">针对于IE6、IE7、Firefox如何运用CSShack</a></li>
              <li><a href="#">CascadingStyleSheetslevel2-CSS2中文翻</a></li>
              <li><a href="#">CSS的学习应该注意学习方法</a></li>
            </ul>
		    <ul>
              <li><a href="#">漫谈CSS的体系与格局（图示）</a></li>
		      <li><a href="#">CSS教程11、CSS的属性缩写[翻译Htmldog]</a></li>
		      <li><a href="#">CSS中级教程CSS伪类</a></li>
		      <li><a href="#">非主流浏览器Nascape中CSS的显示与IE的差</a></li>
		      <li><a href="#">CSS教程:可扩展圆角标签的实现方法</a></li>
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