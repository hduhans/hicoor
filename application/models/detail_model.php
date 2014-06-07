<?php

class Detail_model extends CI_Model{
	
	function _getDateByNames($table,$id,$name)       //根据字段名获取数据表中相应的数据
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
	
	function getCurrentPaths($id)     	//获取当前路径 path(0=>父目录ID 1=>父目录名  2=>当前目录名  3=>当前目录ID)
	{
		$path=array();
		$path[3]=$this->_getDateByNames("post",$id,"c_id");
		$path[2]=$this->_getDateByNames("category",$path[3],"name");
		$path[0]=$this->_getDateByNames("category",$path[3],"parent_id");
		$path[1]=$this->_getDateByNames("category",$path[0],"name");
		return $path;
	}
	
	function getLinkArticle($c_id)    //获取当前页面的相关推荐文章
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
