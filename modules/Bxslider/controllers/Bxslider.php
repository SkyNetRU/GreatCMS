<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bxslider extends MX_Controller
{
    public function __construct(){
        parent::__construct();
    }


    public function edit ($id = null) {
        $data['id'] = $id;
        $this->load->view('Bxslider/new', $data);
    }

    public function index () {

    }
}
