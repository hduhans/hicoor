<?php

class Hicoor_model extends CI_Model{
	
	function getMenu()   //������˵�
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
	
	function getSubMenu($parent_id)   //��ö����˵�
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
	
	function getTopNew()   //��ý���ͷ������������
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
	
	function getTopNews()  //��ý���ͷ����������
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
	
	function getDetailNews($id)   //���������ϸ����
	{
		$addStr="update post set count=count+1 where id=".$id;
		$this->db->query($addStr);       //�������1
		
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
	
	function getAdricleNumber($c_id)   //�����������Ŀ
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
	
	function getArticleList($c_id,$page=1)   //��ȡ��ǰ�����б�
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
	
	function _getCategoryDate($c_id,$name)       //�����ֶ�����ȡcategory����Ӧ������
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
	
	function getCurrentPaths($c_id)     	//��ȡ��ǰ·��
	{
		$path=array();
		$path[2]=$this->_getCategoryDate($c_id,"name");
		$parent_id=$this->_getCategoryDate($c_id,"parent_id");
		$path[1]=$this->_getCategoryDate($parent_id,"name");
		
		return $path;
	}
	
	function getJZYYmenu()   //��ý�վ��Ӫ�ĵ�ǰ�˵�
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
	
	function getJZYYlist()       //��ý�վ��Ӫ�������б�
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
	
	function _getJZYYlistByCategoryId($c_id)      //���ݷ���ID��ý�վ��Ӫ�˵��б�
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
	
	function getPostDataByName($id,$name)   //����ID���post�е�name�ֶ�ֵ
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
	
	function getDNDQlist()          //��õ��Դ�ȫ����
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
	
	function getJClist($tableName,$limitNum=7)        //�õ������̳̣������̳̣������̵������б�
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
	
	function _delMenuName($delStr)   //����̳�����ʾ�Ĳ˵���������"CSS"������"�̳�"
	{
		if($delStr=="HTML") $delStr="Html/Xhtml";
		else if($delStr=="CSS") $delStr="CSS�̳�";
		else if($delStr=="DreamWeaver") $delStr="DR�̴̳�ȫ";
		else if($delStr=="Flash") $delStr="Flash�̳�";
		else if($delStr=="3DMax") $delStr="3DMax�̳�";
		else if($delStr=="ASP") $delStr="ASP����";
		else if($delStr=="PHP") $delStr="PHP����";
		else if($delStr=="JSP") $delStr="JSP����";
		else if($delStr=="XML") $delStr="XML��ȫ";
		else if($delStr=="CGI") $delStr="CGI���";
		return $delStr;
	}
	
}