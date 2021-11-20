<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        $a = require_once APPPATH . 'modules/markdown/config/markdown.php';
        $this->load->helper('markdown');
    }

    public function index($filename)
    {
        $view = markdown_view($filename . '.md');
        return $this->load->view('index', ['html' => $view]);
    }

    public function sphinx()
    {
        header('location: ' . base_url() . 'sphinx/_build/html/index.html');
    }
}
