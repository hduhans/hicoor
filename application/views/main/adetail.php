<?=$header;?>
<div class="block">
	<div id="lft_div">
		<div class="lft_top"></div>
		<div id="detail">
			<div id="hd">
				<strong><a href="<?=site_url();?>">������ҳ</a> &gt; <?=$path[1];?> &gt; <a href="<?=site_url('home/alist')."/".$path[3]."/1";?>"><?=$path[2];?></a> &gt; </strong>
				<em>

				</em>
			</div>
			<?php foreach($detailNews as $rows) { ?>
			<h1><?=$rows->title;?></h1>
			<span>����:hans   ʱ��:<?=date("Y-m-d",strtotime($rows->time));?>   �����:<?=$rows->count;?></span>
		</div>
		<div id="p_div">
			<p>
				<?php echo $rows->body; }?>
			</p>
		</div>
		<div id="detail2">
			<div class="div">&nbsp;>&nbsp;&nbsp;�鿴�����Ƽ�&nbsp;&nbsp;<a href="<?=site_url('home/alist')."/".$path[3]."/1";?>"><b><?=$path[2];?></b></a></div>
			<div class="div">
				<a href="#" class="d"><div class="ding"><i>��(88)</i></div></a>
				<div class="tj">
					<a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a>
					<a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a>
				</div>
				<a href="#" class="c"><div class="cai"><i>��(2)</i></div></a>
			</div>
			<div class="clear"></div>
		    <script type="text/javascript">
			<!--
			//����ղ�
			function addfavorite(url,title){
				var fav_url = url;
				var fav_title = title;
				if (document.all && window.external){
					window.external.AddFavorite(fav_url,fav_title);
				}else if (window.sidebar){
					window.sidebar.addPanel(fav_title,fav_url,"");
				}else{
					alert("�������֧�֣����ֶ������ղؼ�");
				}
			} 
			//-->
			</script>
			<div class="tags">
				<img src="<?=base_url();?>images/hyfx.jpg" /><a href="#">���ѷ���</a><img src="<?=base_url();?>images/tjsc.jpg" /><a href="javascript:addfavorite(location.href,document.title);">�ղر�ҳ</a>
				<img src="<?=base_url();?>images/dyby.jpg" /><a href="javascript:window.print();">��ӡ��ҳ</a><img src="<?=base_url();?>images/tgfb.jpg" /><a href="#">Ͷ�巢��</a>
				<u class="t"><a href="#">���ض���</a></u><u class="l"><a href="<?=site_url('home/alist')."/".$path[3]."/1";?>">�����б�</a></u>
			</div>
			<div class="relate">�������&nbsp;<?=$path[2];?>&nbsp;�̳̣�</div>
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