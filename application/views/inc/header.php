<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="shortcut icon" href="Favicon.ico" >
<title>������_��ҳ�̳�|��ҳ��Ч|�ز�ģ������|����̳�</title>
<meta name="keywords" content="��ҳ��Ч,ģ��,����,�ز�,�Ż�SEO,׬Ǯ,����,�߻�,����,����,����,css,html,javascript,flash,ASP,.NET,PHP,JSP,XML,DreamWeaver" />
<meta name="description" content="������(www.hicoor.com)��Ŀǰ�ǳ�ȫ�������ѧϰ��Դ��վ,��Ҫ�ṩ��վ���衢��ҳ����زġ����塢��ҳ�����̵̳���Դ��������ҳ�������֡���̬��վ�����̡̳���ҳ��Ч���ء������زġ���ҳģ�塢�Ż��ƹ�SEO������׬Ǯ��վ�����¡����Ի���֪ʶ���ڿ͹�������Դ��" />
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
/*�˵�*/
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
<!--�˵�-->
<div id="top">
	<div id="top_logo"><h1><a href="http://www.hicoor.com"><img src="<?=base_url();?>images/logo.jpg" alt="������" /></a></h1></div>
	<div id="top_center">
		<div id="top_ad"><img src="<?=base_url();?>images/top_ad1.jpg" /></div>
		<div id="mainNav">
			<ul>
				<li><a href="<?=base_url();?>" onmousemove="hideMenu()" class="hover">��վ��ҳ</a></li>
				<?php foreach($mainMenu as $rows)
					echo "<li><a href='#' onmousemove='showMenu(".$rows->id.")'>".$rows->name."</a></li>";
				?>
			</ul>
		</div>
	</div>
	<div id="top_tab">
		<a href="http://tool.chinaz.com/" target="_blank">վ������</a><a href="#">������</a><a href="http://www.blueidea.com/" target="_blank">��ɫ����</a>
		<a href="http://www.dig86.com/" target="_blank">�����й�</a><a href="http://www.skycn.com" target="_blank">վ���������</a><a href="http://icp.valu.cn/" target="_blank">��վ������ѯ</a>
	</div>
</div>
<!--�˵� ����-->
<!--���ٵ���-->
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
		<a href="#">������</a><span>���ٵ�����</span>
		<a href="#">��ҳ��Ч</a><a href="#">��ҳģ��</a><a href="#">��������</a><a href="#">����ز�</a>
		<a href="#">HTML</a><a href="#">CSS</a><a href="#">JavaScript</a><a href="#">DreamWeaver</a>
		<a href="#">PS</a><a href="#">Flash</a><a href="#">PHP</a><a href="#">ASP</a>
		<a href="#">.NET</a><a href="#">JSP</a><a href="#">����׬Ǯ</a><a href="#">�Ż��ƹ�</a>
	</div>
</div>
<!--���ٵ��� ����-->
<!--������-->
<div id="search_top"></div>
<div id="search">
	<input type="text" id="search_text" value="��������������" onblur="searchBlur(this)" onfocus="searchFocus(this)"/>
	<input type="button" id="search_btn"  />
	<select id="search_select" style="width:100px;">
		<option>&nbsp;ȫ������</option>
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
		<!--<option>��ҳ����</option>
		<option>-|��ҳ��Ч</option>
		<option>-|��ҳģ��</option>
		<option>-|��������</option>
		<option>-|����ز�</option>-->
	</select>
	<iframe src="http://m.weather.com.cn/m/pn6/weather.htm " width="140" height="20" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
	<span>�����ǣ�<?=$showtime=date("Y��m��d��");?> 
	<?php $a=array('��','һ','��','��','��','��','��'); echo " ����".$a[date('w')]; ?> </span>
</div>
<div id="search_bottom"></div>
<!--������ ����-->	

<!--�м���-->	
<!--<div class="ad_div">
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad1.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad2.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad3.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad4.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad5.jpg" /></div>
	<div class="ad"><img width="480" height="62" src="<?=base_url();?>images/img/ad1.jpg" /></div>
</div>-->
<div class="clear"></div>