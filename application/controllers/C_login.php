<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class C_login extends CI_Controller{
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud', 'crud');
			if(isset($_SESSION['tc_username'])){
				if($_SESSION['tc_username']=="admin"){
					redirect('C_main');
				}
				else{
					redirect('C_main');
				}
			}
		}

		function index(){
    	$this->load->view('dashboard');
		}

		function proses(){
			$username = $this->input->post('username');
      		$password = $this->input->post('password');
     		if($this->crud->login($username,$password)){
		      	$_SESSION['tc_username'] = $username;
		      	$_SESSION['tc_id_user'] = $this->crud->getiduser($username);
		      	$_SESSION['tc_lv'] = $this->crud->getlvuser($username);
		      	echo $_SESSION['tc_id_user'];
      		}else{
         		echo 0;
      		}
		}

		function logout(){
			session_destroy();
           // redirect(c_login);
		}
	}
?>
