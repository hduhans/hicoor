<?php

class Home extends CI_Controller{
	
	function Home()
	{
		parent::__construct();
		$this->load->model('hicoor_model');
		$this->load->model('detail_model');
		$this->load->model('code_model');
	}
	
	function index()
	{
		$_tpl['topNew']=$this->hicoor_model->getTopNew();
		$_tpl['topFour']=$this->hicoor_model->getTopNews();
		$_tpl['jzyyMenu']=$this->hicoor_model->getJZYYmenu();
		$_tpl['jzyyList']=$this->hicoor_model->getJZYYlist();
		$_tpl['dndqList']=$this->hicoor_model->getDNDQlist();
		$_tpl['jcjcList']=$this->hicoor_model->getJClist("jcjc");
		$_tpl['mhjcList']=$this->hicoor_model->getJClist("mhjc");
		$_tpl['wlbcList']=$this->hicoor_model->getJClist("wlbc",14);
		
		$this->_out($_tpl);
	}

	function alist($c_id,$page)
	{
		$_tpl['total_number']=$this->hicoor_model->getAdricleNumber($c_id);
		$_tpl['per_count']=$this->config->item('per_count');
		
		$page_count=0;
		if($_tpl['total_number']%$_tpl['per_count']==0) $page_count=$_tpl['total_number']/$_tpl['per_count']; 
		else $page_count=floor($_tpl['total_number']/$_tpl['per_count'])+1;
		if($page>$page_count) $page=$page_count;
		
		$_tpl['list']=$this->hicoor_model->getArticleList($c_id,$page);
		$_tpl['page_count']=$page_count;
		$_tpl['curr_page']=$page;
		$_tpl['c_id']=$c_id;
		$_tpl['path']=$this->hicoor_model->getCurrentPaths($c_id);
		$view="main/alist";
		$this->_out($_tpl,$view);
	}
	
	function adetail($id)
	{
		$_tpl['detailNews']=$this->hicoor_model->getDetailNews($id);
		$_tpl['path']=$this->detail_model->getCurrentPaths($id);
		
		$_tpl['linkArticle']=$this->_getLinkArticle($_tpl['path'][3]);
		
		$view="main/adetail";
		
		$this->_out($_tpl,$view);
	}
	
	function code()
	{
		$_tpl=array();
		$_tpl['codeRow']=$this->code_model->getCodeById(1);
		$view="main/code";
		$this->_out($_tpl,$view);
	}
	
	function codeRun($codeId)
	{
		$_tpl['codeRow']=$this->code_model->getCodeById($codeId);
		echo $_tpl['codeRow'][0]->body;
	}
	
	function _out($_tpl = array(),$view = 'main/main')
	{
		$_tpl['mainMenu']=$this->hicoor_model->getMenu();
		for($i=1;$i<7;$i++)
			$subMenu[$i]=$this->hicoor_model->getSubMenu($i);
		$_tpl['subMenu']=$subMenu;
		$_tpl['header']=$this->load->view("inc/header",$_tpl,true);
		$_tpl['footer']=$this->load->view("inc/footer",$_tpl,true);
		$this->load->view($view,$_tpl);
	}
	
	function _getLinkArticle($c_id)    //获取相关推荐文章
	{
		$linkArticle=array();
		for($i=0;$i<100;$i++)
		{
			$tmpArray=$this->detail_model->getLinkArticle($c_id);
			$val=0;
			foreach($linkArticle as $key=>$value)
			{
				if($tmpArray[1]==$value[1]) {$val=1;break;}
			}		
			if(!$val) array_push($linkArticle,$tmpArray);
			if(count($linkArticle)==10) break;    //当前条数位7
		}
		return $linkArticle;
	}
	
}