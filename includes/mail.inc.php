<?php
$to = "example@example.com";
$subject = "Kontaktformular";
$message = "Vorname: " .$_POST['forename']."\n"
	."Name: " .$_POST['surname']. "\n"
	."Strasse: " .$_POST['street']. "\n"
	."Plz: " .$_POST['zip']. "\n"
	."Ort: " .$_POST['city']. "\n"
	."E-Mail: " .$_POST['email']. "\n"
	."Telefon: " .$_POST['phone']. "\n";
$header = "From:example@example.com\nX-Mailer:PHPmail()\nX-Priority:1\nMSMail-Priority:high";

$send = mail($to, $subject, $message, $header);

if ($send){
	echo "Besten Dank für Ihre Mitteilung";
}
?>