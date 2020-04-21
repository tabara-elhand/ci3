<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BbsPost extends My_Controller
{
    public function index()
    {
        $bbs_list_id = 1;
        // -------------------------------------------------------------------
        $this->load->model("MY_Model","my_model");
        $opt = [
            "order_by" => "POST.uid",
            "column" => [
                "POST.*",
                "U.name AS user_name",
            ],
            "where" => [
                "U.deleted_date" => null,
            ],
            "join" => [
                [
                    "table" => "users AS U",
                    "on" => "POST.users = U.uid",
                    "join" => "left outer",
                ],
            ]
        ];
        $data['result'] = $this->my_model->getData("bbs_post AS POST", $opt);
        // -------------------------------------------------------------------
        $opt = [
            "where"	=> [
                "uid" => $bbs_list_id,
            ],
        ];
        $bbs_name = $this->my_model->getData("bbs", $opt);
        $data['bbs_name'] = "";
        if ((bool)$bbs_name){
            $data['bbs_name'] = $bbs_name[0]["name"];
        }
        $data['title'] = $data['bbs_name'];
        // -------------------------------------------------------------------
        $data['css'] = [];
        $data['js'] = [
            "js/bbs.js",
        ];
        debugConsole($data);
        // -------------------------------------------------------------------
        $this->view('bbsPost', $data);
    }
}
