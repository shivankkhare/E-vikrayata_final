<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('Users');
        $this->load->library('session');
 
}
 
public function index()
{
$this->load->view("login");
}
 
public function register_user(){
 
      $user=array(
      'name'=>$this->input->post('name'),
      'gender'=>$this->input->post('gender'),
      'category'=>$this->input->post('category'),
      'phone_no'=>$this->input->post('phone_no'),
      'password'=>$this->input->post('password'),
        );print_r($user);
        
 
/*$email_check=$this->user_model->email_check($user['user_email']);
 
if($email_check){*/
  $this->Users->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('login/hello');
 


 
  /*$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');*/
 
 

 
}
 
public function login_view(){
 
$this->load->view("login.php");
 
}
 
function login_user(){ 
  $user_login=array(
 
  'phone_no'=>$this->input->post('phone_no'),
  'password'=>$this->input->post('password'),
 
    ); 
  $a = $this->input->post('phone_no');
  $b=$this->input->post('password');
//$user_login['user_email'],$user_login['user_password']
    $data['users']=$this->Users->login_user($a,$b);
    //  if($data)
      //{
		  
        $this->session->set_userdata('phone_no',$data['users'][0]['phone_no']);
        $this->session->set_userdata('password',$data['users'][0]['password']);
        $this->session->set_userdata('name',$data['users'][0]['name']);
        if($data['users'][0]['category']=="Farmer"){
			$this->load->view('seperate_farmer.php',$data);
		}
        
		#echo $this->session->set_userdata('phone_no'); 
		if($data['users'][0]['category']=="Trader"){
        	$this->load->view('seperate_traders.php',$data);
		}
		if($data['users'][0]['category']=="Transport"){
			$this->load->view('seperate_transporter.php',$data);
		}
		if($data['users'][0]['category']=="Labour"){
			$this->load->view('seperate_labour.php',$data);
		}
		if($data['users'][0]['category']=="Customer"){
			$this->load->view('seperate_labour.php',$data);
		}
 
    //  }
    //  else{
     //   $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
     //   $this->load->view("login.php");
 
     // }
 
 
}
 
function user_profile(){
 
$this->load->view('user_profile.php');
 
}
public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('Welcome' , 'refresh');
}

public function farmers_add(){
	$data['phone'] = $this->uri->segment('3');
	$data['name'] = $this->uri->segment('4');

 
  $this->load->view('add.php',$data);
}
public function farmer_sell(){
	$user=array(
      'item'=>$this->input->post('item'),
      'quantity'=>$this->input->post('quantity'),
      'description'=>$this->input->post('description'),
      'phone_no'=>$this->input->post('phone_no'),
      'name'=>$this->input->post('name'),
        );print_r($user);
	$this->Users->farmer_sell($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('login/hello');
}

public function labour_add(){
	$data['phone'] = $this->uri->segment('3');
	$data['name'] = $this->uri->segment('4');

 
  $this->load->view('labour_add.php',$data);
}
public function get_labour(){
	$user=array(
      'work'=>$this->input->post('work'),
      'no_of_labour'=>$this->input->post('no_of_labour'),
      'description'=>$this->input->post('description'),
      'phone_no'=>$this->input->post('phone_no'),
      'name'=>$this->input->post('name'),
        );print_r($user);
	$this->Users->get_labour($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('login/hello');
}
 
}
 
?>