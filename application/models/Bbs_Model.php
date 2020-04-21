<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bbs_Model extends MY_Model {
    private  $table_name = "bbs";
    function __construct(){
    }

    function getBbs(){
        $CI =& get_instance();
        $column = [
            "uid",
            "name",
            "created_date",
        ];
        $where = [
            "deleted_date" => null,
        ];
        $this->db->order_by("uid");
        $this->db->select($column);
        $query = $CI->db->get_where($this->table_name, $where);
        $returns = [];
        foreach ($query->result_array() as $key => $value) {
            $returns[$value["uid"]] = $value;
        }
        return $returns;
	}
}
