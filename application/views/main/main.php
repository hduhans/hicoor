<?=$header;?>
<?php 
	function mySubSTr($body='',$cutNum=50)
	{
		$str=strip_tags($body);
		$delStr="";
		for($i=0;$i<strlen($str);$i++)
		{
			if($str[$i]!=" ") $delStr.=$str[$i];    //去空格
		}
		if(strlen($delStr)>$cutNum) echo mb_substr($delStr,0,$cutNum,'gb2312')."...";
		else echo $delStr;	
	}
?>
<div class="block">
	<!--今日头条-->
	<div id="jrtt_div">
		<div class="left_top"></div>
		<div id="jrtt">
			<div id="div_img">
				<div id="focus_change">
					<div id="focus_change_list">
						<ul>
							<li><a href="http://www.webjx.com/"><img src="<?=base_url();?>images/img/lz_1.jpg" alt="" /></a></li>
							<li><a href="http://www.webjx.com/"><img src="<?=base_url();?>images/img/lz_2.jpg" alt="" /></a></li>
							<li><a href="http://www.webjx.com/"><img src="<?=base_url();?>images/img/lz_3.jpg" alt="" /></a></li>
							<li><a href="http://www.webjx.com/"><img src="<?=base_url();?>images/img/lz_4.jpg" alt="" /></a></li>
						</ul>
					</div>
					<div class="focus_change_opacity"></div>
					<div id="focus_change_btn">
						<ul>
							<li class="current"><a href="#"><img src="<?=base_url();?>images/img/lz_1.jpg" alt="" /></a></li>
							<li><a href="#"><img src="<?=base_url();?>images/img/lz_2.jpg" alt="" /></a></li>
							<li><a href="#"><img src="<?=base_url();?>images/img/lz_3.jpg" alt="" /></a></li>
							<li><a href="#"><img src="<?=base_url();?>images/img/lz_4.jpg" alt="" /></a></li>
						</ul>
					</div>
				</div><!--focus_change end-->
				<script language="javascript" type="text/javascript">
					/*图片轮转*/
					function $(id) { return document.getElementById(id); }
					function moveElement(elementID,final_x,final_y,interval) {
					if (!document.getElementById) return false;
					if (!document.getElementById(elementID)) return false;
					var elem = document.getElementById(elementID);
					if (elem.movement) {
					clearTimeout(elem.movement);
					}
					if (!elem.style.left) {
					elem.style.left = "0px";
					}
					if (!elem.style.top) {
					elem.style.top = "0px";
					}
					var xpos = parseInt(elem.style.left);
					var ypos = parseInt(elem.style.top);
					if (xpos == final_x && ypos == final_y) {
					return true;
					}
					if (xpos < final_x) {
					var dist = Math.ceil((final_x - xpos)/10);
					xpos = xpos + dist;
					}
					if (xpos > final_x) {
					var dist = Math.ceil((xpos - final_x)/10);
					xpos = xpos - dist;
					}
					if (ypos < final_y) {
					var dist = Math.ceil((final_y - ypos)/10);
					ypos = ypos + dist;
					}
					if (ypos > final_y) {
					var dist = Math.ceil((ypos - final_y)/10);
					ypos = ypos - dist;
					}
					elem.style.left = xpos + "px";
					elem.style.top = ypos + "px";
					var repeat = "moveElement('"+elementID+"',"+final_x+","+final_y+","+interval+")";
					elem.movement = setTimeout(repeat,interval);
					}
					function classNormal(){
					var focusBtnList = $('focus_change_btn').getElementsByTagName('li');
					for(var i=0; i<focusBtnList.length; i++) {
					focusBtnList[i].className='';
					}
					}
					function focusChange() {
					var focusBtnList = $('focus_change_btn').getElementsByTagName('li');
					focusBtnList[0].onmouseover = function() {
					moveElement('focus_change_list',0,0,5);
					classNormal()
					focusBtnList[0].className='current'
					}
					focusBtnList[1].onmouseover = function() {
					moveElement('focus_change_list',-359,0,5);
					classNormal()
					focusBtnList[1].className='current'
					}
					focusBtnList[2].onmouseover = function() {
					moveElement('focus_change_list',-718,0,5);
					classNormal()
					focusBtnList[2].className='current'
					}
					focusBtnList[3].onmouseover = function() {
					moveElement('focus_change_list',-1077,0,5);
					classNormal()
					focusBtnList[3].className='current'
					}
					}
					setInterval('autoFocusChange()', 5000);
					var atuokey = false;
					function autoFocusChange() {
					$('focus_change').onmouseover = function(){atuokey = true}
					$('focus_change').onmouseout = function(){atuokey = false}
					if(atuokey) return;
					var focusBtnList = $('focus_change_btn').getElementsByTagName('li');
					for(var i=0; i<focusBtnList.length; i++) {
					if (focusBtnList[i].className == 'current') {
					var currentNum = i;
					}
					}
					if (currentNum==0 ){
					moveElement('focus_change_list',-359,0,5);
					classNormal()
					focusBtnList[1].className='current'
					}
					if (currentNum==1 ){
					moveElement('focus_change_list',-718,0,5);
					classNormal()
					focusBtnList[2].className='current'
					}
					if (currentNum==2 ){
					moveElement('focus_change_list',-1077,0,5);
					classNormal()
					focusBtnList[3].className='current'
					}
					if (currentNum==3 ){
					moveElement('focus_change_list',0,0,5);
					classNormal()
					focusBtnList[0].className='current'
					}
					}
					window.onload=function(){
					focusChange();
					}
				</script>
			</div>
			<div id="jrtt_right">
				<h4><a href="<?=site_url('home/adetail').'/'.$topNew[0]->id;?>" target="_blank" style="color:#4089f2;"><?=$topNew[0]->title; ?></a></h4>
				<p>&nbsp;&nbsp;&nbsp;
				<?=mySubSTr($topNew[0]->body,78);?>
				[<a href="<?=site_url('home/adetail').'/'.$topNew[0]->id;?>" target="_blank" style="color:#4089f2;">详细</a>]
				</p>
				<div class="div"></div>
				<?php foreach ($topFour as $rows)
						echo "<h3>[<a href='".site_url('home/alist')."/".$rows->k_id."/1"."'>".$rows->kindName."</a>]&nbsp;<a href='".site_url('home/adetail').'/'.$rows->id."' target='_blank'>".$rows->title."</a></h3>";
				?>
			</div>
		</div>
		<div class="left_bottom"></div>
	</div>
	<!--今日头条 end-->
	<!--热点推荐-->
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
	<!--建站运营-->
	<div id="jzyy_div">
		<div class="left_top"></div>
		<div id="jzyy">
			<div id="Tab">
			 <div class="Menubox">
					<ul>
						<?php 
							$j=1;
							foreach($jzyyMenu as $rows)  
							{
								 if($j==5) echo "<li id='two5' onclick=setTab('two',5,5) class='hover'>";
								 else echo "<li id='two$j' onclick=setTab('two',$j,5)>";
								 echo $rows->menu_name."</li>";
								 $j++;
							}
						?>
					</ul>
				</div>
				<div class="Contentbox">
					<?php foreach($jzyyList as $ii=>$menuList) { ?>
					<div id="con_two_<?=$ii+1;?>" <?php if($ii!=4) echo "style='display:none'"; ?> >
					    <div class="img_div"><a href="#"><img src="<?=base_url().$menuList['imgUrl'];?>" alt="大学生如何网上赚钱" title="大学生如何网上赚钱" /></a></div>
						<div class="right"></div>
						<h4><a href="<?=site_url('home/adetail').'/'.$menuList["id"];?>" target="_blank" style="color:#4089f2;"><?=$menuList["title"];?></a></h4>
						<p>
						<?=mySubSTr($menuList["body"],70);?>
						[<a href="<?=site_url('home/adetail').'/'.$menuList["id"];?>" target="_blank" style="color:#4089f2;font-weight:bold;">详细</a>]
						</p>
						<span></span>
						<ul>
							<?php
								$i=1;
								foreach($menuList["list"] as $id=>$title)
								{
									echo "<li><a href='".site_url('home/adetail').'/'.$id."' target='_blank'>".$title."</a></li>";
									if(($i++)==5) echo "</ul><ul>";
								}
							?>
						</ul>
					</div>
					<?php } ?>
				</div> 
			</div>
		</div>
		<div class="left_bottom"></div>
	</div>
	<!--建站运营 end-->
	<!--电脑大全-->
	<div id="dddq">
		<div id="img_div"><a href="#"><img src="<?=base_url();?>images/dndq_img.jpg" /></a></div>
		<h4><a href="<?=site_url('home/adetail').'/'.$dndqList["id"];?>" target="_blank"><?=$dndqList["title"];?></a></h4>
		<div id="con">
			<p><?=mySubSTr($dndqList["body"],80);?></p>
		</div>
		<h5><a href="<?=site_url('home/adetail').'/'.$dndqList["id"];?>" target="_blank">阅读全文>></a></h5>
		<span></span>
		<div id="li">
			<?php
				foreach($dndqList["list"] as $rows)
				{
					echo "<a href='".site_url('home/adetail').'/'.$rows->id."' target='_blank'>".$rows->title."</a>";
				}
			?>
		</div>
	</div>
	<!--电脑大全 end-->
</div>
<div class="clear"></div>
<!--中间广告-->
<div class="ad_mid">
	<img src="<?=base_url();?>images/img/ad_mid.jpg" />
</div>
<!--网页特效-->
<div class="top_960"></div>
<div id="wytx">
	<div id="hd">
		<h2><a href="#">网页特效</a></h2>
	</div>
	<div class="jsBlock">
		<div class="jmLeft">
			<script language="javascript">
			  function switchmodLTag(modLtag,modLcontent,modLk)
				{for(i=1; i<10; i++)
				  {if (i==modLk)
					{document.getElementById(modLtag+i).className="itemOnLeft";document.getElementById(modLcontent+i).className="jmBlock";}
				  else
					{document.getElementById(modLtag+i).className="itemNoLeft";document.getElementById(modLcontent+i).className="jmBlock_none";}
				  }
			   }
			</script>
			<div class="jmBlock" id="jmBlock_list1">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">导航菜单</a></strong>
					<span>本类共有特效&nbsp;<a href="#">118</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="<?=site_url('home/code');?>" target="_blank">三级导航菜单,三级竖向展开/收缩导航菜单</a></li>
					<li><a href="#">仿网易的滑动门技术DIV+CSS实现</a></li>
					<li><a href="#">仿蓝色理想网站的导航菜单</a></li>
					<li><a href="#">鼠标触及带边框菜单</a></li>
					<li><a href="#">超酷仿GOOGLE首页导航菜单效果</a></li>
					<li><a href="#">css模拟title和alt的提示效果</a></li>
					<li><a href="#">用JS实现的类似框架的链接导航模式</a></li>
					<li><a href="#">下拉菜单链接页面打开方式选择</a></li>
				</ul>
			</div>		
			<div class="jmBlock_none" id="jmBlock_list2">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">鼠标特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">188</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list3">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">状态栏类</a></strong>
					<span>本类共有特效&nbsp;<a href="#">78</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list4">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">文本特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">233</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list5">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">窗口特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">97</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list6">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">游戏娱乐</a></strong>
					<span>本类共有特效&nbsp;<a href="#">65</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list7">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">时间日期</a></strong>
					<span>本类共有特效&nbsp;<a href="#">86</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list8">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">警告对话</a></strong>
					<span>本类共有特效&nbsp;<a href="#">38</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list9">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">黑客相关</a></strong>
					<span>本类共有特效&nbsp;<a href="#">188</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
		</div>
		<div class="jmMid">
			<div class="bd1"></div>
			<div class="itemOnLeft" id="modL1" onmousemove="switchmodLTag('modL','jmBlock_list','1');this.blur();">导航菜单</div>
			<div class="itemOnRight" id="modR11" onmousemove="switchmodRTag('modR','jmBlock_list','11');this.blur();">图形特效</div>
			<div class="itemNoLeft" id="modL2" onmousemove="switchmodLTag('modL','jmBlock_list','2');this.blur();">鼠标特效</div>
			<div class="itemNoRight" id="modR12" onmousemove="switchmodRTag('modR','jmBlock_list','12');this.blur();">页面背景</div>
			<div class="itemNoLeft" id="modL3" onmousemove="switchmodLTag('modL','jmBlock_list','3');this.blur();">状态栏类</div>
			<div class="itemNoRight" id="modR13" onmousemove="switchmodRTag('modR','jmBlock_list','13');this.blur();">表单特效</div>
			<div class="itemNoLeft" id="modL4" onmousemove="switchmodLTag('modL','jmBlock_list','4');this.blur();">文本特效</div>
			<div class="itemNoRight" id="modR14" onmousemove="switchmodRTag('modR','jmBlock_list','14');this.blur();">色彩特效</div>
			<div class="itemNoLeft" id="modL5" onmousemove="switchmodLTag('modL','jmBlock_list','5');this.blur();">窗口特效</div>
			<div class="itemNoRight" id="modR15" onmousemove="switchmodRTag('modR','jmBlock_list','15');this.blur();">系统相关</div>
			<div class="itemNoLeft" id="modL6" onmousemove="switchmodLTag('modL','jmBlock_list','6');this.blur();">游戏娱乐</div>
			<div class="itemNoRight" id="modR16" onmousemove="switchmodRTag('modR','jmBlock_list','16');this.blur();">链接特效</div>
			<div class="itemNoLeft" id="modL7" onmousemove="switchmodLTag('modL','jmBlock_list','7');this.blur();">时间日期</div>
			<div class="itemNoRight" id="modR17" onmousemove="switchmodRTag('modR','jmBlock_list','17');this.blur();">广告代码</div>
			<div class="itemNoLeft" id="modL8" onmousemove="switchmodLTag('modL','jmBlock_list','8');this.blur();">警告对话</div>
			<div class="itemNoRight" id="modR18" onmousemove="switchmodRTag('modR','jmBlock_list','18');this.blur();">计数转换</div>
			<div class="itemNoLeft" id="modL9" onmousemove="switchmodLTag('modL','jmBlock_list','9');this.blur();">黑客相关</div>
			<div class="itemNoRight" id="modR19" onmousemove="switchmodRTag('modR','jmBlock_list','19');this.blur();">综合特效</div>	
			<div class="bd2"></div>
		</div>
		<div class="jmRight">
			<script language="javascript">
			  function switchmodRTag(modRtag,modRcontent,modRk)
				{for(i=11; i<20; i++)
				  {if (i==modRk)
					{document.getElementById(modRtag+i).className="itemOnRight";document.getElementById(modRcontent+i).className="jmBlock";}
				  else
					{document.getElementById(modRtag+i).className="itemNoRight";document.getElementById(modRcontent+i).className="jmBlock_none";}
				  }
			   }
			</script>
			<div class="jmBlock" id="jmBlock_list11">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">图形特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">164</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">经典相册效果</a></li>
					<li><a href="#">图片的渐显播放效果的代码</a></li>
					<li><a href="#">图象淡入淡出Script</a></li>
					<li><a href="#">让IE6不出现图像工具栏</a></li>
					<li><a href="#">相片选择器脚本 任意选择图片</a></li>
					<li><a href="#">改变网页背景图片</a></li>
					<li><a href="#">页面的左右下脚始终固定不动的图片广告代码</a></li>
					<li><a href="#">礼花背景：深隧的天空不断爆出多彩的礼花</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list12">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">页面背景</a></strong>
					<span>本类共有特效&nbsp;<a href="#">122</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list13">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">表单特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">119</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list14">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">色彩特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">184</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list15">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">系统相关</a></strong>
					<span>本类共有特效&nbsp;<a href="#">79</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list16">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">链接特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">91</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list17">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">广告代码</a></strong>
					<span>本类共有特效&nbsp;<a href="#">69</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list18">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">计数转换</a></strong>
					<span>本类共有特效&nbsp;<a href="#">58</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list19">
				<div class="hd">
					<span>当前  ></span><strong><a href="#">综合特效</a></strong>
					<span>本类共有特效&nbsp;<a href="#">266</a>&nbsp;个</span>
					<a href="#">更多>></a>
				</div>	
				<ul>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
					<li><a href="#">跟随鼠标的弹性效果的运动图片</a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!--wytx-->
<div class="bottom_960"></div>
<div class="clear"></div>
<!--网页特效 end-->
<div class="block">
	<!--基础教程-->
	<div class="jc_div">
		<div class="top_343"></div>
		<div class="jc">
			<div class="head">
				<h2><a href="#">基础教程</a></h2>
				<div class="more"><a href="#">更多</a></div>
			</div>
			<div class="def">
				<div class="img_div"><img width="112px" height="73px" src="<?=base_url();?>images/img/jcjc.jpg" alt="基础教程" title="基础教程"></div>
				<div class="p_div">
					<p>本教程向您讲解HTML5的新特性。每一章的实例通过我们的编辑器，您能够编辑代码，然后点击按钮来查看运行最终结果。</p>
				</div>
			</div>
			<ul>
				<?php 
					foreach($jcjcList as $rows)
					{
						echo "<li><a href='".site_url('home/adetail').'/'.$rows["id"]."' target='_blank'>".$rows["title"]."</a><strong><a href='".site_url('home/alist').'/'.$rows["c_id"].'/1'."'>".$rows["c_name"]."</a></strong></li>";
					}
				?>
			</ul>
		</div>
		<div class="bottom_343"></div>
	</div>
	<!--基础教程 end-->
	<!--美化教程-->
	<div class="jc_div" style="margin-left:9px;">
		<div class="top_343"></div>
		<div class="jc">
			<div class="head">
				<h2><a href="#">美化教程</a></h2>
				<div class="more"><a href="#">更多</a></div>
			</div>
			<div class="def">
				<div class="img_div"><img width="112px" height="73px" src="<?=base_url();?>images/img/mhjc_img.jpg" alt="美化教程" title="美化教程"></div>
				<div class="p_div">
					<p>本教程包括PhotoShop，Flash，FireWorks，CorelDraw，Illustrator和3DMax等一系列美化设计教程，有了它，您也是高手。</p>
				</div>
			</div>
			<ul>
				<?php 
					foreach($mhjcList as $rows)
					{
						echo "<li><a href='".site_url('home/adetail').'/'.$rows["id"]."' target='_blank'>".$rows["title"]."</a><strong><a href='".site_url('home/alist').'/'.$rows["c_id"].'/1'."'>".$rows["c_name"]."</a></strong></li>";
					}
				?>
			</ul>
		</div>
		<div class="bottom_343"></div>
	</div>
	<!--美化教程 end-->
	<!--设计素材-->
	<div class="right_div_255">
		<div class="title">
			<h4>网页设计素材下载</h4>
			<a href="#">更多>></a>
		</div>
		<ul style="height:258px;">
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
		</ul>
		<strong><a href="#">风景图片</a></strong><strong><a href="#">卡通图片</a></strong><strong><a href="#">艺术图片</a></strong>
		<strong><a href="#">GIF动画</a></strong><strong><a href="#">logo素材</a></strong><strong><a href="#">png图标</a></strong>
		<strong><a href="#">数字字母</a></strong><strong><a href="#">水晶图标</a></strong><strong><a href="#">按钮素材</a></strong>
	</div>
	<!--设计素材 end-->
	<!--网页模板-->
	<div id="wymb_div">
		<div class="left_top"></div>
		<div id="wymb">
			<div id="hd">
				<h2><a href="#">网页模板</a></h2>
				<div class="more"><a href="#">更多</a></div>
			</div>
			<div class="show_img">
				<a class="gray" id="rm_prev" hideFocus="true"></a>
				<div class="pic-container cl" id="slidePic">
				 <ul class="cl">
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/1.jpg" alt="专业色彩设计网站模板" title="专业色彩设计网站模板" /></a></strong>
						<a href="#">专业色彩设计网站模板</a>
						<h5><a  href="#">[企业模版]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/2.jpg" alt="儿童兴趣爱好网站模板" title="儿童兴趣爱好网站模板" /></a></strong>
						<a href="#">儿童兴趣爱好网站模板</a>
						<h5><a  href="#">[韩国模版]</a></h5>	
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/3.jpg" alt="流行服装商场网站模板" title="流行服装商场网站模板" /></a></strong>
						<a href="#">流行服装商场网站模板 </a>
						<h5><a  href="#">[娱乐模板]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/4.jpg" alt="儿童教育模式网站模板" title="儿童教育模式网站模板" /></a></strong>
						<a href="#">儿童教育模式网站模板</a>
						<h5><a  href="#">[卡通模板]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/5.jpg" alt="传统节日背景网页模板" title="传统节日背景网页模板" /></a></strong>
						<a href="#">传统节日背景网页模板</a>
						<h5><a  href="#">[节日模板]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/2.jpg" alt="旅游度假村网站模板" title="旅游度假村网站模板" /></a></strong>
						<a href="#">旅游度假村网站模板</a>
						<h5><a  href="#">[个人模板]</a></h5>				
					</li>
					
				  </ul>
				</div>
				<a  id="rm_next" hideFocus="true" ></a>
				
				</div>
				<script type="text/javascript">
				jQuery(function(){
					if (!jQuery('#slidePic')[0])  return;
					var i = 0, p = jQuery('#slidePic ul'), pList = jQuery('#slidePic ul li'), len = pList.length;
					var elePrev = jQuery('#rm_prev'), eleNext = jQuery('#rm_next');
					//var firstClick = false;
					var w = 158, num = 4;
					p.css('width',w*len);
					if (len <= num) 
					eleNext.addClass('gray');
					function prev()
					{
						if (elePrev.hasClass('gray')) 
						{
							//alert('已经是第一张了');
							return;
						}
						p.animate({marginLeft:-(--i) * w},300);
						if (i < len - num) 
						{
							eleNext.removeClass('gray');
						}
						if (i == 0) 
						{
							elePrev.addClass('gray');
						}
					}
					function next()
					{
						if (eleNext.hasClass('gray')) 
						{
							//alert('已经是最后一张了');
							return;
						}
						p.animate({marginLeft:-(++i) * w},300);
						if (i != 0) 
						{
							elePrev.removeClass('gray');
						}
						if (i == len - num) 
						{
							eleNext.addClass('gray');
						}
					}
					elePrev.bind('click',prev);
					eleNext.bind('click',next);
					pList.each(function(n,v){
						jQuery(this).click(function(){
							if(n-i == 2)
							{
								next();
							}
							if(n-i == 0)
							{
								prev()
							}
					jQuery('#slidePic ul li.cur').removeClass('cur');
					jQuery(this).addClass('cur');
					}).mouseover(function(){
					jQuery(this).addClass('hover');
					}).mouseout(function(){
					jQuery(this).removeClass('hover');
					})
					});
				
				});
				
				</script>
		</div>
		<div class="left_bottom"></div>
	</div>
	<!--网页模板 end-->
	<div class="ad_255">
		<img src="<?=base_url();?>images/img/ad_right.jpg" />
	</div>
	<!--右边广告 end-->
	<!--字体下载-->
	<div id="ztxz">
		<div class="title">
			<h3>字体下载大全</h3>
			<a href="#">更多>></a>
		</div>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a>
		<a href="#">长城粗隶书体</a><a href="#">长城粗隶书体</a><a href="#">长城粗隶书1</a> 
		<div class="clear"></div>
		<strong><a href="#">中文字体</a></strong><strong><a href="#">英文字体</a></strong><strong><a href="#">自他字体</a></strong> 
	</div>
	<!--字体下载 end-->
	<!--网络编程-->
	<div id="wlbc_div">	
		<div class="left_top"></div>
		<div id="wlbc">
			<div id="hd">
				<h2><a href="#">网络编程</a></h2>
				<div class="more"><a href="#">更多</a></div>
			</div>
			<ul>
				<?php 
					$i=0;
					foreach($wlbcList as $rows)
					{
						echo "<li><a href='".site_url('home/adetail').'/'.$rows["id"]."' target='_blank'>".$rows["title"]."</a><strong><a href='".site_url('home/alist').'/'.$rows["c_id"].'/1'."'>".$rows["c_name"]."</a></strong></li>";
						if(($i++)==6) echo "</ul><ul>";
					}
				?>
			</ul>
		</div>
		<div class="left_bottom"></div>
	</div>
	<!--网络编程 end-->	
</div>
<div class="clear"></div>
<!--友情链接-->
<div class="top_960"></div>
<div id="yqlj">
	<div id="hd">
		<h2><a href="#">友情链接</a></h2>
		<div class="more"><a href="#">更多</a></div>
	</div>
	<div id="con">
		<a href="#">海酷网</a><a href="#">网页设计爱好者</a><a href="#">新浪学院</a><a href="#">搜狐软件学院</a>
		<a href="#">站长资讯</a><a href="#">中国站长天空</a><a href="#">最好模板网</a><a href="#">源码之家</a>
		<a href="#">.Net教程网</a><a href="#">WEB知识库</a><a href="#">站点收录导航</a><a href="#">上海网络营销</a>
		<a href="#">265上网导航</a><a href="#">114啦网址导航</a><a href="#">网页特效观止</a><a href="#">网页特效观止</a>
	</div>
</div>
<div class="bottom_960"></div>
<!--友情链接 end-->
<?=$footer;?>