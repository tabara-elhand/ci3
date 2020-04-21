<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    function __construct()
    {
        $this->load->database();
    }

    function getData($table_name, $opt)
    {
        $where = [];
        if (isset($opt)){
            if (isset($opt["order_by"])){
                $this->db->order_by($opt["order_by"]);
            }
            if (isset($opt["where"])){
                $where = $opt["where"];
            }
            if (isset($opt["column"])){
                $this->db->select($opt["column"]);
            }
            if (isset($opt["join"])){
                foreach ($opt["join"] as $key => $value) {
                    $value["join"] = (isset($value["join"])) ? $value["join"] :"left";
                    $this->db->join($value["table"], $value["on"], $value["join"]);
                }
                $this->db->order_by($opt["order_by"]);
            }
        }
        $this->db->where = $where;
        $query = $this->db->get_where($table_name, $where);
        // echo $this->db->last_query();
        return $query->result_array();
    }
    /**
     * データベースに登録
     * @param  string     $html_path     テーブル名
     * @param  array      $insert_data   登録する連想配列
     * @return int        登録したID
     */
    function insertData($table_name, $insert_data)
    {
        $this->db->insert($table_name, $insert_data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

}
