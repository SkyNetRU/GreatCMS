<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}


/**
 * Class Pages_model
 */
class Modules_model extends CI_Model {

    public function __construct (){
        parent::__construct();
        $this->table = 'modules';
    }


    /**
     * get_modules
     * Get modules list from DB
     * @param bool $trashed
     * @return bool/obj
     */
    public function get_modules($trashed = false)
    {
        $this->db->select('modules.id, modules.title, modules.note, modules.created, modules.last_modified, modules.published, modules.trashed, extensions.name');
        $this->db->from('modules');
        $this->db->join('extensions', 'extensions.id = modules.module_id');
        if ($trashed){
            $this->db->where('modules.trashed', 1);
        } else {
            $this->db->where('modules.trashed', 0);
        }
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    /**
     * get_extensions
     * Get extensions list
     * @return bool/obj
     */
    public function get_extensions()
    {
        $query = $this->db->get('extensions');
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    /**
     * get_extension
     * Get extension data from DB
     * @param int $id  ID extension
     * @return bool/obj
     */
    public function get_extension ($id = null) {
        if (!$id){
            return false;
        }

        $query = $this->db->get_where('extensions', array('id' => $id),1);
        return ($query->num_rows() > 0) ? $query->result()[0] : FALSE;

    }


    /**
     * Save module
     * @param array $post  Post data
     * @param int $id  Id extension
     * @param null $user_id
     * @return bool/int
     */
    public function save_module ($post, $id, $user_id = null) {
        if (!$id) {
            return false;
        }

        if ($post['status']){
            $published = 1;
            $trashed = 0;
        } elseif ($post['status'] == 0) {
            $published = 0;
            $trashed = 0;
        } elseif ($post['status'] == -1) {
            $published = 0;
            $trashed = 1;
        }

        $data = array(
            'module_id' => $id,
            'title' => $post['title'],
            'title_show' => $post['title_show'],
            'note' => $post['note'],
            'params' => json_encode($post['params']),
            'created' => date("Y-m-d H:i:s"),
            'created_by' => $user_id,
            'trashed' => $trashed,
            'published' => $published
        );

        $this->db->insert('modules', $data);
        if ($this->db->affected_rows()){
            return $this->db->insert_id();
        }
        return false;
    }

    public function trash_module ($module_id = null) {
        if (!$module_id){
            return false;
        }

        $data = array(
            'trashed' => 1
        );

        $this->db->where('id', $module_id);
        $this->db->update('modules', $data);
        if ($this->db->affected_rows()){
            return true;
        }

        return false;
    }

    public function change_status ($module_id = null, $status = true) {
        if (!$module_id){
            return false;
        }

        $data = array(
            'published' => $status ? 0 : 1
        );

        $this->db->where('id', $module_id);
        $this->db->update('modules', $data);
        if ($this->db->affected_rows()){
            return true;
        }

        return false;
    }




}