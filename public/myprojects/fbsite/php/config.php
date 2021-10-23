<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1637644639866721'; //Facebook App ID
$appSecret = 'cdea96e12e495c9d807de863924f2516'; // Facebook App Secret
$homeurl = 'http://localhost/urbanrider/fblogin.php';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>