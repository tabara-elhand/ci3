<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <?php
                    $title_info = [
                        "title" => "ガイド",
                        "left" => [
                            "back_button", // 戻る
                        ],
                        "right" => [],
                    ];
                    echo $this->load->view('templates/title_header', $title_info, true);
                    ?>
                </div>
                <!-- /.card-header -->
                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php $num = "01";?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $num;?>">
                            <h5 class="mb-0">
                                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse<?php echo $num;?>" role="button" aria-expanded="false" aria-controls="collapseOne">
                                    仕様書
                                </a>
                            </h5>
                        </div><!-- /.card-header -->
                        <div id="collapse<?php echo $num;?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $num;?>" data-parent="#accordion">
                            <div class="card-body">
                                <object data="assets/other/bbs.pdf" type="application/pdf" width="100%">
                                    <p><b>表示されない時の表示</b>: <a href="assets/other/bbs.pdf">PDF をダウンロード</a>.</p>
                                </object>
                            </div><!-- /.card-body -->
                        </div><!-- /.collapse -->
                    </div><!-- /.card -->
                    <?php $num = "02";?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $num;?>">
                            <h5 class="mb-0">
                                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse<?php echo $num;?>" role="button" aria-expanded="false" aria-controls="collapseOne">
                                    テーブル定義書
                                </a>
                            </h5>
                        </div><!-- /.card-header -->
                        <div id="collapse<?php echo $num;?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $num;?>" data-parent="#accordion">
                            <div class="card-body">
                                <object data="assets/other/table.pdf" type="application/pdf" width="100%">
                                    <p><b>表示されない時の表示</b>: <a href="assets/other/table.pdf">PDF をダウンロード</a>.</p>
                                </object>
                            </div><!-- /.card-body -->
                        </div><!-- /.collapse -->
                    </div><!-- /.card -->
                    <?php $num = "03";?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $num;?>">
                            <h5 class="mb-0">
                                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse<?php echo $num;?>" role="button" aria-expanded="false" aria-controls="collapseOne">
                                    進め方
                                </a>
                            </h5>
                        </div><!-- /.card-header -->
                        <div id="collapse<?php echo $num;?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $num;?>" data-parent="#accordion">
                            <div class="card-body p-3">
                                <ul class="mt-3">
                                    <li>仕様書とテーブル定義書から掲示板を作成してください</li>
                                    <li>
                                        プログラムは可能な限りコーディングルールを守って記述してください<br />
                                        ※インデントは必ず守ってください
                                    </li>
                                    <li>可能な限りコメントを記述してください</li>
                                    <li>
                                        非同期処理や暗号化など、時間がかかりそうなのは後回しにしてまずは一連の流れをつくることを意識してください。<br />
                                        ※特に問題ない場合は同時進行で構いません
                                    </li>
                                    <li>ある程度調べてもわからない場合は、確認内容をまとめて他の処理の開発に移ってください。</li>
                                    <li>開発及びデバッグ時にログ出力して変数の値を確認しながら作業を行ってください。</li>
                                </ul>
                            </div><!-- /.card-body -->
                        </div><!-- /.collapse -->
                    </div><!-- /.card -->
                    <?php $num = "04";?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $num;?>">
                            <h5 class="mb-0">
                                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse<?php echo $num;?>" role="button" aria-expanded="false" aria-controls="collapseOne">
                                    リンク集
                                </a>
                            </h5>
                        </div><!-- /.card-header -->
                        <div id="collapse<?php echo $num;?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $num;?>" data-parent="#accordion">
                            <div class="card-body p-3">
                                <dl class="mt-3">
                                    <dt>フレームワーク&nbsp;<a href="https://codeigniter.jp/user_guide/3/" target="_blank">CodeIgniter</a></dt>
                                    <dd>
                                        フレームワークとは、開発に必要な汎用的な機能や骨組みがあらかじめ実装されている枠組みシステム<br />
                                        CodeIgniterはPHP製のフレームワーク。動作が高速でシンプルな構造のため学習コストが低い特徴
                                    </dd>
                                    <dt>Bootstrapテンプレート&nbsp;<a href="https://adminlte.io/themes/v3/index3.html" target="_blank">AdminLTE</a></dt>
                                    <dd>
                                        Bootstrapとは、Webサイトなどを構築するためのHTML／CSS／JavaScriptのフレームワーク<br />
                                        BootstrapテンプレートはBootstrapをベースに汎用的画面を統一したデザインにして機能を付加したものがテンプレート<br />
                                        テンプレートを一から作成する必要がなく、サイト制作の工数を大幅に下げることができることが特徴
                                    </dd>
                                </dl>
                            </div><!-- /.card-body -->
                        </div><!-- /.collapse -->
                    </div><!-- /.card -->
                    <?php $num = "05";?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $num;?>">
                            <h5 class="mb-0">
                                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse<?php echo $num;?>" role="button" aria-expanded="false" aria-controls="collapseOne">
                                    ファイル構造
                                </a>
                            </h5>
                        </div><!-- /.card-header -->
                        <div id="collapse<?php echo $num;?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $num;?>" data-parent="#accordion">
                            <div class="card-body p-3">
                                「*」は独自追加<br />
                                application<br />
                                ├ config (設定ファイル)<br />
                                │　├ autoload.php (アプリケーション全体で、常にロードしておきたいライブラリ、ヘルパーなど)<br />
                                │　├ database.php (データベース設定)<br />
                                │　└ routes.php (URI ルーティング)<br />
                                ├ controllers (コントローラー:アクセスされた際に呼出れて処理)<br />
                                │　├ *Bbs.php (掲示板)<br />
                                │　├ *BbsPost.php (投稿)<br />
                                │　├ *Guide.php (ガイド)<br />
                                │　└ *Login.php (ログイン)<br />
                                ├ core (コアクラスを継承してカスタマイズ)<br />
                                │　├ *MY_Controller.php (コントローラーの共通処理をカスタマイズ)<br />
                                │　└ *MY_Mode.php (モデルの共通処理をカスタマイズ)<br />
                                ├ helper (共通処理関数:簡単な処理でViewからも参照)<br />
                                │　├ *common_helper.php (汎用的な共通処理関数)<br />
                                │　└ *system_helper.php (システムに関連する共通処理関数)<br />
                                ├ library (共通処理メソッド:Viewからも参照できるが複雑、機能で分別可能な処理をライブラリ化)<br />
                                │　└ *File_library.php (ファイル操作のメソッド)<br />
                                ├ logs (ログファイル)<br />
                                ├ modes (モデル:テーブル毎の個別データベース処理)<br />
                                │　└ *Bbs_model.php (bbsテーブルのデータベース処理)<br />
                                ├ views (ビュー:画面表示用でBootstrapテンプレートから流用)<br />
                                │　├ error (エラー時の画面表示用)<br />
                                │　├ *templates (共通表示用のHTML部品)<br />
                                │　│　├ *footer.php (フッター)<br />
                                │　│　├ *header.php (ヘッダー:表示するHTMLの定義や読み込むjavascriptやcss)<br />
                                │　│　├ *sidebar.php (フッター)<br />
                                │　│　└ *title.php (タイトルバー)<br />
                                │　├ *contents (各ページ表示用のHTML:コントローラーのファイル名をキャメルケース)<br />
                                │　│　├ *bbs.php (掲示板)<br />
                                │　│　├ *bbsPost.php (投稿)<br />
                                │　│　├ *Guide.php (ガイド)<br />
                                │　│　└ *Login.php (ログイン)<br />
                                ├ *assets (HTML以外をまとめるフォルダ)<br />
                                │　├ *css (スタイルシート:コントローラーのファイル名をキャメルケース)<br />
                                │　│　└ *common.css (共通)<br />
                                │　├ *images (画像)<br />
                                │　│　└ *uploads (アップロード画像)<br />
                                │　│　　└ *000001 (掲示板IDを0埋め6桁)<br />
                                │　├ *js (JavaScript:コントローラーのファイル名をキャメルケース)<br />
                                │　│　├ *bbs.php (掲示板)<br />
                                │　│　├ *bbsPost.php (投稿)<br />
                                │　│　├ *common.js (共通)<br />
                                │　│　├ *Guide.php (ガイド)<br />
                                │　│　└ *Login.php (ログイン)<br />
                                │　├ *libs (外部ライブラリ:ライセンスに注意)<br />
                                │　│　├ *AdminLTE-3.0.2 (Bootstrapテンプレート)<br />
                                │　│　├ *bootstrap-4.4.1-dist (Bootstrap)<br />
                                │　│　└ *highlight (ソースコード装飾)<br />
                                │　└ *other (その他のファイル)<br />
                                └ .htaccess (Webサーバーの設定ファイル)<br />
                            </div><!-- /.card-body -->
                        </div><!-- /.collapse -->
                    </div><!-- /.card -->
                    <?php $num = "99";?>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $num;?>">
                            <h5 class="mb-0">
                                <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse<?php echo $num;?>" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                    コーディングルール
                                </a>
                            </h5>
                        </div><!-- /.card-header -->
                        <div id="collapse<?php echo $num;?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $num;?>" data-parent="#accordion">
                            <div class="card-body">
                                <?php echo $coding_rule;?>
                            </div><!-- /.card-body -->
                        </div><!-- /.collapse -->
                    </div><!-- /.card -->
                </div><!-- /#accordion -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
