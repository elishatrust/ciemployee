<?php

class Authentication extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->has_userdata('authenticated'))
        {
            if($this->session->userdata('authenticated') == '1'){
                //echo 'You are User';
            }else{
                $this->session->set_flashdata('status','Login first');
                redirect(base_url('login'));
            }
        }
    }

}
?>