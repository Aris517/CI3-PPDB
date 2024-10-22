<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!$this->session->userdata('online')) {
            $this->load->view('cpd/layout/header');
            $this->load->view('cpd/index');
            $this->load->view('cpd/layout/footer');
        } else {
            $role = $this->session->userdata('role');

            if ($role === 'cpd') {
                $this->load->view('cpd/layout/header');
                $this->load->view('cpd/index');
                $this->load->view('cpd/layout/footer');
            } else {
                $this->load->view('layout/header');
                if ($role === 'admin' || $role === 'panitia') {
                    $this->load->view('admin/index');
                } elseif ($role === 'ks') {
                    $this->load->view('ks/index');
                }
                $this->load->view('layout/footer');
            }
        }
    }
}
