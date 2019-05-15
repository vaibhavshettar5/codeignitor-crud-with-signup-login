<?php
class User_model extends CI_Model{
	 public function get_users(){
	 	$query=$this->db->get('users');
	 	return $query->result();
	}
	public function get_users2($user_id){
	  	$this->db->where('id',$user_id);
	 	$query=$this->db->get('users');
	 	return $query->result();
	}
	public function create_user($data){
	 	$this->db->insert('users',$data);
	 }
	public function update_user($data,$id){
	  	$this->db->where(['id'=>$id]);
	 	$this->db->update('users',$data);
	 }
	public function delete_user($id){
	  	$this->db->where(['id'=>$id]);
	 	$this->db->delete('users');
	}
	public function login_user($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result=$this->db->get('users');
		if($result->num_rows()==1){
			return $result->row(0)->id;
		}
		else{
			return false;
		}
	}

}
?>