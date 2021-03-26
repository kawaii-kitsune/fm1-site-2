<?php
ini_set("sendmail_from", "info@gm1.hmu.gr");

if(isset($_POST['email'])&& $_POST['email']!=""){
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $userName=$_POST['name'];
        $userEmail=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $body="";
        $to="babiskolokouris@gmail.com";

        $body.="From: ".$userName."\r\n";
        $body.="Email: ".$userEmail."\r\n";
        $body.="Message: ".$message."\r\n";

        mail($to,$subject,$body);

        header("Location: index.php?mail=ok");
    }
}
?>
						
					
						
					