<?php
/**
 * 
 */
class Model1 extends CI_Model
{
	
	function insertdata($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	function selectdata($table,$field,$where='')
	{
		if($where!=='')
		{
			$this->db->where($where);
		}
		$this->db->select("*");
		$this->db->from($table);
		$qry=$this->db->get();
		return $qry->result();
		//echo $this->db->last_query();
	}


	function update_record($id,$name,$email,$mobile,$gender,$pic)
	{
		$this->db->where("id",$id);
		return $this->db->update("login",array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"gender"=>$gender,"pic"=>$pic));
	}

	// function update_record2($id,$name,$email,$mobile,$pic,$path)
	// {
	// 	$this->db->where("id",$id);
	// 	return $this->db->update("login",array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"pic"=>$pic,"path"=>$path));
	// }
}
?>