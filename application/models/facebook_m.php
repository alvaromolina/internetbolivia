<?php
class Facebook_m extends CI_Model {
 
    public function __construct()
    {
      parent::__construct();
        
    }

    function init(){

        $fb_data = $this->session->userdata('fb_data');

        if(!(isset($fb_data['uid']) and $fb_data['uid'])){
          

          $config = array(
                        'appId'  => '192706770837988',
                        'secret' => 'ecbc201397514b41174875a844f2501e',
                        'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
                        );

          $this->load->library('Facebook', $config);

          $this->session->set_userdata('uid', '1234');
   
          $user = $this->facebook->getUser();   
          $profile = null;
          if($user)
          {
              try {
                $profile = $this->facebook->api('/me?fields=id,name,link,email');
                $this->session->set_userdata('name', $profile['name']);
                $this->session->set_userdata('uid', $profile['id']);        

              } catch (FacebookApiException $e) {
                  error_log($e);
                  $user = null;
              }
          }
          $fb_data = array(
                          'me' => $profile,
                          'name' => $profile['name'],
                          'uid' => $user,
                          'loginUrl' => $this->facebook->getLoginUrl(),
                          'logoutUrl' => $this->facebook->getLogoutUrl(array('next' => 'http://www.unmejorinternet.com/')),
                          'appId' => '192706770837988'
                        );
          $this->session->set_userdata('fb_data', $fb_data);
  
          } 
          
    }
        


    function logout(){
          $config = array(
                        'appId'  => '192706770837988',
                        'secret' => 'ecbc201397514b41174875a844f2501e',
                        'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
                        );

          $this->load->library('Facebook', $config);

          $this->facebook->destroySession();
          //setcookie($this->facebook->getSignedRequestCookieName(), '', time() - 3600, '/');  
    }
}
