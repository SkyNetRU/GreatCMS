<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public $data = array();
    public function __construct () {
        parent::__construct();
        $this->load->library(array('ion_auth'));
    }

    public function index () {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('gc-admin/login', 'refresh');
        }
        elseif (!$this->ion_auth->is_admin()) {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }

        //Define locale of the site
        $this->layout->locale = 'admin';

        $this->data['page_title'] = 'GreatCMS Dashboard';
        $this->data['meta_description'] = 'GreatCMS Dashboard';
        $this->layout->_render("admin/Dashboard", $this->data);
    }
}