'use strict';
var BbsPost = function() {}
BbsPost.prototype.construct = function() {
    $("#bbs_list_button").on("click", function(){
        location.href ="./bbs_list";
        return false;
    });
    $(".thumb").on("click", function(){
        Swal.fire({
            title: '画像削除',
            text: "画像削除してよろしいでしょうか？",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK'
        })
        .then((result) => {
            if (result.value) {
                Swal.fire(
                    '画像削除完了しました',
                    '画像は1つの投稿につき、4枚まで設定することが可能です。',
                    'success'
                )
            }
        })
        return false;
    });
}
$(function() {
    BbsPost.prototype.construct();
});
