<?=$header;?>
<?php
	
?>
<div class="block">
	<div id="lft_div">
		<div class="lft_top"></div>
		<div id="list">
			<div id="hd">
				<strong><a href="<?=site_url();?>">海酷首页</a> &gt; <?=$path[1];?> &gt; <a href="<?=site_url('home/alist')."/".$c_id."/1";?>"><?=$path[2];?></a></strong>
				<em>
					<select id="fenye">
						<?php for($i=1;$i<=$page_count;$i++) echo "<option>第".$i."页</option>"; ?>
					</select>
					<?php if($curr_page==$page_count) echo "<div class='s_next'></div>"; else echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page+1)."'><div class='s_next'></div></a>"; ?> 
					<?php if($curr_page==1) echo "<div class='s_pre'></div>"; else echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page-1)."'><div class='s_pre'></div></a>"; ?> 
				</em>
			</div>
			<ul>
				<?php 
					 if($list==NULL) echo "抱歉，当前目录下没有文章!";
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
									if($str[$i]!=" ") $delStr.=$str[$i];    //去空格
								}
								if(strlen($delStr)>150) echo mb_substr($delStr,0,150,'gb2312')."...";
								else echo $delStr;
							?>
							<a href="<?=site_url('home/adetail').'/'.$rows->id;?>" target="_blank">【阅读全文】</a>
						</p>
					</div>
				</li>
				<?php }
				?>
			</ul>
			<div class="clear"></div>
			<?php if($list!=NULL) { ?>
			<div id="stat">当前页次：<span><?=$curr_page;?></span>/<?=$page_count;?>&nbsp;&nbsp;&nbsp;<?=$per_count;?>条/页 &nbsp;共<span><?=$total_number;?></span>条记录</div>
			<div id="page">
				<?php 
					  if($curr_page==1) echo "<span>首页</span><span>上一页</span>";
					  else echo "<a href='".site_url('home/alist').'/'.$c_id.'/1'."'><span>首页</span></a><a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page-1)."'><span>上一页</span></a>";
				
					  for($i=($curr_page-4);$i<$curr_page;$i++)     //前五条
					  	 if($i>0) echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.$i."'><span>".$i."</span></a>";
					  echo "<span>".$curr_page."</span>";           //当前
					  for($i=($curr_page+1);$i<=($curr_page+4);$i++)  //后五条
					  	 if($i<=$page_count) echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.$i."'><span>".$i."</span></a>"; 
					  	 
					  if($curr_page==$page_count) echo "<span>下一页</span><span>尾页</span>";
					  else echo "<a href='".site_url('home/alist').'/'.$c_id.'/'.($curr_page+1)."'><span>下一页</span></a><a href='".site_url('home/alist').'/'.$c_id.'/'.$page_count."'><span>尾页</span></a>";
				?>
			</div>
			<?php } ?>
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