<?
$Email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$body .= "Email: " . $Email . "\n";
$body .= "subject: " . $subject . "\n";
$body .= "Message: " . $message . "\n";
//replace with your email
mail("valeitao@hotmail.com","Contacting from Personal Page",$body);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your email has been sent. Thank You!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>