<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller{

    public function __Construct()
    {

        parent::__Construct();

    }

    public function index()
    {

        $this->load->view('Template/header');
        $this->load->view('Template/pages');
        $this->load->view('Content/about');
        $this->load->view('Content/experience');
        $this->load->view('Content/education');
        $this->load->view('Content/skill');
        $this->load->view('Template/footer');

    } 
}