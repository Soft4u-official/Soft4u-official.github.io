<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$subject = $_POST{'subject'};
$phone = $_POST{'phone'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Phone: ".$phone."
Message: ".$message."

";

mail ("soft4uofficial@gmail.com" , "New Message", $email_message);
header("location: ../../mail-success.html");
?>


