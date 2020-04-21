<div id="title_left">
    <?php foreach ($left as $key => $value) :?>
        <?php if ((bool)$this->config->item('is_guide') === true) :?>
            <button type="button" class="btn btn-info" id="guide_button">
                <i class="fa fa-fw fa-info-circle"></i>
            </button>
        <?php endif;?>
        <?php if ($value == "bbs_list_button") :?>
            <button type="button" class="btn btn-info" id="bbs_list_button">
                一覧へ
            </button>
        <?php elseif ($value == "login_button") :?>
            <?php $user_id = 0;?>
            <?php if ($user_id == 0) :?>
                <button type="button" class="btn btn-secondary" id="login_button">
                    ログイン
                </button>
            <?php else : ?>
                <button type="button" class="btn btn-secondary" id="logout_button">
                    ログアウト
                </button>
            <?php endif;?>
        <?php elseif ($value == "back_button") :?>
            <button type="button" class="btn btn-secondary" id="back_button">
                戻る
            </button>
        <?php endif;?>
    <?php endforeach;?>
</div>
<h3 class="card-title text-center"><?php echo $title;?></h3>
<div id="title_right">
    <?php foreach ($right as $key => $value) :?>
        <?php if ($value == "bbs_list_button") :?>
            <button type="button" class="btn btn-secondary" id="bbs_list_button">
                一覧へ
            </button>
        <?php elseif ($value == "bbs_create_button") :?>
            <button type="button" class="btn btn-secondary" id="bbs_create_button" data-toggle="modal" data-target="#modal-bbs_create">
                作成
            </button>
        <?php elseif ($value == "reload_button") :?>
            <button type="button" class="btn btn-secondary" id="reload_button">
                更新
            </button>
        <?php endif;?>
    <?php endforeach;?>
</div>
