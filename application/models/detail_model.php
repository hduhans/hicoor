<?php

class Detail_model extends CI_Model{
	
	function _getDateByNames($table,$id,$name)       //�����ֶ�����ȡ���ݱ�����Ӧ������
	{
		$sqlStr="select * from ".$table." where id=".$id;
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
	
	function getCurrentPaths($id)     	//��ȡ��ǰ·�� path(0=>��Ŀ¼ID 1=>��Ŀ¼��  2=>��ǰĿ¼��  3=>��ǰĿ¼ID)
	{
		$path=array();
		$path[3]=$this->_getDateByNames("post",$id,"c_id");
		$path[2]=$this->_getDateByNames("category",$path[3],"name");
		$path[0]=$this->_getDateByNames("category",$path[3],"parent_id");
		$path[1]=$this->_getDateByNames("category",$path[0],"name");
		return $path;
	}
	
	function getLinkArticle($c_id)    //��ȡ��ǰҳ�������Ƽ�����
	{
		
		$sqlStr="SELECT * FROM post AS t1 JOIN (SELECT ROUND(RAND() * ((SELECT MAX(id) FROM post)-(SELECT MIN(id) FROM post))+(SELECT MIN(id) FROM post)) AS id) AS t2 WHERE t1.c_id=".$c_id." and  t1.id >= t2.id ORDER BY t1.id LIMIT 1";
		$this->db->query("set names 'gb2312'");
		$result=$this->db->query($sqlStr);
		if($result->num_rows()>0)
		{
			$retuayArray=array();
			foreach($result->result() as $rows)
			{
				$retuayArray[0]=$rows->id;
				$retuayArray[1]=$rows->title;
				
				return $retuayArray;
			}
		}
		else 
		{
			return FALSE;
		}
	}
	
}
