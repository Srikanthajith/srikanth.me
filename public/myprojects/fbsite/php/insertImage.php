<?php

include '../fblogin.php';
require 'phpmailer/PHPMailerAutoload.php';

$username=$_POST["username"];
$motivequote=$_POST["motivequote"];

$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','urbanrider') or die('Unable To connect');

    $fbemail=$user_profile['email'];
    $sql = "insert into details (username,fullname,facebookurl,motivequote,photo) values('$username','$fbusername','$fbemail','$motivequote',?)";



    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);


    $check = mysqli_stmt_affected_rows($stmt);


    if($check==true){
    
    header("Location:../index.html");


  $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'srikanth.ajith@gmail.com';                 // SMTP username
$mail->Password = 'sridhoniajiA1';                           // SMTP password
$mail->SMTPSecure ='TLS';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('srikanth.ajith@gmail.com', 'CONFIRMATION MAIL');
$mail->addReplyTo('srikanth.ajith@gmail.com', 'Information');
$mail->addAddress($fbemail, $fbusername);     // Add a recipient
               // Name is optional
/*
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true); 

 */                                // Set email format to HTML




$mail->Subject = 'Motivation quote';
$mail->Body    = '


Hi,
<br/><br/>
My facebook profile name: www.facebok.com/motivationquote<br/>
My email address: iammotivater@gmail.com<br/>

Username: '.$username.'<br/>
Fb name: '.$fbusername.'<br/>
Motivationquote:'.$motivequote.'<br/>


';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else 
{
    echo 'Message has been sent';
    break;
}


    }else{
        header('Location: ../upimage.php?failure');
    }
    mysqli_close($con);
}else{
    header('Location:../main.html');
}

?>