<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

(defined('EXT')) OR define('EXT', '.php');

class MY_Parser extends CI_Parser {

    public function __construct() {
        parent::__construct();
        log_message('info', "My_Parser loaded");
    }

    public function parse($template, $data, $return = FALSE)
    {
        $template = $template.EXT;
        $template = $this->CI->load->view($template, $data, TRUE);

        return $this->_parse($template, $data, $return);
    }
}