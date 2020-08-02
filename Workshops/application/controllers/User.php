<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()     {
        $this->load->model('User_model');  

    }

    public function add()
    {
        $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('firtsname', 'firtsname', 'required',
    'lastname', 'lastname', 'required','username', 'username', 'required','pass', 'pass', 'required');
    if ($this->form_validation->run() === FALSE)
    {  
        $this->load->view('/add');
    
    }
    else
    {
        $this->editoriales_model->add();

    }
}

    public function index()     {

            $data['users'] = $this->User_model->all();
            $this->load->view('/list', $data);
    }

}
