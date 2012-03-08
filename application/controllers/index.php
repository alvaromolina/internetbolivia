<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Index extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->helper('session_helper');
        $this->load->model('Facebook_m');
 
    }
 
    function index($section='problem')
    {
      $this->Facebook_m->init();
      $fb_data = $this->session->userdata('fb_data');
      $uid = $this->session->userdata('uid');
      
      //echo $uid;
      //die();
      
      $data = array(
        'fb_data' => $fb_data,
        'section' => $section,
        'uid' => $uid
                 );
      $this->load->view('index',$data);
    }    

    function logout(){
      $this->Facebook_m->logout();      
      $this->session->sess_destroy();
    }   
    
    function home(){
      $data = array();
      $this->load->view('home',$data);
    }   



  }
?>
