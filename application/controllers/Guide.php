<?php
/*****************************************************************************
使用するフレームワークであるCodeIgniterにもコーディングルールがありますが
独自的なため、最もスタンダードなコーディング規約の「PSR」を準拠しています。
☆例外
ライブラリのメソッド呼出が小文字である必要があり
可読性を優先するため下記ファイル名はアッパーキャメルに複合語先頭にアンダースコア
core , helper, model, library（My_Controller）
☆例外
外部ライブラリ使用する際に外部のライブラリまでは修正しない
★データベース
テーブル名、列名はスネークケース
★HTML
id名は同じ画面で重複禁止
id名およびclass名はハイフン区切り
★JavaScript
phpと同様
*****************************************************************************/
// クラス名はアッパーキャメル（複合語をひと綴りとして、要素語の最初を大文字）
// クラス開始の中括弧は独立した行に記述、かつその前後に空行をつけない
class Guide extends My_Controller
{
    // インデントは半角スペース4文字
    /*****************************************************************************
    プロパティ
    *****************************************************************************/
    // プロパティ、変数は一行につき一つでスネークケース
    // アクセス修飾子（public/protected/private）を省略しない
    // privateでもアンダースコア文字で開始しない
    // PHPの定数「true」「false」「null」は小文字
    public $property1 = false;
    private $property2;
    public static $static_property;
    public function index()
    {
        // 括弧の中は複数の行に分割する場合は分割した行を最低1段階インデント
        $data['js'] = [
            "libs/highlight/highlight.pack.js",
            //"js/guide.js",
        ];
        $data['css'] = [
            "libs/highlight/styles/default.css",
        ];
        $data['title'] = "ガイド";
        $data['coding_rule'] = $this->getHtml('./assets/other/guide.html');
        $this->view('guide', $data);
    }
    /**
     * HTMLファイルを読み込み、返却
     *
     * @since 1.2 setString(string $str, \stdClass $class = null) 引数を追加した。
     * @since 1.1 setString(string $str) 実装した。
     *
     * @param  string     $html_path   読み込むHTMLファイルのパス
     * @return string     (返さない場合はfalse、return内で処理は行わない)
     */
    public function getHtml($html_path)
    {
        // ファイルライブラリのロード
        // ライブラリ内メソッド呼出は小文字のため
        $this->load->library('File_Library');
        $html = $this->file_library->roadFile($html_path);
        return $html;
    }
    /*****************************************************************************
    メソッド（関数）
    *****************************************************************************/
    // アクセス修飾子（public/protected/private）を省略しない
    // privateでもアンダースコア文字で開始しない
    // メソッド開始の中括弧は独立した行に記述、かつその前後に空行を置かない
    // メソッド名 はローワーキャメルケース
    // メソッド名の後にスペースを置かない
    // 引数列開始の括弧の後、引数列終了の括弧の前にスペースを置かない
    // デフォルト値を持つものは引数リストの末尾
    public function phpGuide($uid, $flg = false)
    {
        // 制御構造キーワードの後には1つのスペースが必要
        // 開始の括弧の後にスペースを置かない
        // 終了の括弧の前にスペースを置かない
        // 終了の括弧と開始の中括弧の間には1つのスペースを挟む
        // 本文は1段階インデントを下げる
        // 本文は開始の中括弧の次の行から始める
        // 終了の中括弧は本文の次の行に置く
        // 一行の文字数は最大120文字以内
        // -------------------------------------------------------------------------
        if ($expr1) {
            // if body
        } elseif ($expr2) {
            // すべての制御キーワードが1つの単語に見えるように、elseifと記述
        } else {
            // else body;
        }
        // -------------------------------------------------------------------------
        switch ($expr) {
            case 0:
                echo 'First case, with a break';
                // breakキーワード(もしくは他の中断するキーワード)はcase文の内容と同じレベルのインデント
                break;
            case 1:
                echo 'Second case, which falls through';
                // case文の内容が空ではなく、意図的に後続の文を実行させたい場合は// no breakのようなコメントを書く
                // no break
            case 2:
            case 3:
            case 4:
                echo 'Third case, return instead of break';
                return;
            default:
                echo 'Default case';
                break;
        }
        // -------------------------------------------------------------------------
        while ($expr) {
            // structure body
        }
        // -------------------------------------------------------------------------
        do {
            // structure body;
        } while ($expr);
        // -------------------------------------------------------------------------
        for ($i = 0; $i < 10; $i++) {
            // for body
        }
        // -------------------------------------------------------------------------
        foreach ($iterable as $key => $value) {
            // foreach body
        }
        // -------------------------------------------------------------------------
        try {
            // try body
        } catch (FirstThrowableType $e) {
            // catch body
        } catch (OtherThrowableType | AnotherThrowableType $e) {
            // catch body
        } finally {
            // finally body
        }
        // -------------------------------------------------------------------------
        // 型キャスト演算子は括弧の内側にスペースを置かない
        $intValue = (int) $input;
        // 全ての代数演算子、比較演算子、代入演算子、ビット演算子、論理演算子、文字列演算子、型演算子は
        // 前後に1個以上のスペースを置く
        if ($a === $b) {
            // 比較対象を右に置く
            // 可能な限り厳密な比較をおこなう
            $value = 0;
            if ($value == null) {
                // nullをintにキャストすると0のため結果はtrueになり、処理が実行される
            }
        } elseif ($a > $b) {
            $foo = $a + $b * $c;
        }
        // 三項演算子は?と:それぞれの前後に1個以上のスペースを置く
        $variable = $foo ? 'foo' : 'bar';
        // -------------------------------------------------------------------------
        // メソッド呼出は引数列開始の括弧の後、引数列終了の括弧の前にスペースを置かない
        $html = $this->getBbsHtml(1, true);
    }
}
