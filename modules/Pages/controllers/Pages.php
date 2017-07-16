<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller
{

    public $module_assets;

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('ion_auth','functions'));
        $this->load->model('Pages/page_model');

        //Check login
        if (!$this->ion_auth->logged_in()) {
            redirect('gc-admin/login', 'refresh');
        }
        elseif (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        }

        //Define locale of the site
        $this->layout->locale = 'admin';

        //Load Module CSS and JS from config to Layout library
        foreach ($this->config->load('module_assets', true) as $key => $asset){
            $this->layout->$key = $asset;
        }
    }

    public function index($msg = "", $type = "") {

        //Load Module CSS's
        $this->layout->css += array(
            '/assets/global/plugins/datatables/plugins/responsive/css/responsive.dataTables.min.css',
            '/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'
        );

        //Load Module JS's
        $this->layout->bottom_js += array(
            '/assets/global/plugins/jquery.windoze.js',
            '/assets/global/plugins/datatables/jquery.dataTables.min.js',
            '/assets/global/plugins/datatables/datatables.min.js',
            '/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
            '/assets/global/plugins/datatables/plugins/responsive/js/dataTables.responsive.min.js',
            '/assets/global/plugins/datatables/plugins/responsive/js/responsive.bootstrap.min.js'
        );

        $this->load->library('pagination');
        $offset = $this->input->get("per_page");
        $jsinc = array('plugins.js');

        if ($offset <= 0) {
            $offset = 0;
        }

        $data = array(
            'pages' => $this->page_model->get_pages(),
            'jsinc' => $jsinc,
            'msg' => $this->functions->show_msg($msg, $type)
        );

        $config['base_url'] = base_url() . 'gc-admin/pages/list/';
        $config['total_rows'] = 3;
        $config['per_page'] = 3;
        $config['page_query_string'] = TRUE;
        $data['page_title'] = 'Pages List';
        $data['meta_description'] = 'GreatCMS Pages List';

        $this->pagination->initialize($config);
        $this->layout->_render("Pages/page_list", $data);
    }

    public function add_page($id = null){
        $this->load->view('add_page');
    }

    public function edit_page($id = null){

        $content = '';
        if ($id){
            $page = $this->page_model->get_page($id);
            $this->load->helper('Pages/Page_Construct');
            $content = Page_Construct($page);
        }

        //Load Module CSS's
        $this->layout->css += array(
            '/assets/global/plugins/bxslider/jquery.bxslider.css',
            '/assets/global/css/jquery.gridmanager.css',
            '/assets/global/plugins/jquery-minicolors/jquery.minicolors.css'

        );

        //Load Module JS's
        $this->layout->bottom_js += array(
            '/assets/global/plugins/jquery.gridmanager.js',
            '/assets/vendor/ckeditor/ckeditor.js',
            '/assets/vendor/ckeditor/adapters/jquery.js',
            '/assets/global/plugins/bxslider/jquery.bxslider.min.js',
            '/assets/global/plugins/jquery-minicolors/jquery.minicolors.js',
            '/assets/global/plugins/custom.js'
        );

        //Collapse Left SideBar
        $this->layout->sidebar_closed = true;

        $data['page_title'] = 'Pages List';
        $data['meta_description'] = 'GreatCMS Pages List';
        //$data['page'] = $this->page_model->get_page($id);
        $data['csrf'] = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $data['page_id'] = $id;
        $data['content'] = $content;
        $this->layout->_render("Pages/add_page", $data);
    }

    public function delete_page($id){
        if(!$this->session->userdata('login')) {
            redirect('login');
        }else {
            $data['page'] = $this->page_model->delete_page($id);
            redirect("page");
        }
    }

    public function save_page(){
        $data = array (
            'title' => $this->input->post('title'),
            'content' => json_encode($this->input->post('content')),
            'alias' => $this->input->post('alias'),
            'created' => date("Y-m-d H:i:s"),
            'created_by' => $this->session->userdata('user_id'),
            'meta_desc' => $this->input->post('meta_desc'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_author' => $this->input->post('meta_author'),
            'published' => $this->input->post('published'),
        );
        echo json_encode($this->page_model->add_page($data));
    }

    public function update_page($id){
        $data = array (
            'title' => $this->input->post('title'),
            'content' => json_encode($this->input->post('content')),
            'alias' => $this->input->post('alias'),
            'last_modified' => date("Y-m-d H:i:s"),
            'last_modified_by' => $this->session->userdata('user_id'),
            'meta_desc' => $this->input->post('meta_desc'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_author' => $this->input->post('meta_author'),
            'published' => $this->input->post('published'),
        );

        echo json_encode($this->page_model->update_page($id,$data));
    }

    function  show_text($id){
        $data['page'] = $this->page_model->get_page($id);
        $this->load->view('preview', $data);
    }

    public function safisha($text){
        $text_safi = $this->functions->strip_tags_content($text, '<info>', TRUE);
        $text_safi = preg_replace ('/id="keditor-(.+?)"/', '', $text_safi);
        $text_safi = preg_replace ('/class="keditor-(.+?)"/', '', $text_safi);
        $text_safi = preg_replace ('/<div >   <a(.+?)<.div./', '', $text_safi);
        return $text_safi;
    }

}