'use strict';
var Guide = function() {}
Guide.prototype.construct = function() {
    $.ajax({
        // URL指定
        url: 'guide/getHtml',
        // データ形式指定
        dataType : 'text',
        // 通信に成功した場合の処理
        success: function( data ) {
            //hljs.initHighlightingOnLoad();
            $("#collapse99").append(data);
            hljs.initHighlightingOnLoad();
            // $( '#sample-text' ).html( message );
            // $( '#sample-text' ).html( obj.cｎode );
            // $( '#sample-result' ).html( '<hr/><font color="blue">読み込み成功</font><hr/>' );
        },
        //通信に失敗した場合の処理
        error: function( data ) {
            $( '#sample-result' ).html( '<font color="red">読み込みNG</font>' );
        }
    });
}
$(function() {
    Guide.prototype.construct();
});
