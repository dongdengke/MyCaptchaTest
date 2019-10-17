<?php
namespace xiaokeke\chaptcha;
class User{
  public static function login($username,$password){
    if($username=="xiaokeke"&&$password=="123456"){
      return "login success";
    }else{
      return "login failed";
    }
  }
}
?>