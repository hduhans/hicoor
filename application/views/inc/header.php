<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="Favicon.ico" >
<title>海酷网_网页教程|网页特效|素材模板下载|程序教程</title>
<meta name="keywords" content="网页特效,模板,字体,素材,优化SEO,赚钱,经验,策划,故事,电脑,工具,css,html,javascript,flash,ASP,.NET,PHP,JSP,XML,DreamWeaver" />
<meta name="description" content="海酷网(www.hicoor.com)是目前非常全面的网络学习资源网站,主要提供网站建设、网页设计素材、字体、网页制作教程等资源。包括网页美工布局、动态网站开发教程、网页特效下载、字体素材、网页模板、优化推广SEO、网络赚钱、站长故事、电脑基础知识及黑客攻防等资源。" />
<meta name="author" content="Hans" />
<meta name="copyright" content="www.hicoor.com" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="<?=base_url();?>css/basic.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>css/main.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>css/list.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>css/detail.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>js/hicoor.js" type="text/javascript"></script>
<script src="<?=base_url();?>js/jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
/*菜单*/
function showMenu(i)
{
	var k;
	for(k=1;k<=6;k++)
	{
		document.getElementById("subMenu"+k).style.display="none";
	}
	document.getElementById("subMenu"+i).style.display="block";
}
function hideMenu()
{
	for(k=1;k<=6;k++)
	{
		document.getElementById("subMenu"+k).style.display="none";
	}
}
</script>
</head>
<body>
<div id="top_bg"></div>	
<!--菜单-->
<div id="top">
	<div id="top_logo"><h1><a href="http://www.hicoor.com"><img src="<?=base_url();?>images/logo.jpg" alt="海酷网" /></a></h1></div>
	<div id="top_center">
		<div id="top_ad"><img src="<?=base_url();?>images/top_ad1.jpg" /></div>
		<div id="mainNav">
			<ul>
				<li><a href="<?=base_url();?>" onmousemove="hideMenu()" class="hover">网站首页</a></li>
				<?php foreach($mainMenu as $rows)
					echo "<li><a href='#' onmousemove='showMenu(".$rows->id.")'>".$rows->name."</a></li>";
				?>
			</ul>
		</div>
	</div>
	<div id="top_tab">
		<a href="http://tool.chinaz.com/" target="_blank">站长工具</a><a href="#">广告服务</a><a href="http://www.blueidea.com/" target="_blank">蓝色理想</a>
		<a href="http://www.dig86.com/" target="_blank">数字中国</a><a href="http://www.skycn.com" target="_blank">站长常用软件</a><a href="http://icp.valu.cn/" target="_blank">网站备案查询</a>
	</div>
</div>
<!--菜单 结束-->
<!--快速导航-->
<div id="quickNav">
	<?php for($i=1;$i<7;$i++)  { ?>
	  <div id='subMenu<?=$i?>' class='subMenuType'>
		  <div class='left'></div>
		  <div class='center'>
			  <ul>
				<?php foreach($subMenu[$i] as $rows)  echo "<li><a href='".site_url('home/alist').'/'.$rows->id.'/1'."'>".$rows->name."</a></li>"; ?> 
			 </ul>
		  </div>
		  <div id='subMenuTop<?=$i?>'></div>
		  <div class='right'></div>
	  </div>
	<?php  } ?>
	<div id="lable">
		<a href="#">海酷网</a><span>快速导航：</span>
		<a href="#">网页特效</a><a href="#">网页模板</a><a href="#">字体下载</a><a href="#">设计素材</a>
		<a href="#">HTML</a><a href="#">CSS</a><a href="#">JavaScript</a><a href="#">DreamWeaver</a>
		<a href="#">PS</a><a href="#">Flash</a><a href="#">PHP</a><a href="#">ASP</a>
		<a href="#">.NET</a><a href="#">JSP</a><a href="#">网络赚钱</a><a href="#">优化推广</a>
	</div>
</div>
<!--快速导航 结束-->
<!--搜索框-->
<div id="search_top"></div>
<div id="search">
	<input type="text" id="search_text" value="请输入搜索内容" onblur="searchBlur(this)" onfocus="searchFocus(this)"/>
	<input type="button" id="search_btn"  />
	<select id="search_select" style="width:100px;">
		<option>&nbsp;全部内容</option>
		<?php 
			$i=1;
			foreach($mainMenu as $rows)
			{
				echo "<option>".$rows->name."</option>";
				foreach($subMenu[$i] as $rows1)
					echo "<option>-|".$rows1->name."</option>";
				$i++;
			}
		?>
		<!--<option>网页制作</option>
		<option>-|网页特效</option>
		<option>-|网页模板</option>
		<option>-|字体下载</option>
		<option>-|设计素材</option>-->
	</select>
	<iframe src="http://m.weather.com.cn/m/pn6/weather.htm " width="140" height="20" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
	<span>今天是：<?=$showtime=date("Y年m月d日");?> 
	<?php $a=array('日','一','二','三','四','五','六'); echo " 星期".$a[date('w')]; ?> </span>
</div>
<div id="search_bottom"></div>
<!--搜索框 结束-->	

<!--中间广告-->	
<!--<div class="ad_div">
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad1.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad2.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad3.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad4.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad5.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad1.jpg" /></div>
</div>-->
<div class="clear"></div>