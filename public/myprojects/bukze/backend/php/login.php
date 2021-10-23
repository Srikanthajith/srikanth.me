<?php

session_start();

    $useremail = $_POST['useremail'];

    $password = $_POST['password'];


    if($useremail == "creditcard" && $password == "password"){
           echo '<script language="javascript">';
           echo 'alert("You have given Online payment option, Click OK to continue")';
           echo '</script>';
           echo'<script>window.location="../adminpage.php";</script>';
            $_SESSION["useremail"]=$useremail;
    }
    else if($useremail == "creditcard11" && $password == "password11"){
           echo '<script language="javascript">';
           echo 'alert("You have given MOBILEWALLET as your payment, Click OK to start building your profile")';
           echo '</script>';
           echo'<script>window.location="../adminpage.php";</script>';
            $_SESSION["useremail"]=$useremail;
    }
    else {
           echo '<script language="javascript">';
           echo 'alert("You are not a user")';
           echo '</script>';
           echo'<script>window.location="../loginpage.php";</script>';
           $_SESSION["useremail"]=NULL;
         }

?>
