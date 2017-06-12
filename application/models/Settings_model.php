<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}


/**
 * Class Settings_model
 */
class Settings_model extends CI_Model {


    /**
     * @return array
     */
    function getSettings (){
        $settings = $this->db->get('settings')->result_array();
        $data = array();
        foreach ($settings as $setting){
            $data[$setting['name']] = $setting['value'];
        }
        return $data;
    }


    /**
     * @param $name string
     * @return array
     */
    function getOneSetting ($name){
        $this->db->where("name", $name);
        $query = $this->db->get('settings');
        return $query->row_array();
    }
}