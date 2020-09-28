<?php 


       $UserName = $_POST['name'];
       $mailFrom = $_POST['email'];
       $Subject = $_POST['subject'];
       $Msg = $_POST['message'];

       $mailTo= "hitesh.kumar61@yahoo.com" ;
       $header="From:".$mailFrom;
       $txt ="You have received an e-mail from".$UserName.".\n\n".$Msg;

       mail($mailTo,$Subject, $txt, $headers);
       header("Location: index:html?mailsend");

?>