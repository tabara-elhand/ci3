<?php
/**
 * 引数をブラウザのコンソールに出力
 *
 * @param  variant     $params   文字列、配列など
 * @return false
 */
function debugConsole($params){
    echo '<script>console.log('.json_encode($params).');</script>';
}
/**
 * 引数をCodeIgniterのログに出力
 *
 * @param  variant     $params   文字列、配列など
 * @return false
 */
function debugLog($params, $log_threshold = 2){
    $log_type = $log_threshold === 2 ? 'debug' : 'error';
    log_message($log_type, var_export($params, true) . "\n");
}
/**
 * 引数をエスケープ処理
 *
 * @param  string     $params   文字列
 * @return false
 */
function xss_escape($params)
{
    $return = htmlspecialchars($params, ENT_QUOTES, 'UTF-8');
    return $return;
}
