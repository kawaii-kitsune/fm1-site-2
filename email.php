<?php
if(isset($_POST['email'])&& $_POST['email']!=""){
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $userName=$_POST['name'];
        $userEmail=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $body="";
        $to="babis-k@outlook.com";

        $body.="From: ".$userName."\r\n";
        $body.="Email: ".$userEmail."\r\n";
        $body.="Message: ".$message."\r\n";

        mail($to,$subject,$body);

        header("Location: index.php?mail=ok");
    }
}
?>
						
					
						
					