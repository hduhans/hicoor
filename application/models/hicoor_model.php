<?php

class Hicoor_model extends CI_Model{
	
	function getMenu()   //获得主菜单
	{
		$sqlStr="select * from category where level=1";
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getSubMenu($parent_id)   //获得二级菜单
	{
		$sqlStr="select * from category where level=2 and parent_id=".$parent_id;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getTopNew()   //获得今日头条最上面数据
	{
		$newsId=$this->config->item('topNewsId');
		$sqlStr="select * from post where id=".$newsId;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getTopNews()  //获得今日头条四条数据
	{
		$sqlStr="select * from topnews limit 0,4";
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getDetailNews($id)   //获得新闻详细数据
	{
		$addStr="update post set count=count+1 where id=".$id;
		$this->db->query($addStr);       //浏览量增1
		
		$sqlStr="select * from post where id=".$id;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getAdricleNumber($c_id)   //获得文章总数目
	{
		$sqlStr="select * from post where c_id=".$c_id;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->num_rows();
		}
		else 
		{
			return 0;
		}
	}
	
	function getArticleList($c_id,$page=1)   //获取当前文章列表
	{
		if($page==0) $page=1;
		$per_count = $this->config->item('per_count');
		$sqlStr="select * from post where c_id=".$c_id." limit ".(($page-1)*$per_count).",".$per_count."";
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function _getCategoryDate($c_id,$name)       //根据字段名获取category中相应的数据
	{
		$sqlStr="select * from category where id=".$c_id;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			foreach($result->result() as $rows)
			{
				return $rows->$name;
			}
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getCurrentPaths($c_id)     	//获取当前路径
	{
		$path=array();
		$path[2]=$this->_getCategoryDate($c_id,"name");
		$parent_id=$this->_getCategoryDate($c_id,"parent_id");
		$path[1]=$this->_getCategoryDate($parent_id,"name");
		
		return $path;
	}
	
	function getJZYYmenu()   //获得建站运营的当前菜单
	{
		$sqlStr="select * from jzyy limit 0,5";
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getJZYYlist()       //获得建站运营的新闻列表
	{
		$listArray=array();
		$i=0;
		$menu=$this->getJZYYmenu();
		foreach($menu as $rows)
		{
			$tmpArray=array();
			$id=$rows->default_art_id;
			$tmpArray["id"]=$id;
			$tmpArray['imgUrl']=$rows->imageUrl;
			$tmpArray["title"]=$this->getPostDataByName($id,"title");
			$tmpArray["body"]=$this->getPostDataByName($id,"body");
			$tmpArray['list']=$this->_getJZYYlistByCategoryId($rows->menu_id);
			$listArray[$i++]=$tmpArray;
		}
		return $listArray;
	}
	
	function _getJZYYlistByCategoryId($c_id)      //根据分类ID获得建站运营菜单列表
	{
		$returnArray=array();
		$sqlStr="select * from post where c_id=".$c_id." order by id DESC limit 0,10";
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			foreach($result->result() as $rows)
			{
				$returnArray[$rows->id]=$rows->title;
			}
			return $returnArray;
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getPostDataByName($id,$name)   //根据ID获得post中的name字段值
	{
		$sql="select * from post where id=".$id;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sql);
		if($result->num_rows()>0)
		{
			foreach($result->result() as $rows)
			{
				return $rows->$name;
			}
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getDNDQlist()          //获得电脑大全数据
	{
		$dndqArray=array();
		$p_id=$this->config->item('computerNewsId');
		$dndqArray["id"]=$p_id;
		$dndqArray["title"]=$this->getPostDataByName($p_id,"title");
		$dndqArray["body"]=$this->getPostDataByName($p_id,"body");
		$c_id=$this->getPostDataByName($p_id,"c_id");
		$dndqArray["list"]=$this->getTableListByCategoryId($c_id,5);
		return $dndqArray;
	}
	
	function getTableListByCategoryId($c_id,$number)
	{
		$sqlStr="select * from post where c_id=".$c_id." order by id DESC limit 0,".$number;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function _getJCtable($tableName,$limitNum)
	{
		$sqlStr="select * from ".$tableName." limit 0,".$limitNum;
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			return $result->result();
		}
		else 
		{
			return FALSE;
		}
	}
	
	function getJClist($tableName,$limitNum=7)        //得到基础教程，美化教程，网络编程的文章列表
	{
		$listArray=array();
		$i=0;
		$artIDList=$this->_getJCtable($tableName,$limitNum);
		foreach($artIDList as $rows)
		{
			$tmpArr=array();
			$tmpArr["id"]=$rows->post_id;
			$tmpArr["title"]=$this->getPostDataByName($rows->post_id,"title");
			$tmpArr["c_id"]=$this->getPostDataByName($rows->post_id,"c_id");
			$tmpArr["c_name"]=$this->_delMenuName($this->_getCategoryDate($tmpArr["c_id"],"name"));
			$listArray[$i++]=$tmpArr;
		}
		return $listArray;
	}	
	
	function _delMenuName($delStr)   //处理教程中显示的菜单名，如在"CSS"后增加"教程"
	{
		if($delStr=="HTML") $delStr="Html/Xhtml";
		else if($delStr=="CSS") $delStr="CSS教程";
		else if($delStr=="DreamWeaver") $delStr="DR教程大全";
		else if($delStr=="Flash") $delStr="Flash教程";
		else if($delStr=="3DMax") $delStr="3DMax教程";
		else if($delStr=="ASP") $delStr="ASP基础";
		else if($delStr=="PHP") $delStr="PHP技巧";
		else if($delStr=="JSP") $delStr="JSP进阶";
		else if($delStr=="XML") $delStr="XML大全";
		else if($delStr=="CGI") $delStr="CGI提高";
		return $delStr;
	}
	
}