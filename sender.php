<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
   

	$to = "revv80@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "CONTACT US";

	
	$msg="
    Имя: $name /n
    Почта: $email";
    mail($to, $subject, $msg, "From: $to");

?>


