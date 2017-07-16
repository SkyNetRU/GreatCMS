<?php defined('BASEPATH') OR exit('No direct script access allowed');

class GC_Modules extends MX_Controller
{

    public $data;
    public $user_id;
    public $notification;

   public function __construct () {
       parent::__construct();
       $this->load->library(array('ion_auth'));
       if (!$this->ion_auth->logged_in()) {
           // redirect user to the login page
           redirect('gc-admin/login', 'refresh');
       }
       else if (!$this->ion_auth->is_admin()) {
           // redirect user to the home page because they must be an administrator to view this
           return show_error('You must be an administrator to view this page.');
       }

       //Get user_id
       $this->user_id = $this->ion_auth->get_user_id();

       //Define locale of the site
       $this->layout->locale = 'admin';
       $this->load->model('GreatCms/modules_model');
       $this->load->helper('form');

       $this->notification = $this->session->flashdata('notification');

//       //Load CSS's
//       $this->layout->css += array(
//
//       );
//
//       //Load JS's
//       $this->layout->bottom_js += array(
//
//       );
    }

    /**
     * Show list modules
     */
    public function index ()
    {
        //Load Module CSS's
        $this->layout->css += array(
            '/assets/global/plugins/datatables/datatables.min.css',
            '/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'
        );

        //Load Module JS's
        $this->layout->bottom_js += array(
            '/assets/global/plugins/datatables/datatables.min.js',
            '/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
            '/assets/global/scripts/table-datatables-managed.js'
        );

        $this->data['csrf'] = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $this->data['extensions'] = $this->modules_model->get_extensions();
        $this->data['modules'] = $this->modules_model->get_modules();
        $this->data['page_title'] = 'GreatCMS Modules';
        $this->data['meta_description'] = 'GreatCMS Modules';
        $this->layout->_render("admin/Modules/List", $this->data);
    }

    public function edit (){

    }


    /**
     * Create new module
     * @param int $id
     */
    public function create ($id = null){
        if (!$id) {
            return false;
        }
        //Load CSS's

        $extension = $this->modules_model->get_extension($id);
        $module_assets = $this->load->config($extension->location.'/module_assets', true);

        //Load Module Assets
        $this->layout->css += $module_assets['css'];
        $this->layout->bottom_js += $module_assets['bottom_js'];

        $this->data['module_html'] = modules::run($extension->route.'/edit', $id);
        $this->layout->_render("admin/Modules/Edit", $this->data);
    }


    /**
     * Save Module
     * @param null $id
     * return bool
     */
    public function save ($id = null){
        if (!$id) {
            return false;
        }

        $action = $this->input->post('action');

        $module_id = $this->modules_model->save_module($this->input->post(), $id, $this->user_id);
        if (!$module_id){
            $this->notification[] = array(
                'type' => 'danger',
                'title' => 'Error',
                'message' => 'Some error there'
            );
            $this->session->set_flashdata('notification',$this->notification);
            redirect('/gc-admin/modules/create/'.$module_id, 'refresh');
        }


        $this->notification[] = array(
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Module successfully saved'
        );
        $this->session->set_flashdata('notification',$this->notification);

        if ($action == 'save') {
            redirect('/gc-admin/modules/edit/'.$module_id, 'refresh');
        } else if ($action == 'saveandclose'){
            redirect('/gc-admin/modules', 'refresh');
        }
    }

    public function trash_module_ajax (){
        $res['hash'] = $this->security->get_csrf_hash();
        if (!$this->input->post('module_id')){
            echo json_encode(false);
            return;
        }

        $res['result'] = $this->modules_model->trash_module($this->input->post('module_id'));
        echo json_encode($res);
        return;
    }


    public  function change_status_module_ajax () {
        $res['hash'] = $this->security->get_csrf_hash();
        if (!$this->input->post('module_id')){
            $res['result'] = false;
            echo json_encode($res);
            return;
        }

        $res['result'] = $this->modules_model->change_status($this->input->post('module_id'), $this->input->post('status'));
        echo json_encode($res);
        return;
    }
}