<?php defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Class Pages
 */
class Pages extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));

        $this->load->model('greatcms/pages_model');

        //Check login
        if (!$this->ion_auth->logged_in()) {
            redirect('gc-admin/login', 'refresh');
        }
        elseif (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        }
    }

    /**
     *
     */
    public function index (){

        echo 'index';
    }

    /**
     *
     */
    public function edit (){

    }

    /**
     *
     */
    public function save (){

    }


} 