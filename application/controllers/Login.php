<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends My_Controller {
    public function index()
    {
        $data['title'] = "ログイン";
        $data['js'] = [
        	"js/login.js",
        ];
        $this->view('login', $data);
    }
}
