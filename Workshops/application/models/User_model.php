<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    

    public function add()
    {
        $data = array(
            'firtsname'   => $this->input->post('firtsname'),
            'lastname'   => $this->input->post('lastname'),
            'username'   => $this->input->post('username'),
            'pass'   => $this->input->post('pass'),
        );
        return $this->db->insert('editoriales', $data);
    }
    public function all(){
        $query = $this->db->get('users');
        return $query->result();
    }


}