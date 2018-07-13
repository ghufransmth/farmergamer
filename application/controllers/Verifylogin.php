<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

  function __construct()
  {
    $this->load->library('session');
    session_start();
    parent::__construct();
    $this->load->model('m_crud', 'crud');
    $this->load->helper('security');
  }

  function index()
  {
//This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

    if($this->form_validation->run() == FALSE)
    {
//Field validation failed.  User redirected to login page
      $this->load->view('v_login');
    }
    else
    {
//Go to private area
      redirect('home', 'refresh');
    }

  }

  function check_database($password)
  {
//Field validation succeeded.  Validate against database
    $username = $this->input->post('username');

//query the database
    $result = $this->crud->login($username, $password);

    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
          'id_user' => $row->id_user,
          'username' => $row->username
          );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }
}
?>