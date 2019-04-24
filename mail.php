<?php
    $to = 'sarthaksnh5@gmail.com';
    $firstname = $_POST["fname"];
    $email= $_POST["email"];
	$subject= $_POST["subject"];
    $text= $_POST["message"];
    $phone= $_POST["phone"];
    
	
	function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
	}
	
	$firstname = clean_text($firstname);
	$email = clean_text($email);
	$text = clean_text($text);
	$subject = clean_text($subject);
	
    $message = $firstname.$email.$text;

    mail($to, $subject, $message)
?>
