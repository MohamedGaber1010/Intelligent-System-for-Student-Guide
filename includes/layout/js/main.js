$(function() {
  "use strict";
  $(".register .signup_button").mouseenter(function () {
    $(".register .login_button").css({"z-index":"0","background":"#FFF","color":"#333"});
  });
  $(".register .signup_button").mouseleave(function () {
    $(".register .login_button").css({"z-index":"1","background":"#FF4800","color":"#FFF"});
  });
});
