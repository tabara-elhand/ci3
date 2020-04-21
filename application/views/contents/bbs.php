<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <?php
                    // タイトルバーに表示するタイトル、左部ボタン、右部ボタンの設定を配列代入
                    $title_info = [
                        "title" => $title,
                        "left" => [
                            "login_button",
                        ],
                        "right" => [
                            "bbs_create_button", // 作成
                            "reload_button", // 更新
                        ],
                    ];
                    // タイトルバー部品HTMLにタイトルバー設定配列を渡して、タイトルバーを表示
                    echo $this->load->view('templates/title_header', $title_info, true);
                    ?>
                </div>
                <!-- /.card-header -->
                <div>
                    <ul class="nav nav-pills flex-column" id="bbs_lists">
                        <?php foreach ($result as $key => $value) :?>
                            <?php
                            if ($value["uid"] == 1 ){
                                $badge = 3;
                                $count = 7;
                            } else if ($value["uid"] == 2 ){
                                $badge = 0;
                                $count = 1;
                            }
                            ?>
                            <li>
                                <a href="bbsPost?bbs=1" class="bbs_list_link">
                                    <div><?php echo xss_escape($value["name"]);?></div>
                                    <div class="datetime"><?php echo $value["created_date"];?></div>
                                    <span class="navbar-badge count">(<?php echo $count;?>)</span>
                                    <?php if ($value["uid"] == 1 ) : ?>
                                        <span class="badge badge-danger navbar-badge"><?php echo $badge;?></span>
                                    <?php endif;?>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<!-- modal -->
<?php
$modal_class = "";
if ((bool)$this->config->item('is_bbs_modal') !== true){
    $modal_class = "modal fade";
}
?>
<div class="<?php echo $modal_class;?>" id="modal-bbs_create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">新規作成</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="スレッド名">
                </div>
                <div class="input-group mb-3">
                    <textarea class="form-control" placeholder="コメント"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                <button type="button" class="btn btn-primary">作成</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
