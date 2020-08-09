<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        $this->load->model('User_model');
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules(
            'firtsname',
            'firtsname',
            'required',
            'lastname',
            'lastname',
            'required',
            'username',
            'username',
            'required',
            'pass',
            'pass',
            'required'
        );
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('/add');
        } else {
            $this->user_model->add();
        }
    }

    public function index()
    {

        $data['users'] = $this->User_model->all();
        $this->load->view('/list', $data);
    }
    public function update()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules(
            'firtsname',
            'firtsname',
            'required',
            'lastname',
            'lastname',
            'required',
            'username',
            'username',
            'required',
            'pass',
            'pass',
            'required'
        );
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('/add');
        } else {
            $this->user_model->update();
        }
    }
    public function find($id)

    {

        return $this->db->get_where('users', array('id' => $id))->row();
    }


    public function delete($id)

    {

        return $this->db->delete('users', array('id' => $id));
    }
}
