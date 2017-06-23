<?php

$EmailFrom = "info@volley4fun.com";
$EmailTo = "hokoro2002@yahoo.com,tror.spb@gmail.com";
$Subject = "Сообщение из формы обратной связи : Volley4fun.com";

$Name = Trim(htmlspecialchars(stripslashes($_POST['name'])));
$Lastname = Trim(htmlspecialchars(stripslashes($_POST['lastname'])));
$Birth_date = Trim(htmlspecialchars(stripslashes($_POST['birth_date'])));
$Proficiency = Trim(htmlspecialchars(stripslashes($_POST['proficiency'])));
$Sex = Trim(htmlspecialchars(stripslashes($_POST['sex'])));
$Country = Trim(htmlspecialchars(stripslashes($_POST['country'])));
$Visit = Trim(htmlspecialchars(stripslashes($_POST['visit'])));
$Accommodation = Trim(htmlspecialchars(stripslashes($_POST['accommodation'])));
$Payment = Trim(htmlspecialchars(stripslashes($_POST['payment'])));
$Contacts = Trim(htmlspecialchars(stripslashes($_POST['contacts'])));
$Message = Trim(htmlspecialchars(stripslashes($_POST['message'])));
$Body = "";

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../message-error.htm\">";
  exit;
}

// prepare email body text
$Body .= "И М Я : ";
$Body .= $Name;
$Body .= "\n\n";

$Body .= "Ф А М И Л И Я : ";
$Body .= $Lastname;
$Body .= "\n\n";

$Body .= "Д А Т А  Р О Ж Д Е Н И Я : ";
$Body .= $Birth_date;
$Body .= "\n\n";

$Body .= "У Р О В Е Н Ь  И Г Р Ы : ";
$Body .= $Proficiency;
$Body .= "\n\n";

$Body .= "П О Л : ";
$Body .= $Sex;
$Body .= "\n\n";

$Body .= "С Т Р А Н А : ";
$Body .= $Country;
$Body .= "\n\n";

$Body .= "Э К С К У Р С И Я  В  В Е Н Е Ц И Ю : ";
$Body .= $Visit;
$Body .= "\n\n";

$Body .= "Р А З М Е Щ Е Н И Е  В  А П А Р Т А М Е Н Т А Х  Н А : ";
$Body .= $Accommodation;
$Body .= "\n\n";

$Body .= "О П Л А Т А : ";
$Body .= $Payment;
$Body .= "\n\n";

$Body .= "E - M A I L : ";
$Body .= $Contacts;
$Body .= "\n\n===\n\n";

$Body .= "";
$Body .= $Message;
$Body .= "\n\n";

// if the birth_place field is empty
if(isset($_POST['birth_place']) && $_POST['birth_place'] == ''){
// send email 
$success = mail($EmailTo, '=?utf-8?B?'.base64_encode($Subject).'?=', $Body, "From: <$EmailFrom>");
}

// redirect to success page
if ($success){
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../../sent.htm\">";
}
else{
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../../sent.htm\">";
}
?>

<?php
	session_start(); 
	$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
?>