<?=$header;?>
<?php 
	function mySubSTr($body='',$cutNum=50)
	{
		$str=strip_tags($body);
		$delStr="";
		for($i=0;$i<strlen($str);$i++)
		{
			if($str[$i]!=" ") $delStr.=$str[$i];    //ȥ�ո�
		}
		if(strlen($delStr)>$cutNum) echo mb_substr($delStr,0,$cutNum,'gb2312')."...";
		else echo $delStr;	
	}
?>
<div class="block">
	<!--����ͷ��-->
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
					/*ͼƬ��ת*/
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
				[<a href="<?=site_url('home/adetail').'/'.$topNew[0]->id;?>" target="_blank" style="color:#4089f2;">��ϸ</a>]
				</p>
				<div class="div"></div>
				<?php foreach ($topFour as $rows)
						echo "<h3>[<a href='".site_url('home/alist')."/".$rows->k_id."/1"."'>".$rows->kindName."</a>]&nbsp;<a href='".site_url('home/adetail').'/'.$rows->id."' target='_blank'>".$rows->title."</a></h3>";
				?>
			</div>
		</div>
		<div class="left_bottom"></div>
	</div>
	<!--����ͷ�� end-->
	<!--�ȵ��Ƽ�-->
	<div class="right_div_255">
		<div class="title">
			<h3>�ȵ������Ƽ�</h3>
		</div>
		<ul>
			<li class="t1"><a href="#">�Ƽ�����ѡ�ϰٸ���ҳ����ͼ������</a></li>
			<li class="t2"><a href="#">��ҳ��Ƽ�web�������������ֲ�</a></li>
			<li class="t3"><a href="#">jQuery����ʵ�ò�������ղ�</a></li>
			<li class="t4"><a href="#">JavaScript��ҳ��Ч-�������ҳ������</a></li>
			<li class="t5"><a href="#">�����⣨ŷ���պ���������վ�������</a></li>
			<li class="t6"><a href="#">�������ҵ��վģ���������</a></li>
			<li class="t7"><a href="#">��ҳ��Ƴ��������������</a></li>
			<li class="t8"><a href="#">��ҳ��ƽ̳�֪ʶ��</a></li>
			<li class="t9"><a href="#">��ҳƽ�����-��ҳ��Ƹ��ֱر�����</a></li>
			<li class="t10"><a href="#">�Ƽ�����ѡ�ϰٸ���ҳ����ͼ������</a></li>
			<li class="t11"><a href="#">��ҳ�����̴̳�ȫ��ѧϰ����</a></li>
		</ul>
	</div>
	<!--�ȵ��Ƽ� end-->
	<!--��վ��Ӫ-->
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
					    <div class="img_div"><a href="#"><img src="<?=base_url().$menuList['imgUrl'];?>" alt="��ѧ���������׬Ǯ" title="��ѧ���������׬Ǯ" /></a></div>
						<div class="right"></div>
						<h4><a href="<?=site_url('home/adetail').'/'.$menuList["id"];?>" target="_blank" style="color:#4089f2;"><?=$menuList["title"];?></a></h4>
						<p>
						<?=mySubSTr($menuList["body"],70);?>
						[<a href="<?=site_url('home/adetail').'/'.$menuList["id"];?>" target="_blank" style="color:#4089f2;font-weight:bold;">��ϸ</a>]
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
	<!--��վ��Ӫ end-->
	<!--���Դ�ȫ-->
	<div id="dddq">
		<div id="img_div"><a href="#"><img src="<?=base_url();?>images/dndq_img.jpg" /></a></div>
		<h4><a href="<?=site_url('home/adetail').'/'.$dndqList["id"];?>" target="_blank"><?=$dndqList["title"];?></a></h4>
		<div id="con">
			<p><?=mySubSTr($dndqList["body"],80);?></p>
		</div>
		<h5><a href="<?=site_url('home/adetail').'/'.$dndqList["id"];?>" target="_blank">�Ķ�ȫ��>></a></h5>
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
	<!--���Դ�ȫ end-->
</div>
<div class="clear"></div>
<!--�м���-->
<div class="ad_mid">
	<img src="<?=base_url();?>images/img/ad_mid.jpg" />
</div>
<!--��ҳ��Ч-->
<div class="top_960"></div>
<div id="wytx">
	<div id="hd">
		<h2><a href="#">��ҳ��Ч</a></h2>
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
					<span>��ǰ  ></span><strong><a href="#">�����˵�</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">118</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="<?=site_url('home/code');?>" target="_blank">���������˵�,��������չ��/���������˵�</a></li>
					<li><a href="#">�����׵Ļ����ż���DIV+CSSʵ��</a></li>
					<li><a href="#">����ɫ������վ�ĵ����˵�</a></li>
					<li><a href="#">��괥�����߿�˵�</a></li>
					<li><a href="#">�����GOOGLE��ҳ�����˵�Ч��</a></li>
					<li><a href="#">cssģ��title��alt����ʾЧ��</a></li>
					<li><a href="#">��JSʵ�ֵ����ƿ�ܵ����ӵ���ģʽ</a></li>
					<li><a href="#">�����˵�����ҳ��򿪷�ʽѡ��</a></li>
				</ul>
			</div>		
			<div class="jmBlock_none" id="jmBlock_list2">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">�����Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">188</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list3">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">״̬����</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">78</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list4">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">�ı���Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">233</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list5">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">������Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">97</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list6">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">��Ϸ����</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">65</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list7">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">ʱ������</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">86</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list8">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">����Ի�</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">38</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list9">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">�ڿ����</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">188</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
		</div>
		<div class="jmMid">
			<div class="bd1"></div>
			<div class="itemOnLeft" id="modL1" onmousemove="switchmodLTag('modL','jmBlock_list','1');this.blur();">�����˵�</div>
			<div class="itemOnRight" id="modR11" onmousemove="switchmodRTag('modR','jmBlock_list','11');this.blur();">ͼ����Ч</div>
			<div class="itemNoLeft" id="modL2" onmousemove="switchmodLTag('modL','jmBlock_list','2');this.blur();">�����Ч</div>
			<div class="itemNoRight" id="modR12" onmousemove="switchmodRTag('modR','jmBlock_list','12');this.blur();">ҳ�汳��</div>
			<div class="itemNoLeft" id="modL3" onmousemove="switchmodLTag('modL','jmBlock_list','3');this.blur();">״̬����</div>
			<div class="itemNoRight" id="modR13" onmousemove="switchmodRTag('modR','jmBlock_list','13');this.blur();">����Ч</div>
			<div class="itemNoLeft" id="modL4" onmousemove="switchmodLTag('modL','jmBlock_list','4');this.blur();">�ı���Ч</div>
			<div class="itemNoRight" id="modR14" onmousemove="switchmodRTag('modR','jmBlock_list','14');this.blur();">ɫ����Ч</div>
			<div class="itemNoLeft" id="modL5" onmousemove="switchmodLTag('modL','jmBlock_list','5');this.blur();">������Ч</div>
			<div class="itemNoRight" id="modR15" onmousemove="switchmodRTag('modR','jmBlock_list','15');this.blur();">ϵͳ���</div>
			<div class="itemNoLeft" id="modL6" onmousemove="switchmodLTag('modL','jmBlock_list','6');this.blur();">��Ϸ����</div>
			<div class="itemNoRight" id="modR16" onmousemove="switchmodRTag('modR','jmBlock_list','16');this.blur();">������Ч</div>
			<div class="itemNoLeft" id="modL7" onmousemove="switchmodLTag('modL','jmBlock_list','7');this.blur();">ʱ������</div>
			<div class="itemNoRight" id="modR17" onmousemove="switchmodRTag('modR','jmBlock_list','17');this.blur();">������</div>
			<div class="itemNoLeft" id="modL8" onmousemove="switchmodLTag('modL','jmBlock_list','8');this.blur();">����Ի�</div>
			<div class="itemNoRight" id="modR18" onmousemove="switchmodRTag('modR','jmBlock_list','18');this.blur();">����ת��</div>
			<div class="itemNoLeft" id="modL9" onmousemove="switchmodLTag('modL','jmBlock_list','9');this.blur();">�ڿ����</div>
			<div class="itemNoRight" id="modR19" onmousemove="switchmodRTag('modR','jmBlock_list','19');this.blur();">�ۺ���Ч</div>	
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
					<span>��ǰ  ></span><strong><a href="#">ͼ����Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">164</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������Ч��</a></li>
					<li><a href="#">ͼƬ�Ľ��Բ���Ч���Ĵ���</a></li>
					<li><a href="#">ͼ���뵭��Script</a></li>
					<li><a href="#">��IE6������ͼ�񹤾���</a></li>
					<li><a href="#">��Ƭѡ�����ű� ����ѡ��ͼƬ</a></li>
					<li><a href="#">�ı���ҳ����ͼƬ</a></li>
					<li><a href="#">ҳ��������½�ʼ�չ̶�������ͼƬ������</a></li>
					<li><a href="#">�񻨱������������ղ��ϱ�����ʵ���</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list12">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">ҳ�汳��</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">122</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list13">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">����Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">119</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list14">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">ɫ����Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">184</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list15">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">ϵͳ���</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">79</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list16">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">������Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">91</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list17">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">������</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">69</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list18">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">����ת��</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">58</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
			<div class="jmBlock_none" id="jmBlock_list19">
				<div class="hd">
					<span>��ǰ  ></span><strong><a href="#">�ۺ���Ч</a></strong>
					<span>���๲����Ч&nbsp;<a href="#">266</a>&nbsp;��</span>
					<a href="#">����>></a>
				</div>	
				<ul>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
					<li><a href="#">�������ĵ���Ч�����˶�ͼƬ</a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!--wytx-->
<div class="bottom_960"></div>
<div class="clear"></div>
<!--��ҳ��Ч end-->
<div class="block">
	<!--�����̳�-->
	<div class="jc_div">
		<div class="top_343"></div>
		<div class="jc">
			<div class="head">
				<h2><a href="#">�����̳�</a></h2>
				<div class="more"><a href="#">����</a></div>
			</div>
			<div class="def">
				<div class="img_div"><img width="112px" height="73px" src="<?=base_url();?>images/img/jcjc.jpg" alt="�����̳�" title="�����̳�"></div>
				<div class="p_div">
					<p>���̳���������HTML5�������ԡ�ÿһ�µ�ʵ��ͨ�����ǵı༭�������ܹ��༭���룬Ȼ������ť���鿴�������ս����</p>
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
	<!--�����̳� end-->
	<!--�����̳�-->
	<div class="jc_div" style="margin-left:9px;">
		<div class="top_343"></div>
		<div class="jc">
			<div class="head">
				<h2><a href="#">�����̳�</a></h2>
				<div class="more"><a href="#">����</a></div>
			</div>
			<div class="def">
				<div class="img_div"><img width="112px" height="73px" src="<?=base_url();?>images/img/mhjc_img.jpg" alt="�����̳�" title="�����̳�"></div>
				<div class="p_div">
					<p>���̳̰���PhotoShop��Flash��FireWorks��CorelDraw��Illustrator��3DMax��һϵ��������ƽ̳̣�����������Ҳ�Ǹ��֡�</p>
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
	<!--�����̳� end-->
	<!--����ز�-->
	<div class="right_div_255">
		<div class="title">
			<h4>��ҳ����ز�����</h4>
			<a href="#">����>></a>
		</div>
		<ul style="height:258px;">
			<li class="t1"><a href="#">�Ƽ�����ѡ�ϰٸ���ҳ����ͼ������</a></li>
			<li class="t2"><a href="#">��ҳ��Ƽ�web�������������ֲ�</a></li>
			<li class="t3"><a href="#">jQuery����ʵ�ò�������ղ�</a></li>
			<li class="t4"><a href="#">JavaScript��ҳ��Ч-�������ҳ������</a></li>
			<li class="t5"><a href="#">�����⣨ŷ���պ���������վ�������</a></li>
			<li class="t6"><a href="#">�������ҵ��վģ���������</a></li>
			<li class="t7"><a href="#">��ҳ��Ƴ��������������</a></li>
			<li class="t8"><a href="#">��ҳ��ƽ̳�֪ʶ��</a></li>
			<li class="t9"><a href="#">��ҳƽ�����-��ҳ��Ƹ��ֱر�����</a></li>
			<li class="t10"><a href="#">�Ƽ�����ѡ�ϰٸ���ҳ����ͼ������</a></li>
		</ul>
		<strong><a href="#">�羰ͼƬ</a></strong><strong><a href="#">��ͨͼƬ</a></strong><strong><a href="#">����ͼƬ</a></strong>
		<strong><a href="#">GIF����</a></strong><strong><a href="#">logo�ز�</a></strong><strong><a href="#">pngͼ��</a></strong>
		<strong><a href="#">������ĸ</a></strong><strong><a href="#">ˮ��ͼ��</a></strong><strong><a href="#">��ť�ز�</a></strong>
	</div>
	<!--����ز� end-->
	<!--��ҳģ��-->
	<div id="wymb_div">
		<div class="left_top"></div>
		<div id="wymb">
			<div id="hd">
				<h2><a href="#">��ҳģ��</a></h2>
				<div class="more"><a href="#">����</a></div>
			</div>
			<div class="show_img">
				<a class="gray" id="rm_prev" hideFocus="true"></a>
				<div class="pic-container cl" id="slidePic">
				 <ul class="cl">
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/1.jpg" alt="רҵɫ�������վģ��" title="רҵɫ�������վģ��" /></a></strong>
						<a href="#">רҵɫ�������վģ��</a>
						<h5><a  href="#">[��ҵģ��]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/2.jpg" alt="��ͯ��Ȥ������վģ��" title="��ͯ��Ȥ������վģ��" /></a></strong>
						<a href="#">��ͯ��Ȥ������վģ��</a>
						<h5><a  href="#">[����ģ��]</a></h5>	
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/3.jpg" alt="���з�װ�̳���վģ��" title="���з�װ�̳���վģ��" /></a></strong>
						<a href="#">���з�װ�̳���վģ�� </a>
						<h5><a  href="#">[����ģ��]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/4.jpg" alt="��ͯ����ģʽ��վģ��" title="��ͯ����ģʽ��վģ��" /></a></strong>
						<a href="#">��ͯ����ģʽ��վģ��</a>
						<h5><a  href="#">[��ͨģ��]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/5.jpg" alt="��ͳ���ձ�����ҳģ��" title="��ͳ���ձ�����ҳģ��" /></a></strong>
						<a href="#">��ͳ���ձ�����ҳģ��</a>
						<h5><a  href="#">[����ģ��]</a></h5>				
					</li>
					<li>
						<Strong><a target="_blank"  href="#"><img src="<?=base_url();?>images/img/2.jpg" alt="���ζȼٴ���վģ��" title="���ζȼٴ���վģ��" /></a></strong>
						<a href="#">���ζȼٴ���վģ��</a>
						<h5><a  href="#">[����ģ��]</a></h5>				
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
							//alert('�Ѿ��ǵ�һ����');
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
							//alert('�Ѿ������һ����');
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
	<!--��ҳģ�� end-->
	<div class="ad_255">
		<img src="<?=base_url();?>images/img/ad_right.jpg" />
	</div>
	<!--�ұ߹�� end-->
	<!--��������-->
	<div id="ztxz">
		<div class="title">
			<h3>�������ش�ȫ</h3>
			<a href="#">����>></a>
		</div>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a>
		<a href="#">���Ǵ�������</a><a href="#">���Ǵ�������</a><a href="#">���Ǵ�����1</a> 
		<div class="clear"></div>
		<strong><a href="#">��������</a></strong><strong><a href="#">Ӣ������</a></strong><strong><a href="#">��������</a></strong> 
	</div>
	<!--�������� end-->
	<!--������-->
	<div id="wlbc_div">	
		<div class="left_top"></div>
		<div id="wlbc">
			<div id="hd">
				<h2><a href="#">������</a></h2>
				<div class="more"><a href="#">����</a></div>
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
	<!--������ end-->	
</div>
<div class="clear"></div>
<!--��������-->
<div class="top_960"></div>
<div id="yqlj">
	<div id="hd">
		<h2><a href="#">��������</a></h2>
		<div class="more"><a href="#">����</a></div>
	</div>
	<div id="con">
		<a href="#">������</a><a href="#">��ҳ��ư�����</a><a href="#">����ѧԺ</a><a href="#">�Ѻ����ѧԺ</a>
		<a href="#">վ����Ѷ</a><a href="#">�й�վ�����</a><a href="#">���ģ����</a><a href="#">Դ��֮��</a>
		<a href="#">.Net�̳���</a><a href="#">WEB֪ʶ��</a><a href="#">վ����¼����</a><a href="#">�Ϻ�����Ӫ��</a>
		<a href="#">265��������</a><a href="#">114����ַ����</a><a href="#">��ҳ��Ч��ֹ</a><a href="#">��ҳ��Ч��ֹ</a>
	</div>
</div>
<div class="bottom_960"></div>
<!--�������� end-->
<?=$footer;?>