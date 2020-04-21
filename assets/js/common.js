'use strict';
var Common = function() {}
Common.prototype.construct = function() {
    $("#back_button").on("click", function(){
        history.back();
        return false;
    });
    $("#login_button").on("click", function(){
        location.href = "./login";
        return false;
    });
    $("#guide_button").on("click", function(){
        location.href = "./guide";
        return false;
    });
    $("#logout_button").on("click", function(){
        Swal.fire({
            title: 'ログアウト',
            text: "ログアウトしてよろしいでしょうか？",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK'
        })
        .then((result) => {
            if (result.value) {
                Swal.fire(
                    'ログアウト完了',
                    'ご利用ありがとうございました。<br />またのご利用をお待ちしております。',
                    'success'
                )
            }
        })
        return false;
    });
}
$(function() {
    Common.prototype.construct();
});
