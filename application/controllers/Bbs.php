<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bbs extends My_Controller
{
    public function index()
    {
        // -------------------------------------------------------------------
        // データベースから掲示板データを取得
        $opt = [
            // 並び順を「uid」の昇順
            "order_by" => "uid",
            // 取得する列を「uid, name, created_date」に指定
            "column" => [
                "uid",
                "name",
                "created_date",
            ],
            // 検索条件を「deleted_dateがnull」に指定
            "where" => [
                "deleted_date" => null,
            ],
        ];
        // 掲示板モデルからクエリを実行して掲示板データを取得
        $this->load->model("Bbs_Model", "bbs_model");
        $data['result'] = $this->bbs_model->getBbs();
        // 確認用にコンソールに取得データを出力
        debugConsole($data);
        debugConsole(array_shift($data['result']));
        // -------------------------------------------------------------------
        // タイトルバーのタイトルを指定
        $data['title'] = "掲示板一覧";
        // -------------------------------------------------------------------
        // CSS・JSを個別読み込み
        $data['css'] = [];
        $data['js'] = [
            "js/bbs.js",
        ];
        $this->insertBbs();
        // -------------------------------------------------------------------
        // ビューを読み込み画面表示
        $this->view('bbs', $data);
    }
    public function insertBbs()
    {
        $input['bbs']['name'] = 'けいじばん';
        $input['bbs_post']['comment'] = 'ないよう';
        $user_id = 1;
        $now_date = date("Y-m-d H:i:s");
        $bbs = $input['bbs'];
        $bbs["created_date"] = $now_date;
        $bbs["created_user"] = $user_id;
        $bbs_post = $input['bbs_post'];
        $bbs_post["bbs_number"] = 'aaa';
        $bbs_post["users"] = $user_id;
        $bbs_post["created_date"] = $now_date;
        // -----------------------------------------------------------
        $this->db->trans_begin();
        $bbs_post["bbs"] = $this->my_model->insertData("bbs", $bbs);
        $this->my_model->insertData("bbs_post", $bbs_post);
        // -----------------------------------------------------------
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }
}
