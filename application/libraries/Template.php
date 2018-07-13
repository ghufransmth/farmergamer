<?php
class Template{
    protected $_CI;

    function __construct(){
        $this->_CI=&get_instance();
    }
    
    function display($template,$data=null){
        $data['_content']=$this->_CI->load->view($template,$data,true);
        $data['_header']=$this->_CI->load->view('template/header',$data,true);
        // $data['_carousel']=$this->_CI->load->view('template/carousel',$data,true);
        $data['_footer']=$this->_CI->load->view('template/footer',$data,true);
        $this->_CI->load->view('template.php',$data);  //di kumpulin di template.php , untuk nanti dipanggil dari template.php
    }

    function display_admin($template,$data=null){
        $data['_content']=$this->_CI->load->view($template,$data,true);
        $data['_header']=$this->_CI->load->view('admin/template/v_header',$data,true);
        // $data['_carousel']=$this->_CI->load->view('template/carousel',$data,true);
        $data['_footer']=$this->_CI->load->view('admin/template/v_footer',$data,true);
        $this->_CI->load->view('admin/template/template.php',$data);  //di kumpulin di template.php , untuk nanti dipanggil dari template.php
    }

    // function display_adminlte($template,$data=null){
    //     $data['_content']=$this->_CI->load->view($template,$data,true);
    //     $data['_header']=$this->_CI->load->view('login_admin/template/header',$data,true);
    //     $data['_sidebar']=$this->_CI->load->view('login_admin/template/sidebar',$data,true);
    //     $data['_footer']=$this->_CI->load->view('login_admin/template/footer',$data,true);
    //     $data['_control_sidebar']=$this->_CI->load->view('login_admin/template/control_sidebar',$data,true);
    //     $this->_CI->load->view('login_admin/template/template.php',$data);  //di kumpulin di template.php , untuk nanti dipanggil dari template.php
    // }

}