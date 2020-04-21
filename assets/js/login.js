'use strict';
var Login = function() {}
Login.prototype.construct = function() {
    $("#back_button").on("click", function(){
        history.back();
        return false;
    });
}
$(function() {
    Login.prototype.construct();
});
