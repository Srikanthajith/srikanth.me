<?php
require 'PHPMailerAutoload.php';




/*echo $username;
echo $gender;
echo $email;
echo $passid;
echo $mobnum;
echo $collagename;
echo $dept; */
$username=$_POST["username"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$passid=$_POST["passid"];
$mobnum=$_POST["mobnum"];
$collegename=$_POST["collegename"];
$var=mt_rand(1000,9999);
$var1 = (string)$var;
$cognitid='cg'.$var1;
$dept=$_POST["country"];
$host="localhost";
$user="mnmcoito_cogy";
$password="cogy2k16";
$db="mnmcoito_cognit2k16";
$conn=mysqli_connect($host,$user,$password,$db);

    if (!$conn)
		{
  			echo '<script>alert(" Unable to connect to server! ");</script>';
		}
	if (!mysqli_select_db($conn,$db))
		{
  			echo '<script>alert(" Unable to connect to server! ");</script>';
		}
	else
	   {
		   
		   $sql = "select email from cognit;";
		   $result = mysqli_query($conn,$sql);
		   
		   while($row = mysqli_fetch_row($result))
				{
   					foreach($row as $cell)
	  					{
						
						    if($cell==$email)
							
							{
								echo '<script>alert(" User id already exsist! ");</script>';
								echo "<script>location.href='../index.html';</script>";
							break;
							}
							
						}
				}
				
		 $sql = "select cognitid from cognit;";

		   $result = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_row($result))
				{
   					foreach($row as $cell)
	  					{
							
							if($cell == $cognitid)
							
							{
$var=mt_rand(1000,9999);
$var1 = (string)$var;
$c='cg';
$cognitid=$c.$var1;
/*
echo '<script>alert(" some issue with the server please register again! ");</script>';
echo "<script>location.href='material.php';</script>";*/
break;
							   	
							}
							
						}
				}
				
				
$sql="insert into cognit(cognitid,name,gender,email,password,mobnum,collegename,dept) values('$cognitid','$username','$gender','$email','$passid','$mobnum','$collegename','$dept');";
		    $result = mysqli_query($conn,$sql);	   	
		    $lastinsert=$conn->insert_id;
	 
			
			if(!$result)
			{
				echo '<script>alert(" Registration Unsuccessful! ");</script>';
				echo "<script>location.href='../index.html';</script>";
			}
			else
			{
				echo '<script>alert(" Registration Successful!Your CognitID has been sent to your email address!");</script>';
				echo "<script>location.href='../index.html';</script>";
			}
			
			 
			
	   }
	   
	   $s = "select email,name,cognitid from cognit where id=$lastinsert;";
       $results = mysqli_query($conn,$s);
       
while($rows = mysqli_fetch_row($results))
{
      
      $cells=$rows[0];
      $namz=$rows[1];
      $ids=$rows[2];

  $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'cognit2k16@gmail.com';                 // SMTP username
$mail->Password = 'ageofCODERS';                           // SMTP password
$mail->SMTPSecure ='TLS';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('info@mnmcognit.com', 'COGNIT 2K16-CONFIRMATION MAIL');
$mail->addReplyTo('info@mnmcognit.com', 'Information');
$mail->addAddress($cells, 'Joe User');     // Add a recipient
               // Name is optional
/*
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);  */                                // Set email format to HTML

$mail->Subject = 'COGNIT 2K16-CONFIRMATION MAIL';
$mail->Body    = '

Greetings from Team Cognit !<br/><br/>

Welcome to Cognit2k16, the state level technical symposium conducted by the Department of Computer Science and Engineering,MNM jain Engineering College,Chennai scheduled on August 20th,2016.<br/><br/>
Your NAME is<b> '.$namz.'</b> and Your <b>COGNIT-ID is '.$ids.'</b>,<br/>
Since you have already registered online, you need not register on the spot and you can participate in any of our events on the day of the symposium.<br/><br/>

Want to know more about Cognit ? Check out our website at http://www.mnmcognit.com. Also follow us on our facebook page https://www.facebook.com/cognitmnm and our youtube page https://www.youtube.com/channel/UCqpD2S2M00nJM9rPz68IS-w.<br/><br/>

Cognit we are Coders_Beyond_ages<br/>


Contact Details:<br/>

Secretary: V.Tamizhselvan : 9444584319<br/>
Joint Secretary: Karthikeyan : 9087632273<br/>

For any queries please e-mail us at info@mnmcognit.com<br/><br/> 

Regards,<br/>
Team Cognit';
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
}

mysqli_close($link);
?>


