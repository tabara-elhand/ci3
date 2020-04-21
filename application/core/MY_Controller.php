<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    }
    public function view($page, $data)
    {
        $page_dir = "contents/";
        if ( ! file_exists(APPPATH.'views/'.$page_dir.$page.'.php')){
            show_404();
        }
        //
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', []);
        $this->load->view($page_dir.$page, $data);
        $this->load->view('templates/footer', []);
    }
}
