<?php
class Hello_Model extends CI_Model 
{
	function saverecords($name,$email,$mobile)
	{
	$query="insert into user values('','$name','$email','$mobile')";
	$this->db->query($query);
	}
	
	function displayrecords()
	{
	$query=$this->db->query("select * from user");
	return $query->result();
	}
	
	function deleterecords($id)
	{
	$this->db->query("delete  from user where user_id='".$id."'");
	}
	
	function displayrecordsById($id)
	{
	$query=$this->db->query("select * from user where user_id='".$id."'");
	return $query->result();
	}
	
	function updaterecords($name,$email,$mobile,$id)
	{
	$query=$this->db->query("update user SET name='$name',email='$email',mobile='$mobile' where user_id='".$id."'");
	}	
}
?>