<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Exceptions extends CI_Exceptions{

    function __construct()
    {
        parent::__construct();
    }

	public function show_error($heading, $message, $template = 'error_general', $status_code = 500)
	{
        $this->show_system_error();
        exit();
	}
    public function show_exception($exception)
	{
        $this->show_system_error();
        exit();
	}
	public function show_php_error($severity, $message, $filepath, $line)
	{
        $this->show_system_error();
        exit();
	}
    private function show_system_error(){
        $templates_path = VIEWPATH.'contents/';
        $templates_name = 'error.php';
        if (ob_get_level() > $this->ob_level + 1){
            ob_end_flush();
        }
        ob_start();
        include($templates_path.$templates_name);
        $buffer = ob_get_contents();
        ob_end_clean();
        echo $buffer;
    }
}
class MY_DB_driver extends CI_DB_driver {
    public function display_error($error = '', $swap = '', $native = FALSE)
	{
        debugLog("db_display_error");
    }
}
