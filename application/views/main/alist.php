<?=$header;?>
<?php
	
?>
<div class="block">
	<div id="lft_div">
		<div class="lft_top"></div>
		<div id="list">
			<div id="hd">
				<strong><a href="<?=site_url();?>">������ҳ</a> &gt; <?=$path[1];?> &gt; <a href="<?=site_url('home/alist')."/".$c_id."/1";?>"><?=$path[2];?></a></strong>
				<em>
					<select id="fenye">
						<?php for($i=1;$i<=$page_count;$i++) echo "<option>��".$i."ҳ</option>"; ?>
					</select>
					<?php if($curr_page==$page_count) echo "<div class='s_next'></div>"; else echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page+1)."'><div class='s_next'></div></a>"; ?> 
					<?php if($curr_page==1) echo "<div class='s_pre'></div>"; else echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page-1)."'><div class='s_pre'></div></a>"; ?> 
				</em>
			</div>
			<ul>
				<?php 
					 if($list==NULL) echo "��Ǹ����ǰĿ¼��û������!";
					 else 
					 	foreach ($list as $rows) { 
				?>
				<li>
					<strong><a href="<?=site_url('home/adetail').'/'.$rows->id;?>" target='_blank'><?=$rows->title;?></a></strong>
					<div id="p_ldiv">
						<p>
							<?php 
								$str=strip_tags($rows->body);
								$delStr="";
								for($i=0;$i<strlen($str);$i++)
								{
									if($str[$i]!=" ") $delStr.=$str[$i];    //ȥ�ո�
								}
								if(strlen($delStr)>150) echo mb_substr($delStr,0,150,'gb2312')."...";
								else echo $delStr;
							?>
							<a href="<?=site_url('home/adetail').'/'.$rows->id;?>" target="_blank">���Ķ�ȫ�ġ�</a>
						</p>
					</div>
				</li>
				<?php }
				?>
			</ul>
			<div class="clear"></div>
			<?php if($list!=NULL) { ?>
			<div id="stat">��ǰҳ�Σ�<span><?=$curr_page;?></span>/<?=$page_count;?>&nbsp;&nbsp;&nbsp;<?=$per_count;?>��/ҳ &nbsp;��<span><?=$total_number;?></span>����¼</div>
			<div id="page">
				<?php 
					  if($curr_page==1) echo "<span>��ҳ</span><span>��һҳ</span>";
					  else echo "<a href='".site_url('home/alist').'/'.$c_id.'/1'."'><span>��ҳ</span></a><a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page-1)."'><span>��һҳ</span></a>";
				
					  for($i=($curr_page-4);$i<$curr_page;$i++)     //ǰ����
					  	 if($i>0) echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.$i."'><span>".$i."</span></a>";
					  echo "<span>".$curr_page."</span>";           //��ǰ
					  for($i=($curr_page+1);$i<=($curr_page+4);$i++)  //������
					  	 if($i<=$page_count) echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.$i."'><span>".$i."</span></a>"; 
					  	 
					  if($curr_page==$page_count) echo "<span>��һҳ</span><span>βҳ</span>";
					  else echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page+1)."'><span>��һҳ</span></a><a href='".site_url('home/alist').'/'.$c_id.'/'.$page_count."'><span>βҳ</span></a>";
				?>
			</div>
			<?php } ?>
		</div>
		<div class="lft_bot"></div>
	</div>
	<!--�����б�-->
	<!--�ȵ��Ƽ�-->
	<div id="right">
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