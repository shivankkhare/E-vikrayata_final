<?php
class Users extends CI_model{
 
 
 
public function register_user($user){
 
 
$this->db->insert('user', $user);
 
}
 
public function login_user($email,$pass){
 //$email,$pass
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('phone_no',$email);
  $this->db->where('password',$pass);
 
  if($query=$this->db->get())
  {
      return $query->result_array();
  }
  else{
    return false;
  }
 
 
}
public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
}
public function farmer_sell($user){
 
 
$this->db->insert('farmer_sell', $user);
 
}

public function get_labour($user){
 
 
$this->db->insert('get_labour', $user);
 
}

 
 
}
 
 
?>