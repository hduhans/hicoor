<?php

class Code_model extends CI_Model{
	
	function getCodeById($id='1')
	{
		$sqlStr="select * from codes where id=".$id;
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
	
}