<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $this->load->view('cpd/layout/header');
        $this->load->view('cpd/about/index');
        $this->load->view('cpd/layout/footer');
    }
}
