<?=$header;?>
<div class="block">
	<div id="lft_div">
		<div class="lft_top"></div>
		<div id="detail">
			<div id="hd">
				<strong><a href="#">������ҳ</a> &gt; <a href="#">��ҳ����</a> &gt; <a href="#">��ҳ��Ч</a> &gt; </strong>
				<em>

				</em>
			</div>
			<h1><?=$codeRow[0]->title;?></h1>
			<span>����:hans   ʱ��:<?=date("Y-m-d",strtotime($codeRow[0]->time));?>   �����:<?=$codeRow[0]->count;?></span>
		</div>
		<div class="md">
			<textarea style="width:600px;height:310px;"><?=$codeRow[0]->body;?></textarea>
			<div class="btn_div">
				<strong><a href="<?=site_url('home/codeRun/1');?>" target="_blank">���д���</a></strong><strong><a href="#">ȫѡ����</a></strong>
				<strong><a href="#">���ر���</a></strong><strong><a href="#">����ղ�</a></strong>
				<strong><a href="#">�رմ�ҳ</a></strong>
			</div>
			<div class="clear"></div>
		</div>
		<div class="msg_div">
			<span>��ʾ��</span>���������޸Ĵ��������У������Ա����ҳ�淽���պ���ʣ�
		</div>
		<div id="detail2">
          <div class="div">&nbsp;>&nbsp;&nbsp;�鿴�����Ƽ�&nbsp;&nbsp;<a href="#"><b>CSS�̳�</b></a></div>
		  <div class="div"> <a href="#" class="d">
		    <div class="ding"><i>��(88)</i></div>
		    </a>
              <div class="tj"> <a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a> <a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a><a href="#">�������������ˣ�</a> </div>
		    <a href="#" class="c">
		      <div class="cai"><i>��(2)</i></div>
	        </a> </div>
		  <div class="clear"></div>
		  <div class="tags"> <img src="<?=base_url();?>images/hyfx.jpg" /><a href="#">���ѷ���</a><img src="<?=base_url();?>images/tjsc.jpg" /><a href="#">�ղر�ҳ</a> <img src="<?=base_url();?>images/dyby.jpg" /><a href="#">��ӡ��ҳ</a><img src="<?=base_url();?>images/tgfb.jpg" /><a href="#">Ͷ�巢��</a> <u class="t"><a href="#">���ض���</a></u><u class="l"><a href="#">�����б�</a></u> </div>
		  <div class="relate">�������&nbsp;��ҳ��Ч&nbsp;�̳̣�</div>
		  <div class="r_list">
            <ul>
              <li><a href="#">ѧϰCSS������ҳ��һЩʵ��</a></li>
              <li><a href="#">CSSframework��ǳ̸CSS�������</a></li>
              <li><a href="#">�����IE6��IE7��Firefox�������CSShack</a></li>
              <li><a href="#">CascadingStyleSheetslevel2-CSS2���ķ�</a></li>
              <li><a href="#">CSS��ѧϰӦ��ע��ѧϰ����</a></li>
            </ul>
		    <ul>
              <li><a href="#">��̸CSS����ϵ���֣�ͼʾ��</a></li>
		      <li><a href="#">CSS�̳�11��CSS��������д[����Htmldog]</a></li>
		      <li><a href="#">CSS�м��̳�CSSα��</a></li>
		      <li><a href="#">�����������Nascape��CSS����ʾ��IE�Ĳ�</a></li>
		      <li><a href="#">CSS�̳�:����չԲ�Ǳ�ǩ��ʵ�ַ���</a></li>
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